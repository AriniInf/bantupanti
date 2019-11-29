<section class="content-header">
  <h1>
    Kegiatan Panti
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
    <li><a href="#">Lihat Semua</a></li>
    <li class="active">Kegiatan Panti</li>
  </ol>
</section>
<style>
	.keg{
		float: left;

	}
	
</style>
<section class="content">
<?=$this->session->flashdata('notif')?>
  <div class="row">
    <div class="col-xs-12">
      <div class="box">
        <div class="box-body" style="overflow-y:scroll">
			<div class="box_general">
				<div class="list_general list_admin">
				<div class="keg">
					<ul>
						<?php
						foreach($data as $kp){ ?>
						<span><li><h3><?php echo $kp->pengurus?></h3></span>
						<span><p><?php echo $kp->tanggal ?></p></span>
							<h4 class="mb-2"><?php echo $kp->kegiatan ?></h4>
							<p><?php echo $kp->penjelasan ?></p>
								<div class="ff">
									<span><img src="<?php echo base_url('assets/uploads/').$kp->foto; ?>" width="90" height="110"></span>
								</div>
								
							<div>
								<a 
									data-target="#edit-data<?php echo $kp->kp_id;?>"
									class="btn btn-warning btn-sm"
									data-toggle="modal"><i class="fa fa-edit"></i> Edit
								</a>
								<a 
									data-target="#komen-data<?php echo $kp->kp_id;?>"
									class="btn btn-primary btn-sm"
									data-toggle="modal"><i class="fa fa-comment"></i> Komen
								</a>
								<a 
									data-target="#lihat-data<?php echo $kp->kp_id;?>"
									class="btn btn-primary btn-sm"
									data-toggle="modal"><i class="fa fa-comments"></i> Lihat Komen
								</a>
								<?php echo anchor('admin/hapusKegiatan/'.$kp->kp_id,'<button class="btn btn-danger btn-remove btn-sm"><i class="fa fa-trash mr-2"></i> Hapus</button>', array('class'=>'delete', 'onclick'=>"return confirmDialog();"));?>

							</div>
						
												
						</li>	
						<?php } ?>
								
					</ul>
				</div>
			</div>
		</div>
	  </div>
	</div>
  </div>

<!-- Modal Ubah -->
<?php foreach($data as $kp){ ?>

<div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="edit-data<?php echo $kp->kp_id;?>" class="modal fade">
	    <div class="modal-dialog">
	        <div class="modal-content">
	            <div class="modal-header">
	                <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
	                <h4 class="modal-title">Update Data</h4>
	            </div>
	            <form class="form-horizontal" action="<?php echo base_url('admin/ubahkp/')?>" method="post" enctype="multipart/form-data" role="form">
		            <div class="modal-body">
							<div class="form-group">
								<div class="col-lg-10">
									<input type="hidden" id="kp_id" name="kp_id" value="<?php echo $kp->kp_id;?>">
								</div>
							</div>
		                    <div class="form-group">
		                        <label class="col-lg-2 col-sm-2 control-label">Tanggal</label>
		                        <div class="col-lg-10">
		                            <input type="date" class="form-control" id="tanggal" name="tanggal" value="<?php echo $kp->tanggal;?>">
		                        </div>
		                    </div>
		                    <div class="form-group">
		                        <label class="col-lg-2 col-sm-2 control-label">Kegiatan</label>
		                        <div class="col-lg-10">
		                        	<input type="text" class="form-control" id="nama" name="nama" value="<?php echo $kp->kegiatan;?>"></input>
		                        </div>
		                    </div>
		                    <div class="form-group">
		                        <label class="col-lg-2 col-sm-2 control-label">Penjelasan</label>
		                        <div class="col-lg-10">
		                            <input type="text" class="form-control" id="penjelasan" name="penjelasan" value="<?php echo $kp->penjelasan;?>">
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

<<<<<<< HEAD
	<?php foreach($data as $kp){ ?>

<div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="komen-data<?php echo $kp->kp_id;?>" class="modal fade">
	    <div class="modal-dialog">
	        <div class="modal-content">
	            <div class="modal-header">
	                <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
	                <h4 class="modal-title">Beri Komentar</h4>
	            </div>
	            <form class="form-horizontal" action="<?php echo base_url('admin/komen/')?>" method="post" enctype="multipart/form-data" role="form">
		            <div class="modal-body">
							<div class="form-group">
								<div class="col-lg-10">
									<input type="hidden" id="kp_id" name="kp_id" value="<?php echo $kp->kp_id;?>">
								</div>
							</div>
							<div class="form-group">
								<div class="col-lg-10">
									<input type="hidden" id="ad_id" name="ad_id">
								</div>
							</div>
		                    <div class="form-group">
		                        <!-- <label class="col-lg-2 col-sm-2 control-label">Tanggal</label> -->
		                        <div class="col-lg-10">
		                            <input type="hidden" class="form-control" id="tanggal" name="tanggal">
		                        </div>
		                    </div>
		                    <div class="form-group">
		                        <label class="col-lg-2 col-sm-2 control-label">Komentar</label>
		                        <div class="col-lg-10">
		                        	<input type="text" class="form-control" id="komen" name="komen"></input>
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


<?php foreach($data as $kp){ ?>	
	<div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="lihat-data<?php echo $kp->kp_id?>" class="modal fade">
	    <div class="modal-dialog">
	        <div class="modal-content">
	            <div class="modal-header">
	                <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
	                <h4 class="modal-title">Lihat Komentar</h4>
				</div>
					<table style="border: 1px solid black;">
						<thead>
							<tr>
								<th>No</th>
								<th>Nama</th>
								<th>Tanggal</th>
								<th>Komentar</th>
							</tr>
						</thead>
						<tbody>
						<?php $no=1; 
						foreach($komentar as $ko){ ?>
							<tr>
								<td><?php echo $no++?></td>
								<td><?php echo $ko->pengurus?></td>
								<td><?php echo $ko->tanggal?></td>
								<td><?php echo $ko->komen?></td>
							</tr>
						<?php }?>
						</tbody>
					</table>
	        </div>
	    </div>
	</div>
<?php } ?>
</div>	
=======
>>>>>>> cd5713e1218b28357b0f173dff76b96a8a06bb11
</body>

<script>
function confirmDialog() {
    return confirm("Are you sure you want to delete this record?")
}
</script>

</section>
