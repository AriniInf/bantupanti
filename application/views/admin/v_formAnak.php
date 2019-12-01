<section class="content-header">
  <h1>
	Input Data Anak Panti
  </h1><br>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
    <li><a href="#">Anak Panti</a></li>
    <li class="active">Tambah Anak</li>
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
			input[type=password], select {
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
			input[type=date], select {
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
<?php echo form_open_multipart('admin/tambahAnak'); ?>
	<!-- <form action="<?php echo base_url(). 'admin/tambahAnak'; ?>" method="post" class="col-xs-6"> -->

	<div class="form-group">
		<input type="hidden" name="ap_id" value="" class="form-control">
	<div class="form-group">
		<label>Nama</label><br>
		<input type="text" name="nama" class="form-control" placeholder="Nama">
	</div>
	<div class="form-group">
		<label name="kategori">Tempat Lahir</label><br>
		<input type="text" name="tempatlahir" class="form-control" placeholder="Tempat Lahir">
	</div>
	<div class="form-group">
		<label>Tanggal Lahir</label><br>
		<input type="date" name="tanggal" class="form-control" placeholder="Tanggal Lahir">
	</div>

	<div class="form-group">                
		<label>Username</label><br>
		<input type="text" name="username" class="form-control" placeholder="Username">
	</div>
	<div class="form-group">                
		<label>Password</label><br>
		<input type="password" name="password" class="form-control" placeholder="Password">
	</div>
	<div class="form-group">                
		<label>Hobi</label><br>
		<input type="text" name="hobi" class="form-control" placeholder="Hobi">
	</div>
	<div class="form-group">                
		<label>Sekolah</label><br>
		<input type="text" name="sekolah" class="form-control" placeholder="Sekolah">
	</div>
	<div class="form-group">                
		<label>Prestasi</label><br>
		<input type="text" name="prestasi" class="form-control" placeholder="Prestasi">
	</div>
	</div>
		<div class="form-group">
		<label>Foto</label><br>
		<input type="file" name="foto" class="form-control">
 	</div>
		<button type="submit" name="simpan" class="btn btn-info">Tambah</button>
	<?php echo form_close(); ?>
</div>
