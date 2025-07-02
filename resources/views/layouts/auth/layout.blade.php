<!DOCTYPE html>
<html lang="en">

<head>

    @include('layouts.auth.head');

</head>
<script>
    let host = "{{ env('APP_URL') }}";
</script>

<body class="account-page bg-white">

    @yield('content');

    @include('layouts.auth.foot');

</body>


</html>
