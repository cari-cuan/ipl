<!DOCTYPE html>
<html lang="en" data-layout="detached">

<head>

    @include('layouts.admin.meta')
    @include('layouts.admin.head')
    @yield('customcss')
</head>

<body>
    {{-- <div id="global-loader">
        <div class="whirly-loader"> </div>
    </div> --}}
    <!-- Main Wrapper -->
    <div class="main-wrapper">

        <!-- Header -->
        @include('layouts.admin.header')
        <!-- /Header -->

        <!-- Sidebar -->
        @include('layouts.admin.sidebar')
        <!-- /Sidebar -->

        <div class="page-wrapper">
            <div class="content">
                <div class="welcome d-lg-flex align-items-center justify-content-between">
                    <div class="d-flex align-items-center welcome-text">
                        <h3 class="d-flex align-items-center"><img src="{{ asset('assets/img/icons/hi.svg') }}"
                                alt="img">&nbsp;Hi
                            John Smilga,</h3>&nbsp;<h6>here's what's happening with your store today.</h6>
                    </div>
                    {{-- <div class="d-flex align-items-center">
                        <div class="input-icon-start position-relative me-2">
                            <span class="input-icon-addon fs-16 text-gray-9">
                                <i class="ti ti-calendar"></i>
                            </span>
                            <input type="text" class="form-control date-range bookingrange"
                                placeholder="Search Product">
                        </div>
                        <ul class="table-top-head">
                            <li>
                                <a data-bs-toggle="tooltip" data-bs-placement="top" aria-label="Refresh"
                                    data-bs-original-title="Refresh"><i class="ti ti-refresh"></i></a>
                            </li>
                            <li>
                                <a data-bs-toggle="tooltip" data-bs-placement="top" id="collapse-header"
                                    aria-label="Collapse" data-bs-original-title="Collapse"><i
                                        class="ti ti-chevron-up"></i></a>
                            </li>
                        </ul>
                    </div> --}}
                </div>
                @yield('content')

            </div>
            <div
                class="copyright-footer d-flex align-items-center justify-content-between border-top bg-white gap-3 flex-wrap">
                <p class="fs-13 text-gray-9 mb-0">2025 &copy; www.iuranonline.com </p>
                {{-- <p>Designed & Developed By <a href="javascript:void(0);" class="link-primary">Dreams</a></p> --}}
            </div>
        </div>



    </div>
    <!-- /Main Wrapper -->



    @include('layouts.admin.foot')
    @yield('customjs')


</body>


<!-- Mirrored from dreamspos.dreamstechnologies.com/html/template/layout-detached.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 11 Apr 2025 01:37:52 GMT -->

</html>
