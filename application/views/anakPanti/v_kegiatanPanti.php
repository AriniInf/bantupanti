<section class="content-header">
  <h1>
    Kegiatan Panti
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
    <li class="active">Kegiatan Panti</li>
  </ol>
</section>
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
							<!-- <li>	 -->
					<div class="row">
						<div class="col-xs-6">
						
						<li><h3><?php echo $kp->pengurus?></h3>
							<p><?php echo $kp->tanggal ?></p>
							<h4 class="mb-2"><?php echo $kp->nama ?></h4>
							<p><?php echo $kp->penjelasan ?></p>
							<div>
							<a 
								data-target="#komen-data<?php echo $kp->kp_id;?>"
								class="btn btn-primary btn-sm"
								data-toggle="modal"><i class="fa fa-comment"></i> Komen
							</a>
							<a 
								data-target="#lihat-data<?php echo $kp->kp_id;?>"
								class="btn btn-info btn-sm"
								data-toggle="modal"><i class="fa fa-comments"></i> Lihat Komen
							</a>
							</div>						
						</li>	
						<?php } ?>		
					</ul>
							
						</div>
						<div class="col-xs-3">
						<br><br>
							<span><img src="<?php echo base_url('assets/uploads/').$kp->foto; ?>" width="110" height="90"></span>
							<br>
						</div>
								
					</div>
					</li>	
				</div>
			</div>
		</div>
	  </div>
	</div>
  </div>
 
<?php foreach($data as $kp){ ?>
<div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="komen-data<?php echo $kp->kp_id;?>" class="modal fade">
	    <div class="modal-dialog">
	        <div class="modal-content">
	            <div class="modal-header">
	                <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
	                <h4 class="modal-title">Beri Komentar</h4>
	            </div>
	            <form class="form-horizontal" action="<?php echo base_url('anakPanti/komen/')?>" method="post" enctype="multipart/form-data" role="form">
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
</section>
