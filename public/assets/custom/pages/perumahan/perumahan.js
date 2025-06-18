$(document).ready(function () {
    // 'warga_id',
    //     'warga_nama',
    //     'warga_email',
    //     'warga_wa',
    //     'warga_perumahan',
    //     'warga_blok',
    //     'warga_no',
    //     'warga_tgl_daftar',
    //     'warga_password',
    //     'warga_status',
    //     'warga_reset_token',
    table = $("#perumahan-table").DataTable({
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
                data: "report_date",
                title: "Tanggal Lapor",
                className: "text-center",
            },
            {
                data: "bank_account_number",
                title: "Nomor Rekening",
                className: "text-center",
            },
            {
                data: "bank_name",
                title: "Nama Bank",
                className: "text-center",
            },
            {
                data: "bank_account_name",
                title: "Nama Rekening",
                className: "text-center",
            },
            {
                data: "updated_at",
                title: "Update Terakhir",
                className: "text-center",
            },

        ],
        order: [],
        ajax: {
            url: "http://127.0.0.1:8000/api/perumahan",
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