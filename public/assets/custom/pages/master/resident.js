$(document).ready(function () {
    $('.filter-pemilik').select2({
        width: '100%',
        placeholder: "Pilih Status",
        allowClear: true
    });
    $('.search-keyword').on("keyup", function (e) {
        table.ajax.reload();
    });

    $('.filter-pemilik').on("change", function (e) {
        table.ajax.reload();
    });

    table = $("#resident-table").DataTable({
        processing: true,
        serverSide: true,
        lengthMenu: [
            [10, 25, 50, 100],
            [10, 25, 50, 100],
        ],
        searching: false,
        info: false,
        dom: '<"top"i>rt<"card-footer justify-center md:justify-between flex-col md:flex-row gap-5 text-gray-600 text-2sm font-medium"flp><"clear">',
        columns: [
            {
                data: "no",
                title: "No",
                className: "text-center",
            },
            {
                data: "name",
                title: "Nama",
            },
            {
                data: "email",
                title: "Email",
            },
            {
                data: "phone",
                title: "WA",
            },
            {
                data: "residentialAreaName",
                title: "Nama Perumahan",
            },
            {
                data: "ktp_number",
                title: "Nomor KTP",
            },
            {
                data: "join_date",
                title: "Tanggal Bergabung",
            },
            {
                data: "is_owner",
                title: "Pemilik",
                className: "text-center",
            },
            {
                data: "updated_at",
                title: "Update Terakhir",
                className: "text-center",
            },
            {
                data: "action",
                title: "Action",
                className: "text-center",
                orderable: false,
                searchable: false,
            },
        ],
        order: [],
        ajax: {
            url: host + "/api/resident",
            type: "POST",
            headers: {
                'Authorization': 'Bearer ' + token,
            },
            data: function (e) {
                e.filter = {
                    "is_owner": $(".filter-pemilik").val(),
                }
                e.keyword = $(".search-keyword").val();
            },
            error: function (XMLHttpRequest, textStatus, errorThrown) {
                const myJSON = JSON.parse(XMLHttpRequest.responseText);
                if (myJSON.error == "invalid_token") {
                    toastr.error("Session anda selesai");
                    localStorage.removeItem("token");
                    location.href = base_url;
                }
            },
        },

        columnDefs: [
            {
                targets: [0, 8, 9],
                orderable: false,
                className: "dt-head-center text-center",
            },
        ],
    });
});