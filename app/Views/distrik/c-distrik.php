<form method="post" action="<?php echo base_url('create_distrik')?>">
    <div class="form-group">
        <input type="hidden" name="id_kab" value="1" class="form-control"> 
    </div>
    <div class="form-group">
        <input type="text" name="kode_dis" class="form-control" placeholder="Kode Distrik"> 
    </div>
    <div class="form-group">
        <input type="text" name="nama_dis" class="form-control" placeholder="Nama Distrik"> 
    </div>
    <div class="form-group">
        <input type="submit" value="Simpan" class="mb-2 btn btn-sm btn-outline-primary mr-1" />
    </div>
</form>