var table;
$(document).ready(function () {

    //datatables
    table = $('#table').DataTable({

        "processing": true,
        "serverSide": true,
        "order": [],

        "ajax": {
            "url": "http://localhost/ci_admin/index.php/basic_table/get_data_user",
            "type": "POST"
        },


        "columnDefs": [{
            "targets": [0],
            "orderable": false,
        }, ],

    });

});