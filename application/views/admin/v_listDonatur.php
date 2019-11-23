<section class="content-header">
  <h1>
    List Donatur
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
    <li><a href="#">Lihat Semua</a></li>
    <li class="active">List Donatur</li>
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
					<th>Alamat</th>
					<th>Pekerjaan</th>
          <th>Foto</th>
          
               </tr>
            </thead>
            <tbody>
			<?php 
              $no=1;
              foreach($data as $dn){ ?>
				<tr>
					<td><?php echo $no++ ?> </td>
					<td><?php echo $dn->nama ?></td>
					<td><?php echo $dn->alamat ?></td>
					<td><?php echo $dn->pekerjaan ?></td>
          <td><img src="<?php echo base_url('assets/uploads/').$dn->foto; ?>" width="90" height="110">
       
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

