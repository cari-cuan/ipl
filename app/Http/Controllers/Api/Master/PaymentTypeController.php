<?php

namespace App\Http\Controllers\Api\Master;

use App\Http\Controllers\Controller;
use App\Models\Master\PaymentTypeModel;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class PaymentTypeController extends Controller
{
    public function datatables(Request $request): JsonResponse
    {
        // Retrieve page, size, and keyword from the request, with defaults
        $page = ($request->input('start', 0) / $request->input('length', 10)) + 1; // start is the offset
        $size = $request->input('length', 10); // number of records per page
        $keyword = $request->input('search.value', '') ?? $request->input('keyword', ''); // global search keyword
        $draw = $request->input('draw', 1); // DataTables draw
        // Calculate the offset based on the page number and size
        $start = ($page - 1) * $size;

        // Query the model
        $query = PaymentTypeModel::with('residentialArea');

        // Retrieve order column index and direction
        $orderColumnIndex = $request->input('order.0.column', 0); // default to column 1 if not provided
        $orderDirection = $request->input('order.0.dir', 'desc'); // default to ascending order

        // Map DataTables column index to database column name
        $columns = [
            0 => 'name',
            1 => 'residentialArea.name',
            2 => 'is_recurring',
            3 => 'cut_off_date',
            4 => 'description',
            5 => 'updated_at',
        ];
        // Get the order column name based on the index
        if ($orderDirection !== 'asc' && $orderDirection !== 'desc') {
            $orderDirection = 'asc'; // Default to ascending if invalid direction
        }
        $orderColumn = $columns[$orderColumnIndex] ?? 'id';

        // Apply keyword search if provided
        if (!empty($keyword)) {
            $query->where(function ($q) use ($keyword) {
                $q->orWhere('name', 'like', "%{$keyword}%");
                $q->orWhere('description', 'like', "%{$keyword}%");
                $q->orWhereHas('residentialArea', function($sub) use ($keyword) {
                    $sub->where('name', 'like', "%$keyword%");
                });
            });
        }

        // Apply dynamic filters based on `filter[]` parameters
        if ($request->has('filter')) {
            $filters = $request->input('filter');  // Retrieve the filters as an array
            foreach ($filters as $column => $value) {
                if ($value != null || $value != '') {
                    $query->where($column, $value);
                }
                // Apply filter dynamically for each column and its value
            }
        }

        // Apply sorting based on the order column and direction
        $query->orderBy($orderColumn, $orderDirection);

        // Total records (without filters)
        $recordsTotal = PaymentTypeModel::count();

        // Get filtered record count based on the search query
        $recordsFiltered = $query->count();

        // Retrieve paginated result based on the offset and size
        $lists = $query->skip($start)->take($size)->get();

        // Prepare the data for DataTables
        $data = [];
        $no = $start;

        foreach ($lists as $list) {
            $no++;
            $row = new \stdClass(); // Create an empty object for each row
            $row->no = $no; // Index number
            $row->name = $list->name;
            $row->residentialAreaName = $list->residentialArea ? $list->residentialArea->name : '-';
            if ($list->is_recurring == 1) {
                $row->is_recurring = '<i class="fa fa-check text-success"></i>';
            } else {
                $row->is_recurring = '<i class="fa fa-times text-danger"></i>';
            }
            $row->cut_off_date = $list->cut_off_date ? $list->cut_off_date : '-';
            $row->description = $list->description;
            $row->updated_at = $list->updated_at->translatedFormat('d F Y H:i');
            $row->action = '<div class="btn-group me-2">
                                <a href="' . route('payment-types.edit', $list->id) . '" class="btn btn-light"><i class="fa fa-edit"></i></a>
                                <button class="btn btn-light" data-id="' . $list->id . '"><i class="fa fa-trash"></i></button>
                            </div>';
            $data[] = $row;
        }

        // Return the DataTables response with the paginated data
        $output = [
            'draw' => $draw,
            'recordsTotal' => $recordsTotal,          // Total records without any filters
            'recordsFiltered' => $recordsFiltered,    // Total filtered records (based on keyword)
            'data' => $data,
            'page' => $page,
            'size' => $size
        ];

        return response()->json($output);
    }
}
