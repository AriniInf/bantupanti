<!-- <div class="container-fluid">
    <br>

    <form method="post" enctype="multipart/form-data" action="<?php echo base_url('donatur/inputdonasi')?>" class="berdonasi">
        <div class="form-group">
            <label>nominal</label>
            <input type="text" name="dn_nominal"
            placeholder="masukkan nominal" class="form-control">
        </div>

        <div class="form-group">
            <label>Tanggal</label>
            <input type="date" name="dn_tanggal"
            placeholder="masukkan tanggal" class="form-control">
        </div>

        <!-- <div class="form-group">
            <label>bukti tf</label>
            <input type='file' name='dn_bukti' accept='image/*'
            placeholder="Kirim bukti tf" class="form-control">
        </div> -->
        <!-- <button type="submit" class="btn btn-primary ">Kirim</button>

    </form> 
    
</div>  --> 

<div class="container-fluid">	
	<form action="<?php echo base_url(). 'donatur/tambahdonasi'; ?>" method="post" enctype="multipart/form-data" class="col-xs-6">
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
		<input type="file" name="bukti" accept='image/*' class="form-control">
	</div> -->
	
		<button type="submit" name="simpan" class="btn btn-info">Tambah</button>
	</form>
</div>

