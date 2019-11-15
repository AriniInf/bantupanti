<div class="container-fluid">	
	<form action="<?php echo base_url(). 'anakPanti/tambahAnak'; ?>" method="post" class="col-xs-6">
	<div class="form-group">
		<input type="hidden" name="ap_id" id="ap_id" value="" class="form-control">
	</div>
	<div class="form-group">
		<label>Nama</label>
		<input type="text" name="nama" class="form-control">
	</div>
	<div class="form-group">
		<label>Tanggal Lahir</label>
		<input type="date" name="tanggallahir" class="form-control">
	</div>
	<div class="form-group">
		<label name="kategori">Tempat Lahir</label>
		<input type="text" name="tempatlahir" class="form-control">
	</div>
	<div class="form-group">                
		<label>Username</label>
		<input type="text" name="username" class="form-control">
	</div>
	<div class="form-group">                
		<label>Password</label>
		<input type="password" name="password" class="form-control">
	</div>
	<div class="form-group">                
		<label>Hobi</label>
		<input type="text" name="hobi" class="form-control">
	</div>
	<div class="form-group">                
		<label>Sekolah</label>
		<input type="text" name="ekolah" class="form-control">
	</div>
	<div class="form-group">                
		<label>Prestasi</label>
		<input type="text" name="prestasi" class="form-control">
	</div>
		<button type="submit" name="simpan" class="btn btn-info">Tambah</button>
	</form>
</div>
