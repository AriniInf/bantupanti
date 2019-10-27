<section class="content-header">
  <h1>
    Pengeluaran
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
    <li><a href="#">Tabel Rekap</a></li>
    <li class="active">Rekap Pengeluaran</li>
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
					<th>Keterangan</th>
					<th>Nominal</th>
					<th>Tanggal</th>
               </tr>
            </thead>
            <tbody>
			<?php
			  $no=1;
			  ?>
				<tr>
					<td><?php echo $no++ ?> </td>
					<td>Donatur abc</td>
					<td>120000000</td>
					<td>27-10-2019</td>
				</tr>
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
