@extends('pages.index')
@section('title', 'Dashboard')

@section('content')
    <div class="content">
        <div class="page-header">
            <div class="add-item d-flex">
                <div class="page-title">
                    <h4>Add New</h4>
                    <h6>Create new data</h6>
                </div>
            </div>
            <div class="page-btn">
                <a href="{{ route('resident.index') }}" class="btn btn-secondary"><i data-feather="arrow-left" class="me-2"></i>Back to List</a>
            </div>
        </div>
        
        <form action="{{ route('resident.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="accordions-items-seperate" id="accordionExample">
                <div class="accordion-item border mb-4">
                    <h2 class="accordion-header" id="headingOne">
                        <div class="accordion-button bg-white" data-bs-toggle="collapse" data-bs-target="#collapseOne"  aria-controls="collapseOne">
                            <div class="d-flex align-items-center justify-content-between flex-fill">
                                <h5 class="d-inline-flex align-items-center"><i class="ti ti-users text-primary me-2"></i><span>General Information</span></h5>
                            </div>
                        </div>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                    <div class="accordion-body border-top">
                        <div class="new-employee-field">
                            {{-- <div class="profile-pic-upload">
                                <div class="profile-pic">
                                    <span><i data-feather="plus-circle" class="plus-down-add"></i> Profile Photo</span>
                                </div>
                                <div class="input-blocks mb-0">
                                    <div class="image-upload mb-0">
                                        <input type="file">
                                        <div class="image-uploads">
                                            <h4>Change Image</h4>
                                        </div>
                                    </div>
                                </div>
                            </div> --}}
                            <div class="row">
                                <div class="col-lg-4 col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Name<span class="text-danger ms-1">*</span></label>
                                        <input type="text" name="name" class="form-control" required>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Email<span class="text-danger ms-1">*</span></label>
                                        <input type="email" name="email" class="form-control" required>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Contact Number<span class="text-danger ms-1">*</span></label>
                                        <input type="text" name="phone" class="form-control" required>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Residential Area <span class="text-danger">*</span></label>
                                        <select name="residential_area_id" class="form-control" required>
                                            <option value="">-- Pilih Perumahan --</option>
                                            @foreach($residentialAreas as $area)
                                                <option value="{{ $area->id }}"
                                                    {{ old('residential_area_id', $resident->residential_area_id ?? '') == $area->id ? 'selected' : '' }}>
                                                    {{ $area->name }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">KTP Number<span class="text-danger ms-1">*</span></label>
                                        <input type="number" name="ktp_number" class="form-control" required>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="mb-3 form-check">
                                        <input type="checkbox" name="is_owner" value="1"
                                            class="form-check-input" id="is_owner"
                                            {{ old('is_owner', $resident->is_owner ?? false) ? 'checked' : '' }}>
                                        <label class="form-check-label" for="is_owner">Is Owner</label>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Join Date <span class="text-danger ms-1">*</span></label>
                                        <input type="date" name="join_date" class="form-control"
                                            value="{{ old('join_date', isset($resident) ? $resident->join_date : '') }}" required>
                                    </div>
                                </div>
                            </div>
                           
                        </div>
                    </div>
                    </div>
                </div>
            </div>

            <div class="text-end mb-3">
                {{-- <button type="button" class="btn btn-secondary me-2">Cancel</button> --}}
                <button type="submit" class="btn btn-primary">Save</button>
            </div>
        </form>
    </div>
@endsection

@section('customjs')
    <script src="{{ URL::to('assets/custom/pages/master/residentialArea.js') }}?cache={{ ENV('APP_VERSION') }}"></script>
@endsection
