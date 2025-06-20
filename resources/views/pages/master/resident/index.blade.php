@extends('pages.index')
@section('title', 'Dashboard')

@section('content')
    {{-- <div class="page-header">
        <div class="add-item d-flex">
            <div class="page-title">
                <h4 class="fw-bold">Warga</h4>
                <h6>Manage Warga</h6>
            </div>
        </div>
    </div> --}}

    <!-- /product list -->
    <div class="card">

        <div class="card-header d-flex align-items-center justify-content-between flex-wrap row-gap-3">
            <div class="d-inline-flex align-items-center">
                <span class="title-icon bg-soft-info fs-16 me-2"><i class="ti ti-users"></i></span>
                <h5 class="card-title mb-0">Data Warga</h5>
            </div>
            <div class="d-flex table-dropdown my-xl-auto right-content align-items-center flex-wrap row-gap-3">
                <ul class="table-top-head">
                    <li>
                        <a data-bs-toggle="tooltip" data-bs-placement="top" title="Pdf"><img src="assets/img/icons/pdf.svg"
                                alt="img"></a>
                    </li>
                    <li>
                        <a data-bs-toggle="tooltip" data-bs-placement="top" title="Excel"><img
                                src="assets/img/icons/excel.svg" alt="img"></a>
                    </li>
                    <div
                        class="page-btn d-flex table-dropdown my-xl-auto right-content align-items-center flex-wrap row-gap-3">
                        <a href="{{ route('resident.create') }}" class="btn btn-primary"><i
                                class="ti ti-circle-plus me-1"></i>Add
                            New</a>
                    </div>
                </ul>

            </div>

        </div>
        <div class="card-body">
            <form action="#">
                <div class="mb-3 row">
                    <label class="col-form-label col-md-2">Pencarian</label>
                    <div class="col-md-10">
                        <input type="text" class="form-control  search-keyword" placeholder="Cari data....">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label class="col-form-label col-md-2">Pemilik </label>
                    <div class="col-md-10">
                        <select class="js-example-basic-single select2 filter-pemilik form-control">
                            <option value="">-- Pilih --</option>
                            <option value="1">YA</option>
                            <option value="0">Tidak</option>
                        </select>
                    </div>
                </div>

            </form>
        </div>
        {{-- <div class="card-body p-0"> --}}
        {{-- <div class="table-responsive">
                <table class="table" id="warga"></table>
            </div> --}}

        <div class="table-responsive">
            <table class="table" id="resident-table">
            </table>
        </div>
        {{-- </div> --}}
    </div>
@endsection

@section('customjs')
    <script src="{{ URL::to('assets/custom/pages/master/resident.js') }}?cache={{ ENV('APP_VERSION') }}"></script>
    <script>
        $(document).on('click', '.btn-delete', function() {
            let id = $(this).data('id');
            if (confirm('Yakin hapus data ini?')) {
                $.ajax({
                    url: '/resident/' + id,
                    type: 'DELETE',
                    data: {
                        _token: $('meta[name="csrf-token"]').attr('content')
                    },
                    success: function(res) {
                        table.ajax.reload(); // reload datatables
                        alert('Data berhasil dihapus.');
                    },
                    error: function(xhr) {
                        alert('Gagal menghapus data.');
                    }
                });
            }
        });
    </script>
@endsection
