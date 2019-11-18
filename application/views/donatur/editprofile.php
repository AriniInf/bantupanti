<div class="container-fluid">
    <?php echo form_open_multipart('donatur/editprofile')
    ?>
    <div class="form-group">
        <label>Nama Donatur</label>
        <input type="text" name="nama" class="form-control">
        <?php echo form_error('nama', '<div class="text-danger small ml-3">','</div>')?>
    </div>

    <div class="form-group">
        <label>Nama Donatur</label>
        <input type="text" name="nama" class="form-control">
        <?php echo form_error('nama', '<div class="text-danger small ml-3">','</div>')?>
    </div>

    <div class="form-group">
        <label>Alamat</label>
        <input type="text" name="alamat" class="form-control">
        <?php echo form_error('nama', '<div class="text-danger small ml-3">','</div>')?>
    </div>

    <div class="form-group">
        <label>Pekerjaan</label>
        <input type="text" name="pekerjaan" class="form-control">
        <?php echo form_error('nama', '<div class="text-danger small ml-3">','</div>')?>
    </div>

    <div class="form-group">
        <label>Email</label>
        <input type="text" name="email" class="form-control">
        <?php echo form_error('nama', '<div class="text-danger small ml-3">','</div>')?>
    </div>

    <div class="form-group">
        <label>telp</label>
        <input type="text" name="telp" class="form-control">
        <?php echo form_error('nama', '<div class="text-danger small ml-3">','</div>')?>
    </div>

 <div class="form-group">
    <label>Foto</label><br>
    <input type="file" name="foto">
 </div>
 <button type="submit" class="btn btn-primary">Simpan</button>



    <?php form_close(); ?>
</div>