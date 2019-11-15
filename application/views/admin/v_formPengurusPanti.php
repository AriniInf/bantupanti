<div class="container-fluid">	
	<form action="<?php echo base_url(). 'admin/tambahPengurus'; ?>" method="post" class="col-xs-6">
	<div class="form-group">
		<input type="hidden" name="pp_id" id="pp_id" value="" class="form-control">
	</div>
	<div class="form-group">
		<label>Nama</label>
		<input type="text" name="nama" class="form-control">
	</div>
	<div class="form-group">
		<label>Alamat</label>
		<input type="text" name="alamat" class="form-control">
	</div>
	<div class="form-group">
		<label>Jabatan</label>
		<input type="text" name="jabatan" class="form-control">
	</div>
	<div class="form-group">                
		<label>Email</label>
		<input type="text" name="email" class="form-control">
	</div>
	<div class="form-group">                
		<label>Telepon</label>
		<input type="text" name="elf" class="form-control">
	</div>
		<button type="submit" name="simpan" class="btn btn-info">Tambah</button>
	</form>
</div>
