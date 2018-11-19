<form action="<?php echo base_url(); ?>index.php/masdet_table/save_masdet" method="post">
    <div class="form-group">
        <label class="control-label col-xs-3" >Kode Transaksi</label>
        <div class="col-xs-9">
            <input name="transaksi_id" id="transaksi_id" class="form-control" type="text" placeholder="Kode Transaksi" style="width:335px;" value="<?php if (is_array($form_data)) { echo $form_data['transaksi_id'];} ?>" required>
        </div>
    </div>

    <div class="form-group">
        <label class="control-label col-xs-3" >Tanggal Transaksi</label>
        <div class="col-xs-9">
            <input name="transaksi_tanggal" id="transaksi_tanggal" class="form-control" type="date" placeholder="Tanggal Transaksi" style="width:335px;" value="<?php if (is_array($form_data)) { echo DateTime::createFromFormat("Y-m-d H:i:s", $form_data['transaksi_tanggal'])->format("Y-m-d");} ?>" required>
        </div>
    </div>

    <div class="form-group">
        <label class="control-label col-xs-3" >Catatan</label>
        <div class="col-xs-9">
            <input name="transaksi_catatan" id="transaksi_catatan" class="form-control" type="text" placeholder="Catatan" style="width:335px;" value="<?php if (is_array($form_data)) { echo $form_data['transaksi_catatan'];} ?>" required>
        </div>
    </div>

    <button type="submit" class="btn btn-info">Submit</button>
    <a href="#" class="btn btn-danger">Back</a>


</form>
