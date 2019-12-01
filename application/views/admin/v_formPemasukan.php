<section class="content-header">
  <h1>
    Tambah Pemasukan
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
    <li><a href="#">Tambah Sesuatu</a></li>
    <li class="active">Tambah Pemasukan</li>
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
</style>
<div class="container-fluid">	
	<form action="<?php echo base_url(). 'admin/tambah_pemasukan'; ?>" method="post" class="col-xs-6">
	<div class="form-group">
		<input type="hidden" name="tr_id" id="tr_id" value="" class="form-control">
	</div>
	<div class="form-group">
		<input type="hidden" name="ad_id" id="ad_id" value="" class="form-control">
	</div>
	<div class="form-group">
		<label>Pemasukan</label><br>
		<input type="text" name="keterangan" class="form-control" placeholder="Pemasukan dari..">
	</div>
	<div class="form-group">
		<label>Nominal</label><br>
		<input type="text" name="nominal" class="form-control" placeholder="Rp. ">
	</div>
	<div class="form-group">
		<label name="kategori">Tanggal</label><br>
		<input type="date" name="tanggal" class="form-control">
	</div>
		<button type="submit" name="simpan" class="btn btn-info">Tambah</button>
	</form>
</div>
