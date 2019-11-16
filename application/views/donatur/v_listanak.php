<section class="content-header">
  <h1>
    Donatur
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
    <li class="active">List Anak Panti</li>
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
					<th>No</th>
					<th>Nama</th>
					<th>Tempat Tanggal Lahir</th>
					
               </tr>
            </thead>
            <tbody>
			<?php 
              $no=1;
              foreach($data as $ap){ ?>
				<tr>
					<td><?php echo $no++ ?> </td>
					<td><?php echo $ap->nama ?></td>
					<td><?php echo $ap->tempatlahir, $ap->tanggal ?></td>

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