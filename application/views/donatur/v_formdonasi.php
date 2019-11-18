<div class="container-fluid">	
	<form action="<?php echo base_url().'donatur/tambahdonasi'; ?>" method="post" enctype="multipart/form-data" class="col-xs-6">
		<div class="form-group">
			<input type="hidden" name="dn_id" id="dn_id" value="" class="form-control">
		</div>
		
		<div class="form-group">
			<label>nominal</label>
			<input type="text" name="nominal" class="form-control">
		</div>
		<div class="form-group">
			<label>Keterangan</label>
			<input type="text" name="keterangan" class="form-control">
		</div>
		<div class="form-group">
			<label>tanggal</label>
			<input type="date" name="tanggal" class="form-control">
		</div>
		<div class="form-group">
			<input type="hidden" name="do_id" id="do_id" value="" class="form-control">
		</div>
	<!-- <div class="form-group">
		<label>bukti</label>
		<input type="file" name="bukti" accept='image/*' class="form-control">
	</div> -->
		<button type="submit" name="simpan" class="btn btn-info">Tambah</button>
	</form>
</div>

