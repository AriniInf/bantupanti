<section class="content-header">
  <h1>
    History Donasi
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
    <li class="active">History</li>
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
					<th>Nominal</th>
					<th>tanggal</th>
          <th>keterangan</th>
          <th>bukti</th>
					
               </tr>
            </thead>
            <tbody>
			<?php 
              $no=1;
              foreach($data as $dn){ ?>
				<tr>
        
					<td><?php echo $no++ ?> </td>
					<td><?php echo $dn->nama ?></td>
					<td><?php echo $dn->nominal ?></td>
					<td><?php echo $dn->tanggal ?></td>
          <td><?php echo $dn->keterangan ?></td>

          <td><img src="<?php echo base_url('assets/uploads/').$dn->bukti; ?>" width="90" height="110">
          <td></td>
          </td>

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
