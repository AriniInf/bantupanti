<div class="container-fluid">	
<<<<<<< HEAD
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
=======
	<form action="<?php echo base_url(). 'donatur/tambahdonasi'; ?>" method="post" class="col-xs-6">
	<div class="form-group">
		<input type="hidden" name="dn_id" id="dn_id" value="" class="form-control">
	</div>
	<div class="form-group">
		<input type="hidden" name="do_id" id="do_id" value="" class="form-control">
	</div>
	<div class="form-group">
		<label>nominal</label>
		<input type="text" name="nominal" class="form-control">
	</div>
	<div class="form-group">
		<label>tanggal</label>
		<input type="date" name="tanggal" class="form-control">
	</div>
	<!-- <div class="form-group">                
>>>>>>> d8be630bdef92c9241c7d1003985e6468188a5d3
		<label>bukti</label>
		<input type="photo" name="bukti" class="form-control">
	</div> -->
		<button type="submit" name="simpan" class="btn btn-info">Tambah</button>
	</form>
</div>
