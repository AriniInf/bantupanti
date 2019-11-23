



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
								<a href="" class="btn btn-warning btn-sm"><i class="fa fa-edit"></i> Edit</a>
								<a href="" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i> Komen</a>
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
</section>
