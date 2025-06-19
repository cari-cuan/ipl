$(document).ready(function () {
    table = $("#residential-area-table").DataTable({
        processing: true,
        serverSide: true,
        lengthMenu: [
            [3, 25, 50, 100],
            [3, 25, 50, 100],
        ],
        searching: false,
        sDom: 't',
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
                className: "text-center",
            },
            {
                data: "email",
                title: "Email",
                className: "text-center",
            },
            {
                data: "phone",
                title: "WA",
                className: "text-center",
            },
            {
                data: "address",
                title: "Alamat",
                className: "text-center",
            },
            {
                data: "city",
                title: "Kota",
                className: "text-center",
            },
            {
                data: "province",
                title: "Provinsi",
                className: "text-center",
            },
            {
                data: "postal_code",
                title: "Kode Pos",
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
            url: "http://127.0.0.1:8000/api/residential-area",
            type: "POST",
            // headers: {
            //     'Authorization': 'Bearer ' + api_token,
            // },
            data: function (e) {
                e.filter = {
                    "status_siswa": $(".filter-status").val(),
                }
                e.keyword = $(".search-keyword-table-siswa").val();
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
                "targets": '_all',
                "createdCell": function (td, cellData, rowData, row, col) {
                    $(td).css('padding-top', '3px')
                    $(td).css('margin', '0px')
                    $(td).css('padding-bottom', '3px')
                }
            },
            {
                targets: [0, 6],
                orderable: false,
                className: "dt-head-center text-center",
            },
        ],
    });
});