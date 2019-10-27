<div class="container-fluid">	
	<form action="<?php echo base_url(). 'anakPanti/tambahAnak'; ?>" method="post" class="col-xs-6">
	<div class="form-group">
		<input type="hidden" name="ap_id" id="ap_id" value="" class="form-control">
	</div>
	<div class="form-group">
		<label>Pengeluaran</label>
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
