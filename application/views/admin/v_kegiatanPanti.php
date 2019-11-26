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
<?=$this->session->flashdata('notif')?>
<section class="content">
  <div class="row">
    <div class="col-xs-12">
      <div class="box">
        <div class="box-body" style="overflow-y:scroll">
			<div class="box_general">
				<div class="list_general list_admin">
					<ul>
						<?php
						foreach($data as $kp){ ?>
						<li>
						<tr>	
							<span><h3><?php echo $kp->pengurus?></h3></span>
							<span><p><?php echo $kp->tanggal ?></p></span>
							<h4 class="mb-2"><?php echo $kp->kegiatan ?></h4>
							<p><?php echo $kp->penjelasan ?></p>
							<!-- <span><img src="<?php echo base_url('assets/uploads/').$kp->foto; ?>" width="110" height="90"></span> -->
					
							<!-- <span><img src="<?php echo base_url('assets/uploads/').$kp->foto; ?>" width="110" height="90"></span>
							 -->
							<div>
								<a 
									data-target="#edit-data<?php echo $kp->kp_id;?>"
									class="btn btn-warning btn-sm"
									data-toggle="modal"><i class="fa fa-edit"></i>Edit
								</a>
								<a href="" class="btn btn-primary btn-sm" onclick="show_add_komentar(<?php echo $kp->kp_id;?>);"><i class="fa fa-edit"></i> Komen</a>
								<?php echo anchor('admin/hapusKegiatan/'.$kp->kp_id,'<button class="btn btn-danger btn-remove btn-sm"><i class="fa fa-trash mr-2"></i>Hapus</button>');?>
							</div>
						</tr>						
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
</body>

</section>
