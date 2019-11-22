<div class="container-fluid">	
	<!-- <form action="<?php echo base_url(). 'donatur/tambahdonasi'; ?>" method="post" class="col-xs-6"> -->
	<?php echo form_open_multipart('donatur/tambahdonasi'); ?>
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
		<label>bukti</label>
		<input type="photo" name="bukti" class="form-control">
	</div> -->
	<div class="form-group">
		<label>Keterangan</label>
		<input type="text" name="keterangan" class="form-control">
	</div>
		<div class="form-group">
		<label>Bukti TF</label><br>
		<input type="file" name="bukti">
 </div>
 <button type="submit" class="btn btn-primary">DONASI</button>
		
	<?php echo form_close(); ?>
</div>
