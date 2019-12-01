<section class="content-header">
  <h1>
    Pengurus Panti
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
    <li><a href="#">Lihat Semua</a></li>
    <li class="active">Pengurus Panti</li>
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
<?php echo form_open_multipart('admin/tambahPengurus'); ?>	
	<!-- <form action="<?php echo base_url(). 'admin/tambahPengurus'; ?>" method="post" class="col-xs-6"> -->
	<div class="form-group">
		<input type="hidden" name="pp_id" id="pp_id" value="" class="form-control">
	</div>
	<div class="form-group">
		<label>Nama</label><br>
		<input type="text" name="nama" class="form-control" placeholder="Nama">
	</div>
	<div class="form-group">
		<label>Alamat</label><br>
		<input type="text" name="alamat" class="form-control" placeholder="Alamat">
	</div>
	<div class="form-group">
		<label>Jabatan</label><br>
		<select name="jabatan" class="col col-sm-4.9" placeholder="Jabatan">
			<option value="Ketua">Ketua</option>
			<option value="Sekretaris">Sekretaris</option>
			<option value="Bendahara">Bendahara</option>
			<option value="Kepala Bagian">Kepala Bagian</option>
			<option value="Staff Bagian">Staff Bagian</option>
		</select>
	</div>
	<div class="form-group">                
		<label>Email</label><br>
		<input type="text" name="email" class="form-control" placeholder="Email">
	</div>
	<div class="form-group">                
		<label>Telepon</label><br>
		<input type="text" name="telp" class="form-control" placeholder="Telp">
		</div>
	<div class="form-group">
		<label>Foto</label><br>
		<input type="file" name="foto" class="form-control">
 	</div>
		<button type="submit" name="simpan" class="btn btn-info">Tambah</button>
	<?php echo form_close(); ?>
	
</div>
