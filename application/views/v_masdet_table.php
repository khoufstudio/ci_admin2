<div class="container-fluid">
    <div class="row">
        <div id="reload" style="width:100%;">
        <div class="pull-right mb-5">
            <a href="<?php echo base_url(); ?>index.php/masdet_table/add_masdet" class="btn btn-sm btn-success">
                <span class="fa fa-plus"></span> Tambah Transaksi
            </a>
        </div>
        <table class="table table-striped" id="mydata">
            <thead>
                <tr>
                    <th>Kode Transaksi</th>
                    <th>Tanggal Transaksi</th>
                    <th>Catatan</th>
                    <th style="text-align: right;">Aksi</th>
                </tr>
            </thead>
            <tbody id="show_data">
                 
            </tbody>
        </table>
        </div>
    </div>
</div>
 
<!-- MODAL ADD -->
<div class="modal fade" id="ModalaAdd" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
    <div class="modal-dialog">
    <div class="modal-content">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h3 class="modal-title" id="myModalLabel">Tambah Barang</h3>
    </div>
    <form class="form-horizontal">
        <div class="modal-body">

            <div class="form-group">
                <label class="control-label col-xs-3" >Kode Barang</label>
                <div class="col-xs-9">
                    <input name="kobar" id="kode_barang" class="form-control" type="text" placeholder="Kode Barang" style="width:335px;" required>
                </div>
            </div>

            <div class="form-group">
                <label class="control-label col-xs-3" >Nama Barang</label>
                <div class="col-xs-9">
                    <input name="nabar" id="nama_barang" class="form-control" type="text" placeholder="Nama Barang" style="width:335px;" required>
                </div>
            </div>

            <div class="form-group">
                <label class="control-label col-xs-3" >Harga</label>
                <div class="col-xs-9">
                    <input name="harga" id="harga" class="form-control" type="text" placeholder="Harga" style="width:335px;" required>
                </div>
            </div>

        </div>

        <div class="modal-footer">
            <button class="btn" data-dismiss="modal" aria-hidden="true">Tutup</button>
            <button class="btn btn-info" id="btn_simpan">Simpan</button>
        </div>
    </form>
    </div>
    </div>
</div>
<!--END MODAL ADD-->

<!-- MODAL EDIT -->
<div class="modal fade" id="ModalaEdit" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
    <div class="modal-dialog">
    <div class="modal-content">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h3 class="modal-title" id="myModalLabel">Edit Barang</h3>
    </div>
    <form class="form-horizontal">
        <div class="modal-body">

            <div class="form-group">
                <label class="control-label col-xs-3" >Kode Barang</label>
                <div class="col-xs-9">
                    <input name="kobar_edit" id="kode_barang2" class="form-control" type="text" placeholder="Kode Barang" style="width:335px;" readonly>
                </div>
            </div>

            <div class="form-group">
                <label class="control-label col-xs-3" >Nama Barang</label>
                <div class="col-xs-9">
                    <input name="nabar_edit" id="nama_barang2" class="form-control" type="text" placeholder="Nama Barang" style="width:335px;" required>
                </div>
            </div>

            <div class="form-group">
                <label class="control-label col-xs-3" >Harga</label>
                <div class="col-xs-9">
                    <input name="harga_edit" id="harga2" class="form-control" type="text" placeholder="Harga" style="width:335px;" required>
                </div>
            </div>

        </div>

        <div class="modal-footer">
            <button class="btn" data-dismiss="modal" aria-hidden="true">Tutup</button>
            <button class="btn btn-info" id="btn_update">Update</button>
        </div>
    </form>
    </div>
    </div>
</div>
<!--END MODAL EDIT-->

<!--MODAL HAPUS-->
<div class="modal fade" id="ModalHapus" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">X</span></button>
                <h4 class="modal-title" id="myModalLabel">Hapus Barang</h4>
            </div>
            <form class="form-horizontal">
            <div class="modal-body">
                                    
                    <input type="hidden" name="kode" id="textkode" value="">
                    <div class="alert alert-warning"><p>Apakah Anda yakin mau memhapus barang ini?</p></div>
                                    
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
                <button class="btn_hapus btn btn-danger" id="btn_hapus">Hapus</button>
            </div>
            </form>
        </div>
    </div>
</div>
<!--END MODAL HAPUS-->