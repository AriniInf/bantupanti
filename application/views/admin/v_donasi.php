<section class="content-header">
  <h1>
    Donasi
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
    <li><a href="#">Lihat Semua</a></li>
    <li class="active">List Donasi</li>
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
					<th>Donatur</th>
					<th>Nominal</th>
					<th>Tanggal</th>
					<th>Bukti</th>
					<th>Validasi</th>
					<th>Hapus</th>
               </tr>
            </thead>
            <tbody>
			<?php 
              $no=1;
              foreach($data as $do){ ?>
				<tr>
					<td><?php echo $no++ ?> </td>
					<td><?php echo $do->pendonatur ?></td>
					<td><?php echo $do->nominal ?></td>
					<td><?php echo $do->tanggal ?></td>
					<td></td>
					<td><button>Validasi</button></td>
					<td><?php echo anchor('admin/hapusDonasi/'.$do->dn_id,'Hapus');?></td>
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

