<section class="content-header">
  <h1>
   Profile Donatur
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
    <li><a href="#">Lihat Semua</a></li>
    <li class="active">Profile</li>
	</ol>
	<?=$this->session->flashdata('notif')?>
	<table class="table table hover table-bordered table-striped">
				<?php foreach($data as $do) : ?>
		<tr>
			<td>Foto</td>
			<td><img src="<?php echo base_url('assets/uploads/').$do->foto; ?>" width="90" height="110">
		</tr>
		<tr>
			<td>nama</td>
			<td><?php echo $do->nama; ?></td>
		</tr>
		<tr>
			<td>Alamat</td>
			<td><?php echo $do->alamat; ?></td>
		</tr>
		<tr>
			<td>Pekerjaan</td>
			<td><?php echo $do->pekerjaan; ?></td>
		</tr>
		<tr>
			<td>Email</td>
			<td><?php echo $do->email; ?></td>
		</tr>
		<tr>
			<td>Telp</td>
			<td><?php echo $do->telp; ?></td>
		</tr>
		<tr>
		<td>
			<a 
				data-target="#edit-data<?php echo $do->do_id;?>"
				class="btn btn-warning btn-sm"
				data-toggle="modal"><i class="fa fa-edit"></i> Edit
			</a></td>
		</tr>
		<br>
<?php endforeach; ?>
</table>

<?php foreach($data as $do){ ?>

	<div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="edit-data<?php echo $do->do_id;?>" class="modal fade">
		<div class="modal-dialog">
				<div class="modal-content">
						<div class="modal-header">
								<button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
								<h4 class="modal-title">Update Data</h4>
						</div>
						<form class="form-horizontal" action="<?php echo base_url('donatur/update_profil/')?>" method="post" enctype="multipart/form-data" role="form">
							<div class="modal-body">
								<div class="form-group">
									<div class="col-lg-10">
										<input type="hidden" id="do_id" name="do_id" value="<?php echo $do->do_id;?>">
									</div>
								</div>
								<div class="form-group">
										<label class="col-lg-2 col-sm-2 control-label">Nama</label>
										<div class="col-lg-10">
												<input type="text" class="form-control" id="nama" name="nama" value="<?php echo $do->nama;?>">
										</div>
								</div>
								<div class="form-group">
										<label class="col-lg-2 col-sm-2 control-label">Alamat</label>
										<div class="col-lg-10">
											<input type="text" class="form-control" id="alamat" name="alamat" value="<?php echo $do->alamat;?>"></input>
										</div>
								</div>
								<div class="form-group">
										<label class="col-lg-2 col-sm-2 control-label">Pekerjaan</label>
										<div class="col-lg-10">
												<input type="text" class="form-control" id="pekerjaan" name="pekerjaan" value="<?php echo $do->pekerjaan;?>">
										</div>
								</div>
								<div class="form-group">
										<label class="col-lg-2 col-sm-2 control-label">Email</label>
										<div class="col-lg-10">
												<input type="text" class="form-control" id="email" name="email" value="<?php echo $do->email;?>">
										</div>
								</div>
								<div class="form-group">
										<label class="col-lg-2 col-sm-2 control-label">Telepon</label>
										<div class="col-lg-10">
												<input type="text" class="form-control" id="telp" name="telp" value="<?php echo $do->telp;?>">
										</div>
								</div>
								<div class="form-group">
										<label class="col-lg-2 col-sm-2 control-label">Foto</label>
										<div class="col-lg-10">
												<input type="file" class="form-control" id="foto" name="foto" value="<?php echo $do->foto;?>">
										</div>
								</div>
						</div>
						<div class="modal-footer">
								<button class="btn btn-info" type="submit"> Simpan</button>
								<button type="button" class="btn btn-warning" data-dismiss="modal"> Batal</button>
						</div>
					</form>
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
