<?php

namespace App\Http\Controllers\Api\Master;

use App\Http\Controllers\Controller;
use App\Models\Master\ResidentModel;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class ResidentController extends Controller
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
        $query = ResidentModel::with('residentialArea');

        // Retrieve order column index and direction
        $orderColumnIndex = $request->input('order.0.column', 0); // default to column 1 if not provided
        $orderDirection = $request->input('order.0.dir', 'desc'); // default to ascending order

        // Map DataTables column index to database column name
        $columns = [
            0 => 'name',
            1 => 'email',
            2 => 'phone',
            3 => 'ktp_number',
            4 => 'is_owner',
            5 => 'join_date',
            6 => 'status',
            7 => 'updated_at',
            8 => 'residentialArea.name', 
        ];
        // Get the order column name based on the index
        if ($orderDirection !== 'asc' && $orderDirection !== 'desc') {
            $orderDirection = 'asc'; // Default to ascending if invalid direction
        }
        $orderColumn = $columns[$orderColumnIndex] ?? 'id';

        // Apply keyword search if provided
        if (!empty($keyword)) {
            $query->where(function ($q) use ($keyword) {
                $q->where('name', 'like', "%{$keyword}%");
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
        $recordsTotal = ResidentModel::count();

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
            $row->email = $list->email;
            $row->phone = $list->phone;
            $row->residentialAreaName = $list->residentialArea->name;
            $row->ktp_number = $list->ktp_number;
            $row->is_owner = $list->is_owner;
            $row->join_date = $list->join_date;
            $row->updated_at = $list->updated_at->translatedFormat('d F Y H:i');
            $row->action = '<a href="' . route('resident.edit', $list->id) . '" class="btn btn-sm btn-primary">Edit</a> ' .
                            '<button class="btn btn-sm btn-danger btn-delete" data-id="' . $list->id . '">Delete</button>';
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
