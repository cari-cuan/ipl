<script src="{{ asset('assets/js/jquery-3.7.1.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/js/feather.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/js/script.js') }}" type="text/javascript"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
<script src="{{ asset('assets/custom/ui/toaster/toaster.config.js') }}"></script>

<script>
    $(document).ready(function() {
        var token = localStorage.getItem("token");
        if (token != null) {
            alert(token);
            location.href = "/dashboard";
            // $.ajax({
            //     url: api_url + "/auth/me",
            //     cache: false,
            //     headers: {
            //         Authorization: "Bearer " + token,
            //     },
            //     type: "POST",
            //     success: function(result) {
            //         if (result?.user?.id !== 0 || result?.user?.id !== undefined) {
            //             location.href = "/dashboard";
            //         }
            //     },
            //     error: function(result) {
            //         if (result.status == "401") {
            //             setTimeout(function() {
            //                 location.href = "/";
            //             }, 3000);
            //         } else {
            //             toastr.error("Internal server error");
            //         }
            //     },
            // });
        } else {
            document.cookie = "auth_token=; path=/;";
        }
    });
    $("#login").on("click", function() {
        // $("#login-form").submit();

        var email = $("#email").val();
        var password = $("#password").val();
        console.table({
            email: email,
            password: password
        });

        $.ajax({
            type: "POST",
            url: "http://127.0.0.1:8000/api/login",
            data: {
                email: email,
                password: password
            },
            success: function(resultsCookie) {
                toastr.success("Login berhasil");
                localStorage.setItem("token", resultsCookie?.token);
                setTimeout(function() {
                    location.href = "/dashboard";
                }, 3000);
            },
            error: function(result) {
                // if (result.status == "400") {
                //     toastr.error("Please check username & password ");
                // } else {
                //     toastr.error("Internal Server Error");
                // }
            },
        });
    });
</script>
