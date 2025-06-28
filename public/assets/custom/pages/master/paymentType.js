$(document).ready(function () {
    $('.search-keyword').on("keyup", function (e) {
        table.ajax.reload();
    });

    $('.filter-residential-area').select2({
        width: '100%',
        placeholder: "Cari berdasarkan Perumahan",
        allowClear: true
    });
    $('.filter-residential-area').on("change", function (e) {
        table.ajax.reload();
    });

    table = $("#payment-type-table").DataTable({
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
                data: "residentialAreaName",
                title: "Perumahan",
            },
            {
                data: "name",
                title: "Title",
            },
            {
                data: "is_recurring",
                title: "Berkala",
                className: "text-center",
            },
            {
                data: "cut_off_date",
                title: "Tanggal Potong",
            },
            {
                data: "description",
                title: "Deskripsi",
            },
            {
                data: "updated_at",
                title: "Update Terakhir",
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
            url: host + "/api/payment-type",
            type: "POST",
            headers: {
                'Authorization': 'Bearer ' + token,
            },
            data: function (e) {
                e.filter = {
                    "residential_area_id": $(".filter-residential-area").val(),
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
                "targets": '_all',
                "createdCell": function (td, cellData, rowData, row, col) {
                    $(td).css('padding-top', '3px')
                    $(td).css('margin', '0px')
                    $(td).css('padding-bottom', '3px')
                }
            },
            {
                targets: [0, 5],
                orderable: false,
                className: "dt-head-center text-center",
            },
        ],
    });
});