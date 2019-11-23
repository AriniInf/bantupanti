<section class="content-header">
  <h1>
    Tambah Anak
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
    <li><a href="#">Tambah Sesuatu</a></li>
    <li class="active">Tambah Anak</li>
  </ol>
</section>
<div class="container-fluid">	
<?php echo form_open_multipart('admin/tambahAnak'); ?>
	<!-- <form action="<?php echo base_url(). 'admin/tambahAnak'; ?>" method="post" class="col-xs-6"> -->

	<div class="form-group">
		<input type="hidden" name="ap_id" value="" class="form-control">
	</div>
	<div class="form-group">
		<label>Nama</label>
		<input type="text" name="nama" class="form-control">
	</div>
	<div class="form-group">
		<label>Tanggal Lahir</label>
		<input type="date" name="tanggal" class="form-control">
	</div>
	<div class="form-group">
		<label name="kategori">Tempat Lahir</label>
		<input type="text" name="tempatlahir" class="form-control">
	</div>
	<div class="form-group">                
		<label>Username</label>
		<input type="text" name="username" class="form-control">
	</div>
	<div class="form-group">                
		<label>Password</label>
		<input type="password" name="password" class="form-control">
	</div>
	<div class="form-group">                
		<label>Hobi</label>
		<input type="text" name="hobi" class="form-control">
	</div>
	<div class="form-group">                
		<label>Sekolah</label>
		<input type="text" name="sekolah" class="form-control">
	</div>
	<div class="form-group">                
		<label>Prestasi</label>
		<input type="text" name="prestasi" class="form-control">
	</div>
	</div>
		<div class="form-group">
		<label>Foto</label><br>
		<input type="file" name="foto" class="form-control">
 	</div>
		<button type="submit" name="simpan" class="btn btn-info">Tambah</button>
	<?php echo form_close(); ?>
</div>
