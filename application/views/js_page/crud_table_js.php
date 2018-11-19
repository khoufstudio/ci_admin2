<script>
    $(document).ready(function(){
        // alert("");
 
        tampil_data_barang(); // panggil fungsi tampil barang.

        $('#mydata').dataTable();

        // fungsi tampil barang
        function tampil_data_barang() {
            $.ajax({
                tipe    : 'ajax',
                url     : '<?php echo base_url(); ?>index.php/crud_table/data_barang',
                async   : false,
                dataType    : 'json',
                success: function(data) {
                    var html = '';
                    var i;
                    for (let i = 0; i < data.length; i++) {
                         html += '<tr>'+
                                '<td>'+data[i].barang_kode+'</td>'+
                                '<td>'+data[i].barang_nama+'</td>'+
                                '<td>'+data[i].barang_harga+'</td>'+
                                '<td style="text-align:right;">'+
                                    '<a href="javascript:;" class="btn btn-info btn-xs item_edit" data="'+data[i].barang_kode+'">Edit</a>'+' '+
                                    '<a href="javascript:;" class="btn btn-danger btn-xs item_hapus" data="'+data[i].barang_kode+'">Hapus</a>'+
                                '</td>'+
                                '</tr>';
                    }
                    $('#show_data').html(html);
                } 
            });
        }

        $('#btn_simpan').on('click', function() {
            var kobar = $('#kode_barang').val();
            var nabar = $('#nama_barang').val();
            var harga = $('#harga').val();
            $.ajax({
                type    : "POST",
                url     : "<?php echo base_url('index.php/crud_table/simpan_barang') ?>",
                dataType    : "JSON",
                data    : {kobar: kobar, nabar: nabar, harga: harga},
                success: function(data) {
                    $('[name="kobar"]').val("");
                    $('[name="nabar"]').val("");
                    $('[name="harga"]').val("");
                    $('#ModalaAdd').modal('hide');
                    tampil_data_barang();
                } 
            });
            return false;
        });

        // GET UPDATE
        $('#show_data').on('click', '.item_edit', function(){
            var id = $(this).attr('data');
            // alert("tess"+id);
            $.ajax({
                type    : "GET",
                url     : "<?php echo base_url('index.php/crud_table/get_barang'); ?>",
                dataType    : "JSON",
                data    : {id:id},
                success: function(data) {
                    $.each(data,function(barang_kode, barang_nama, barang_harga){
                        $('#ModalaEdit').modal('show');
                        $('[name="kobar_edit"]').val(data.barang_kode);
                        $('[name="nabar_edit"]').val(data.barang_nama);
                        $('[name="harga_edit"]').val(data.barang_harga);
                    });
                }
            });
            return false;
        });

        //GET HAPUS
        $('#show_data').on('click','.item_hapus',function(){
            var id=$(this).attr('data');
            $('#ModalHapus').modal('show');
            $('[name="kode"]').val(id);
        });

        // Update Barang
        $('#btn_update').on('click', function() {
            var kobar = $('#kode_barang2').val();
            var nabar = $('#nama_barang2').val();
            var harga = $('#harga2').val();

            $.ajax({
                type    : "POST",
                url  : "<?php echo base_url('index.php/crud_table/update_barang') ?>",
                dataType : "JSON",
                data : {kobar:kobar , nabar:nabar, harga:harga},
                success: function(data){
                    $('[name="kobar_edit"]').val("");
                    $('[name="nabar_edit"]').val("");
                    $('[name="harga_edit"]').val("");
                    $('#ModalaEdit').modal('hide');
                    tampil_data_barang();
                }
            });
            return false;
        });

        // Hapus Barang
        $('#btn_hapus').on('click', function() {
           var kode = $('#textkode').val();
           $.ajax({
               type : "POST",
               url  : "<?php echo base_url('index.php/crud_table/hapus_barang') ?>",
               dataType : "JSON",
               data : {kode: kode},
               success  : function(data) {
                   $('#ModalHapus').modal('hide');
                   tampil_data_barang();
               }
           })
        });
 
    });
</script>

