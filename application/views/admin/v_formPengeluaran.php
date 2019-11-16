<section class="content-header">
  <h1>
    Tambah Pengeluaran
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
    <li><a href="#">Tambah Sesuatu</a></li>
    <li class="active">Tambah Pengeluaran</li>
  </ol>
</section>
<div class="container-fluid">	
	<form action="<?php echo base_url(). 'admin/tambah_pengeluaran'; ?>" method="post" class="col-xs-6">
	<div class="form-group">
		<input type="hidden" name="ap_id" id="ap_id" value="" class="form-control">
	</div>
	<div class="form-group">
		<input type="hidden" name="ad_id" id="ad_id" value="" class="form-control">
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
