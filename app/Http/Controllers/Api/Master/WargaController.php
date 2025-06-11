<?php

namespace App\Http\Controllers\Api\Master;

use App\Http\Controllers\Controller;
use App\Models\Master\WargaModel;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class WargaController extends Controller
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
        $query = WargaModel::select(
            'warga_id',
            'warga_nama',
            'warga_email',
            'warga_wa',
            'warga_perumahan',
            'warga_blok',
            'warga_no',
            'warga_tgl_daftar',
            'warga_password',
            'warga_status',
            'warga_reset_token',
        );

        // Retrieve order column index and direction
        $orderColumnIndex = $request->input('order.0.column', 0); // default to column 1 if not provided
        $orderDirection = $request->input('order.0.dir', 'desc'); // default to ascending order

        // Map DataTables column index to database column name
        $columns = [
            0 => 'warga_id',
            1 => 'warga_nama',
            2 => 'warga_email',
            3 => 'warga_wa',
            4 => 'warga_perumahan',
            5 => 'warga_blok',
            6 => 'warga_no',
            7 => 'warga_tgl_daftar',
            8 => 'warga_password',
            9 => 'warga_status',
            10 => 'warga_reset_token',
        ];
        $orderColumn = $columns[$orderColumnIndex] ?? 'warga_id';

        // Apply keyword search if provided
        if (!empty($keyword)) {
            $query->where(function ($q) use ($keyword) {
                $q->where('warga_nama', 'like', "%{$keyword}%");
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
        $recordsTotal = WargaModel::count();

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
            $row->warga_id = $list->warga_id;
            $row->warga_nama = '<div class="d-flex align-items-center">
                                    <a href="javascript:void(0);" class="avatar avatar-md me-2">
                                        <img src="assets/img/products/stock-img-01.png" alt="product">
                                    </a>
                                    <a href="javascript:void(0);">Lenovo IdeaPad 3 </a>
                                </div>';
            $row->warga_email = $list->warga_email;
            $row->warga_wa = $list->warga_wa;
            $row->warga_perumahan = $list->warga_perumahan;
            $row->warga_blok = $list->warga_blok;
            $row->warga_no = $list->warga_no;
            $row->warga_tgl_daftar = $list->warga_tgl_daftar;
            $row->warga_password = $list->warga_password;
            $row->warga_status = ' <div class="d-flex align-items-center">
                                    <a href="javascript:void(0);" class="avatar avatar-sm me-2">
                                        <img src="assets/img/users/user-30.jpg" alt="product">
                                    </a>
                                    <a href="javascript:void(0);">James Kirwin</a>
                                </div>';
            $row->warga_reset_token = $list->warga_reset_token;
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
