<section class="content-header">
  <h1>
    Diary Anak Panti
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
    <li><a href="#">Lihat Semua</a></li>
    <li class="active">Diary</li>
  </ol>
</section>
<section class="content">
  <div class="row">
  <?=$this->session->flashdata('notif')?>
    <div class="col-xs-12">
      <div class="box">
        <div class="box-body" style="overflow-y:scroll">
			<div class="box_general">
				<div class="list_general list_admin">
					<ul>
						<?php
						foreach($data as $di){ ?>
							
							<li><h3><?php echo $di->anak?></h3>
							<p><?php echo $di->tanggal ?></p>
							<!-- <h4 class="mb-2"></h4> -->
							<p><?php echo $di->diary ?></p>
							<div>
								<a 
									data-target="#edit-data<?php echo $di->dy_id;?>"
									class="btn btn-primary btn-sm"
									data-toggle="modal"><i class="fa fa-edit"></i> Edit
								</a>
								<!-- <a href="" class="btn btn-warning btn-sm"><i class="fa fa-remove"></i> Hapus</a> -->
								<?php echo anchor('anakPanti/hapusDiary/'.$di->dy_id,'<button class="btn btn-danger btn-remove btn-sm"><i class="fa fa-trash mr-2"></i>Hapus</button>', array('class'=>'delete', 'onclick'=>"return confirmDialog();"));?>
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
  <?php foreach($data as $di){ ?>
<div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="edit-data<?php echo $di->dy_id;?>" class="modal fade">
	    <div class="modal-dialog">
	        <div class="modal-content">
	            <div class="modal-header">
	                <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
	                <h4 class="modal-title">Edit Diary</h4>
	            </div>
	            <form class="form-horizontal" action="<?php echo base_url('anakPanti/edit_diary/')?>" method="post" enctype="multipart/form-data" role="form">
		            <div class="modal-body">
							<div class="form-group">
								<div class="col-lg-10">
									<input type="hidden" id="dy_id" name="dy_id" value="<?php echo $di->dy_id;?>">
								</div>
							</div>
							<div class="form-group">
								<div class="col-lg-10">
									<input type="hidden" id="ap_id" name="ap_id">
								</div>
							</div>
		                    <div class="form-group">
		                        <label class="col-lg-2 col-sm-2 control-label">Tanggal</label>
		                        <div class="col-lg-10">
		                            <input type="date" class="form-control" id="tanggal" name="tanggal" value="<?php echo $di->tanggal ?>">
		                        </div>
		                    </div>
		                    <div class="form-group">
		                        <label class="col-lg-2 col-sm-2 control-label">Komentar</label>
		                        <div class="col-lg-10">
		                        	<input type="text" class="form-control" id="diary" name="diary" value="<?php echo $di->diary ?>"></input>
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
</section>
<script>
function confirmDialog() {
    return confirm("Are you sure you want to delete this record?")
}
</script>
