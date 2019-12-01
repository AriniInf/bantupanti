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
