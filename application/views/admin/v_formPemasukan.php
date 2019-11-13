<div class="container-fluid">	
	<form action="<?php echo base_url(). 'admin/tambah_pemasukan'; ?>" method="post" class="col-xs-6">
	<div class="form-group">
		<input type="hidden" name="tr_id" id="tr_id" value="" class="form-control">
	</div>
	<div class="form-group">
		<label>Pemasukan</label>
		<input type="text" name="keterangan" class="form-control">
	</div>
	<div class="form-group">
		<label>Nominal</label>
		<input type="text" name="nominal" class="form-control">
	</div>
	<div class="form-group">
		<label name="kategori">Tanggal</label>
		<input type="date" name="tanggal" class="form-control">
	</div>
		<button type="submit" name="simpan" class="btn btn-info">Tambah</button>
	</form>
</div>
