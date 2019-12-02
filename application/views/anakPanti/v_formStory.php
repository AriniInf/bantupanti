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
<style>
input[type=date], select {
				width: 40%;
				padding: 12px 20px;
				margin: 8px 0;
				display: inline-block;
				border: 1px solid #ccc;
				border-radius: 4px;
				box-sizing: border-box;
			}

			textarea{
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
	<form action="<?php echo base_url(). 'anakPanti/tambahDiary'; ?>" method="post">
	<div class="form-group">
		<input type="hidden" name="dy_id" id="dy_id" value="" class="form-control">
	</div>
	<div class="form-group">
		<input type="hidden" name="ap_id" id="ap_id" value="" class="form-control">
	</div>
	<div class="form-group">
		<label>Diary</label><br>
		<textarea class="col col-sm-5.6" name="diary" style="resize:none" placeholder="Tulis ceritamu di sini.."></textarea>
	</div>

	<div class="form-group">
		<label>Tanggal</label><br>
		<input type="date" name="tanggal" class="form-control">
	</div>
		<button type="submit" name="simpan" class="btn btn-info">Tambah</button>
	</form>
</div>
