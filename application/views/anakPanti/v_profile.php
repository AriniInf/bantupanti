<section class="content-header">
  <h1>
   Profile Anak Panti
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
    <li><a href="#">Lihat Semua</a></li>
    <li class="active">Profile</li>
	</ol>
	
	<?=$this->session->flashdata('notif')?>
	<table class="table table hover table-bordered table-striped">
				<?php foreach($data as $ap) : ?>
		<tr>
			<td>Foto</td>
			<td><img src="<?php echo base_url('assets/uploads/').$ap->foto; ?>" width="90" height="110">
		</tr>
		<tr>
			<td>Nama</td>
			<td><?php echo $ap->nama; ?></td>
		</tr>
		<tr>
			<td>Tempat Lahir
		</td>
			<td><?php echo $ap->tempatlahir; ?></td>
		</tr>
		<tr>
			<td>Tanggal Lahir</td>
			<td><?php echo $ap->tanggal; ?></td>
		</tr>
		<tr>
			<td>Hobi</td>
			<td><?php echo $ap->hobi; ?></td>
		</tr>
		<tr>
			<td>Sekolah</td>
			<td><?php echo $ap->sekolah; ?></td>
		</tr>
		<tr>
			<td>Prestasi</td>
			<td><?php echo $ap->prestasi; ?></td>
		</tr>
		<tr>
		<td>
			<a 
				data-target="#edit-data<?php echo $ap->ap_id;?>"
				class="btn btn-warning btn-sm"
				data-toggle="modal"><i class="fa fa-edit"></i> Edit
			</a></td>
		</tr>
		<br>
<?php endforeach; ?>
</table>

<?php foreach($data as $ap){ ?>

	<div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="edit-data<?php echo $ap->ap_id;?>" class="modal fade">
		<div class="modal-dialog">
				<div class="modal-content">
						<div class="modal-header">
								<button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
								<h4 class="modal-title">Update Data</h4>
						</div>
						<?php echo form_open_multipart('anakPanti/update_profil/'); ?>
							<div class="modal-body">
								<div class="form-group">
									<div class="col-lg-10">
										<input type="hidden" id="ap_id" name="ap_id" value="<?php echo $ap->ap_id;?>">
									</div>
								</div>
								
								<div class="form-group">
										<label class="col-lg-2 col-sm-2 control-label">Nama</label>
										<div class="col-lg-10">
												<input type="text" class="form-control" id="nama" name="nama" value="<?php echo $ap->nama;?>">
										</div>
								</div>
								<div class="form-group">
										<label class="col-lg-2 col-sm-2 control-label">Tempat</label>
										<div class="col-lg-10">
											<input type="text" class="form-control" id="tempatlahir" name="tempatlahir" value="<?php echo $ap->tempatlahir;?>"></input>
										</div>
								</div>
								<div class="form-group">
										<label class="col-lg-2 col-sm-2 control-label">Tanggal</label>
										<div class="col-lg-10">
												<input type="text" class="form-control" id="tanggal" name="tanggal" value="<?php echo $ap->tanggal;?>">
										</div>
								</div>
								<div class="form-group">
										<label class="col-lg-2 col-sm-2 control-label">Hobi</label>
										<div class="col-lg-10">
												<input type="text" class="form-control" id="hobi" name="hobi" value="<?php echo $ap->hobi;?>">
										</div>
								</div>
								<div class="form-group">
										<label class="col-lg-2 col-sm-2 control-label">Sekolah</label>
										<div class="col-lg-10">
												<input type="text" class="form-control" id="sekolah" name="sekolah" value="<?php echo $ap->sekolah;?>">
										</div>
								</div>
								<div class="form-group">
										<label class="col-lg-2 col-sm-2 control-label">Prestasi</label>
										<div class="col-lg-10">
												<input type="text" class="form-control" id="prestasi" name="prestasi" value="<?php echo $ap->prestasi;?>">
										</div>
								</div>
								<div class="form-group">
										<label class="col-lg-2 col-sm-2 control-label">Foto</label>
										<div class="col-lg-10">
												<input type="file" class="form-control" id="foto" name="foto" value="<?php echo $ap->foto;?>">
										</div>
								</div>
						</div>
						<div class="modal-footer">
								<button class="btn btn-info" type="submit"> Simpan</button>
								<button type="button" class="btn btn-warning" data-dismiss="modal"> Batal</button>
						</div>
						<?php echo form_close(); ?>

				</div>
			</div>
		</div>
	</div>
<?php }?>


<style>
.table-striped > tbody > tr:nth-child(2n+1) > td, .table-striped > tbody > tr:nth-child(2n+1) > th {
   background-color: #f4f4f4;
}
</style>
