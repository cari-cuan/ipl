function logout() {
    toastr.success("Logout berhasil");
    localStorage.clear()
    setTimeout(function () {
        location.href = "/";
    }, 3000);
}

$(document).ready(function () {
    var token = localStorage.getItem("token");
    if (token == null) {
        // alert(token);
        location.href = "/";

    } else {
        document.cookie = "auth_token=; path=/;";
    }
});