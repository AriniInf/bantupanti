<div class="container-fluid">	
	<form action="<?php echo base_url(). 'anakPanti/tambahAnak'; ?>" method="post">
	<div class="form-group">
		<input type="hidden" name="ap_id" id="ap_id" value="" class="form-control">
	</div>
	<div class="form-group">
		<label>Nama</label>
		<input type="text" name="ap_nama" class="form-control">
	</div>
	<div class="form-group">
		<label>Tanggal Lahir</label>
		<input type="date" name="ap_tanggallahir" class="form-control">
	</div>
	<div class="form-group">
		<label name="kategori">Tempat Lahir</label>
		<input type="text" name="ap_tempatlahir" class="form-control">
	</div>
	<div class="form-group">                
		<label>Username</label>
		<input type="text" name="ap_username" class="form-control">
	</div>
	<div class="form-group">                
		<label>Password</label>
		<input type="password" name="ap_password" class="form-control">
	</div>
	<div class="form-group">                
		<label>Hobi</label>
		<input type="text" name="ap_hobi" class="form-control">
	</div>
	<div class="form-group">                
		<label>Sekolah</label>
		<input type="text" name="ap_sekolah" class="form-control">
	</div>
	<div class="form-group">                
		<label>Prestasi</label>
		<input type="text" name="ap_prestasi" class="form-control">
	</div>
		<button type="submit" name="simpan" class="btn btn-info">Tambah</button>
	</form>
</div>
