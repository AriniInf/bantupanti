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
					
				<table id="example2" class="table table-bordered table-hover bg-danger table-striped text-center">
            <thead>
                <tr>
				
					<th>Nama Kegiatan</th>
					<th>Penjelasan</th>
					<th>Tanggal</th>

               </tr>
            </thead>
            <tbody>
			<?php 
              foreach($data as $kp){ ?>
				<tr>
	
					<td><?php echo $kp->nama ?></td>
					<td><?php echo $kp->penjelasan ?></td>
					<td><?php echo $kp->tanggal ?></td>
					<td><a href="" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i> Komen</a></td>


				</tr>
				<?php } ?>
            </tbody>
          </table>	
				
								
						
				</div>
			</div>
		</div>
	  </div>
	</div>
  </div>
</section>
