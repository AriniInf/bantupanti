<section class="content-header">
  <h1>
    Tambah Kegiatan
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
    <li><a href="#">Tambah Sesuatu</a></li>
    <li class="active">Tambah Kegiatan</li>
  </ol>
</section>
<style>
input[type=text], select {
				width: 40%;
				padding: 12px 20px;
				margin: 8px 0;
				display: inline-block;
				border: 1px solid #ccc;
				border-radius: 4px;
				box-sizing: border-box;
			}

			input[type=date], select {
				width: 40%;
				padding: 12px 20px;
				margin: 8px 0;
				display: inline-block;
				border: 1px solid #ccc;
				border-radius: 4px;
				box-sizing: border-box;
			}
			input[type=file], select {
				width: 40%;
				padding: 12px 20px;
				margin: 8px 0;
				display: inline-block;
				border: 1px solid #ccc;
				border-radius: 4px;
				box-sizing: border-box;
			}
</style>
<div class="container-fluid">
<?php echo form_open_multipart('admin/tambah_kegiatan'); ?>		
	<!-- <form action="<?php echo base_url(). 'admin/tambah_kegiatan'; ?>" method="post" class="col-xs-6"> -->
	<div class="form-group">
		<input type="hidden" name="kp_id" id="kp_id" value="" class="form-control">
	</div>
	<div class="form-group">
		<input type="hidden" name="ad_id" id="ad_id" value="" class="form-control">
	</div>
	<div class="form-group">
		<label>Nama Kegiatan</label><br>
		<input type="text" name="nama" class="form-control" placeholder="Nama Kegiatan">
	</div>
	<div class="form-group">
		<label>Penjelasan</label><br>
		<input type="text" name="penjelasan" class="form-control" placeholder="Penjelasan Kegiatan">
	</div>
	<div class="form-group">                
		<label>Tanggal</label><br>
		<input type="date" name="tanggal" class="form-control">
	</div>
	<div class="form-group">
		<label>Foto</label><br>
		<input type="file" name="foto" class="form-control">
 	</div>
		<button type="submit" name="simpan" class="btn btn-info">Tambah</button>
	<?php echo form_close(); ?>
		
</div>
