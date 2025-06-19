@extends('pages.index')
@section('title', 'Dashboard')

@section('content')
    <div class="content">
        <div class="page-header">
            <div class="add-item d-flex">
                <div class="page-title">
                    <h4>Edit Housing Unit</h4>
                    <h6>Edit data</h6>
                </div>
            </div>
            <div class="page-btn">
                <a href="{{ route('housing-units.index') }}" class="btn btn-secondary"><i data-feather="arrow-left" class="me-2"></i>Back to List</a>
            </div>
        </div>
        
        <form action="{{ route('housing-units.update', $data->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="accordions-items-seperate" id="accordionExample">
                <div class="accordion-item border mb-4">
                    <h2 class="accordion-header" id="headingOne">
                        <div class="accordion-button bg-white" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-controls="collapseOne">
                            <div class="d-flex align-items-center justify-content-between flex-fill">
                                <h5 class="d-inline-flex align-items-center"><i class="ti ti-users text-primary me-2"></i><span>General Information</span></h5>
                            </div>
                        </div>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                        <div class="accordion-body border-top">
                            <div class="new-employee-field">
                                <div class="row">
                                    <div class="col-lg-4 col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label">Residential Area <span class="text-danger">*</span></label>
                                            <select name="residential_area_id" class="form-control" required>
                                                <option value="">-- Pilih Perumahan --</option>
                                                @foreach($residentialAreas as $area)
                                                    <option value="{{ $area->id }}"
                                                        {{ old('residential_area_id', $data->residential_area_id) == $area->id ? 'selected' : '' }}>
                                                        {{ $area->name }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label">Resident (Warga)<span class="text-danger">*</span></label>
                                            <select name="resident_id" class="form-control" required>
                                                <option value="">-- Pilih Warga --</option>
                                                @foreach($residents as $resident)
                                                    <option value="{{ $resident->id }}"
                                                        {{ old('resident_id', $data->resident_id) == $resident->id ? 'selected' : '' }}>
                                                        {{ $resident->name }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label">Unit Code / House Number<span class="text-danger ms-1">*</span></label>
                                            <input type="text" name="unit_code" class="form-control"
                                                value="{{ old('unit_code', $data->unit_code) }}" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label">Block<span class="text-danger ms-1">*</span></label>
                                            <input type="text" name="block" class="form-control"
                                                value="{{ old('block', $data->block) }}" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label">Floor Area (Luas Tanah) <span class="text-danger ms-1">*</span></label>
                                            <input type="text" name="floor_area" class="form-control"
                                                value="{{ old('floor_area', $data->floor_area) }}" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label">Ownership Status <span class="text-danger">*</span></label>
                                            <select name="ownership_status" class="form-control" required>
                                                <option value="">-- Pilih Status --</option>
                                                <option value="owner" {{ old('ownership_status', $data->ownership_status) == 'owner' ? 'selected' : '' }}>Owner</option>
                                                <option value="rent" {{ old('ownership_status', $data->ownership_status) == 'rent' ? 'selected' : '' }}>Rent</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>  
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="text-end mb-3">
                <button type="submit" class="btn btn-primary">Update</button>
            </div>
        </form>

    </div>
@endsection

@section('customjs')
    <script src="{{ URL::to('assets/custom/pages/master/housingUnit.js') }}?cache={{ ENV('APP_VERSION') }}"></script>
@endsection
