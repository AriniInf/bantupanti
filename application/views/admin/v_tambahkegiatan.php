<div class="container-fluid">	
	<form action="<?php echo base_url(). 'admin/tambah_kegiatan'; ?>" method="post" class="col-xs-6">
	<div class="form-group">
		<input type="hidden" name="kp_id" id="kp_id" value="" class="form-control">
	</div>
	<div class="form-group">
		<input type="hidden" name="ad_id" id="ad_id" value="" class="form-control">
	</div>
	<div class="form-group">
		<label>Nama Kegiatan</label>
		<input type="text" name="namakegiatan" class="form-control">
	</div>
	<div class="form-group">
		<label>Penjelasan</label>
		<input type="text" name="penjelasan" class="form-control">
	</div>
	<div class="form-group">                
		<label>Tanggal</label>
		<input type="date" name="tanggal" class="form-control">
	</div>
		<button type="submit" name="simpan" class="btn btn-info">Tambah</button>
	</form>
</div>
