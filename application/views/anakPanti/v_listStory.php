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
    <div class="col-xs-12">
      <div class="box">
        <div class="box-body" style="overflow-y:scroll">
			<div class="box_general">
				<div class="list_general list_admin">
					<ul>
						<?php
						foreach($data as $di){ ?>
						<li>	
							<span><h3><?php echo $di->anak?></h3></span>
							<span><p><?php echo $di->tanggal ?></p></span>
							<!-- <h4 class="mb-2"></h4> -->
							<p><?php echo $di->diary ?></p>
							<div>
								<a href="" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i> Edit</a>
								<!-- <a href="" class="btn btn-warning btn-sm"><i class="fa fa-remove"></i> Hapus</a> -->
								<?php echo anchor('admin/hapusDiary/'.$di->dy_id,'<button class="btn btn-danger btn-remove btn-sm"><i class="fa fa-trash mr-2"></i>Hapus</button>');?>
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
</section>
