<!DOCTYPE html>
<html lang="en" data-layout="detached">

<head>

    @include('layouts.admin.meta')
    @include('layouts.admin.head')

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

                @yield('content')


            </div>
            <div
                class="copyright-footer d-flex align-items-center justify-content-between border-top bg-white gap-3 flex-wrap">
                <p class="fs-13 text-gray-9 mb-0">2025 &copy; www.iuranonline.com </p>
                <p>Designed & Developed By <a href="javascript:void(0);" class="link-primary">Dreams</a></p>
            </div>
        </div>



    </div>
    <!-- /Main Wrapper -->



    @include('layouts.admin.foot')


</body>


<!-- Mirrored from dreamspos.dreamstechnologies.com/html/template/layout-detached.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 11 Apr 2025 01:37:52 GMT -->

</html>
