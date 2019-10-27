<section class="content-header">
  <h1>
    Donatur
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
    <li><a href="#">Lihat Semua</a></li>
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
					<th>Nominal</th>
					<th>Tanggal</th>
					<th>Validasi</th>
					<th>Hapus</th>
               </tr>
            </thead>
            <tbody>
			<?php 
              $no=1;
              foreach($data as $dn){ ?>
				<tr>
					<td><?php echo $no++ ?> </td>
					<td><?php echo $dn->do_nama ?></td>
					<td><?php echo $dn->dn_nominal ?></td>
					<td><?php echo $dn->dn_tanggal ?></td>
					<td><button>Validasi</button></td>
					<td><?php echo anchor('admin/hapusDonasi/'.$dn->dn_id,'Hapus');?></td>
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
