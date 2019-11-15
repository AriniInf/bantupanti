
<section class="content-header">
  <h1>
    Donatur
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
    <li class="active">List Diary</li>
  </ol>
</section>

<section class="content">
  <div class="row">
    <div class="col-xs-12">
      <div class="box">
        <div class="box-body" style="overflow-y:scroll">
          <table id="example2" class="table table-bordered table-hover bg-danger table-striped text-center">
            <thead>
                <tr>
					<th>nama</th>
					<th>Story</th>
					<th>Tanggal</th>
					
               </tr>
            </thead>
            <tbody>
			<?php 
    
              foreach($data as $sap){ ?>
				<tr>
				<div>
					
					<td><?php echo $sap->ap_nama ?></td>
					<td><?php echo $sap->isistory?></td>
					<td><?php echo $sap->tanggalstory?></td>
					<td><?php echo anchor('donatur/komendiary','<button class="btn btn-primary btn-sm"><i class="fa fa-edit"></i> komen </button>')?>
					
				</div>	
				</tr>
				<?php } ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</section>

<style>
.table-striped > tbody > tr:nth-child(2n+1) > td, .table-striped > tbody > tr:nth-child(2n+1) > th {
   background-color: #f4f4f4;


}
</style>