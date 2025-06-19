@extends('pages.index')
@section('title', 'Dashboard')

@section('content')
    <div class="page-header">
        <div class="add-item d-flex">
            <div class="page-title">
                <h4 class="fw-bold">Unit Rumah</h4>
                <h6>Manage Unit</h6>
            </div>
        </div>
        <ul class="table-top-head">
            <li>
                <a data-bs-toggle="tooltip" data-bs-placement="top" title="Pdf"><img src="assets/img/icons/pdf.svg"
                        alt="img"></a>
            </li>
            <li>
                <a data-bs-toggle="tooltip" data-bs-placement="top" title="Excel"><img src="assets/img/icons/excel.svg"
                        alt="img"></a>
            </li>
            <li>
                <a data-bs-toggle="tooltip" data-bs-placement="top" title="Refresh"><i class="ti ti-refresh"></i></a>
            </li>
            <li>
                <a data-bs-toggle="tooltip" data-bs-placement="top" title="Collapse" id="collapse-header"><i
                        class="ti ti-chevron-up"></i></a>
            </li>
        </ul>
        <div class="page-btn">
            <a href="{{ route('housing-units.create') }}" class="btn btn-primary"><i class="ti ti-circle-plus me-1"></i>Add New</a>
        </div>
        {{-- <div class="page-btn import">
            <a href="#" class="btn btn-secondary color" data-bs-toggle="modal" data-bs-target="#view-notes"><i
                    data-feather="download" class="me-1"></i>Import Product</a>
        </div> --}}
    </div>

    <!-- /product list -->
    <div class="card">
        <div class="card-body p-0">
            {{-- <div class="table-responsive">
                <table class="table" id="warga"></table>
            </div> --}}
            <div class="table-responsive">
                <table class="table" id="housing-unit-table">
                    <thead class="thead-light">
                        <tr>
                            <th>No</th>
                            <th>Nama Perumahan</th>
                            <th>Kode Unit</th>
                            <th>Blok</th>
                            <th>Luas Tanah</th>
                            <th>Nama Penghuni</th>
                            <th>Status</th>
                            <th>Last Update</th>
                            <th class="no-sort">Action</th>
                        </tr>
                    </thead>
                </table>
            </div>
        </div>
    </div>
@endsection

@section('customjs')
    <script src="{{ URL::to('assets/custom/pages/master/housingUnit.js') }}?cache={{ ENV('APP_VERSION') }}"></script>
    <script> 
        $(document).on('click', '.btn-delete', function () {
            let id = $(this).data('id');
            if (confirm('Yakin hapus data ini?')) {
                $.ajax({
                    url: '/resident/' + id,
                    type: 'DELETE',
                    data: {
                        _token: $('meta[name="csrf-token"]').attr('content')
                    },
                    success: function (res) {
                        table.ajax.reload(); // reload datatables
                        alert('Data berhasil dihapus.');
                    },
                    error: function (xhr) {
                        alert('Gagal menghapus data.');
                    }
                });
            }
        });
    </script>
@endsection
