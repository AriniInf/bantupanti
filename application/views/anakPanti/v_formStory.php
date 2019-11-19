<section class="content-header">
  <h1>
    Anak Panti
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
    <li><a href="#">Tambah Sesuatu</a></li>
    <li class="active">Diary</li>
  </ol>
</section>
<div class="container-fluid">	
	<form action="<?php echo base_url(). 'anakPanti/tambahDiary'; ?>" method="post" class="col-xs-6">
	<div class="form-group">
		<input type="hidden" name="dy_id" id="dy_id" value="" class="form-control">
	</div>
	<div class="form-group">
		<input type="hidden" name="ap_id" id="ap_id" value="" class="form-control">
	</div>
	<div class="form-group">
		<label>Cerita</label>
		<input type="text" name="diary" class="form-control">
	</div>
	<div class="form-group">
		<label>Tanggal</label>
		<input type="date" name="tanggal" class="form-control">
	</div>
		<button type="submit" name="simpan" class="btn btn-info">Tambah</button>
	</form>
</div>
