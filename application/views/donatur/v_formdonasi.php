<section class="content-header">
  <h1>
    Form Donasi
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
    <li class="active">Form Donasi</li>
  </ol>
  <style>
  			input[type=text], select {
				width: 20%;
				padding: 12px 20px;
				margin: 8px 0;
				display: inline-block;
				border: 1px solid #ccc;
				border-radius: 4px;
				box-sizing: border-box;
			}

			input[type=date], select {
				width: 20%;
				padding: 12px 20px;
				margin: 8px 0;
				display: inline-block;
				border: 1px solid #ccc;
				border-radius: 4px;
				box-sizing: border-box;
			}
  </style>
</section>
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
		<label>nominal</label><br>
		<input type="text" name="nominal" class="form-control" placeholder="Rp. ">
	</div>
	<div class="form-group">
		<label>tanggal</label><br>
		<input type="date" name="tanggal" class="form-control" placeholder="tanggal">
	</div>
	<!-- <div class="form-group">                
		<label>bukti</label>
		<input type="photo" name="bukti" class="form-control">
	</div> -->
	<div class="form-group">
		<label>Keterangan</label><br>
		<input type="text" name="keterangan" class="form-control" placeholder="keterangan">
	</div>
		<div class="form-group">
		<label>Bukti TF</label><br>
		<input type="file" name="bukti">
 </div>
 <button type="submit" class="btn btn-primary">DONASI</button>
		
	<?php echo form_close(); ?>
</div>
