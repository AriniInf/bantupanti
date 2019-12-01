<script>
  window.print();
  importStyle: true;
</script>
<section class="content-header">
  <h1>
    Laporan
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
    <li><a href="#">Tabel Rekap</a></li>
    <li class="active">Laporan</li>
  </ol>
</section>

<section class="content">
  <div class="row">
    <div class="col-xs-12">
      <div class="box">
		<div class="box-body">
		<center><h3>Laporan Keuangan Panti Asuhan BJ Habibie</h3></center>
		<center><p>Jl. Keputih Tegal I No.25, Keputih, Kec. Sukolilo, Kota SBY, Jawa Timur 60111.</p></center>
		<center><p>Telepon: (031) 5950362</p></center>
		<hr>
        <div class="lap">
					<table id="" class="table table-bordered table-hover bg-danger table-striped text-center">
						<h4><li>Laporan Pemasukan</li></h4>
					
						<thead>
						<tr>
							<th>No</th>
							<th>Keterangan</th>
							<th>Tanggal</th>
							<th>Nominal</th>
						</tr>
						</thead>
						<tbody> 
				    
            <?php
              $no=1;
              foreach($pemasukan as $pm){ ?>
              <tr>
                <td><?php echo $no++ ?> </td>
                <td><?php echo $pm->keterangan ?></td>
				<td><?php echo $pm->tanggal?></td>
                <td><?php echo $pm->nominal ?></td>
              </tr>
            <?php } ?>
						</tbody>
						<tfoot>
						<?php
              foreach($total_pem as $pm){ ?>
						<tr class="bg-gray">
							<td colspan="3"><center><b>Total</b></center></td>
							<td><?php echo $pm->total?></td>
						</tr>
						<?php } ?>
					</tfoot>
          </table>
				</div>

        <div class="lap">
				<table id="" class="table table-bordered table-hover bg-danger table-striped text-center">
						<h4><li>Laporan Pengeluaran</li></h4>
						<thead>
						<tr>
							<th>No</th>
							<th>Keterangan</th>
							<th>Tanggal</th>
							<th>Nominal</th>
						</tr>
						</thead>
						<tbody>       
            <?php
              $no=1;
              foreach($pengeluaran as $pm){ ?>
              <tr>
                <td><?php echo $no++ ?> </td>
                <td><?php echo $pm->keterangan ?></td>
				<td><?php echo $pm->tanggal?></td>
                <td><?php echo $pm->nominal ?></td>
              </tr>
            <?php } ?>
						</tbody>
						<tfoot>
						<?php
              foreach($total_peng as $pm){ ?>
						<tr class="bg-gray">
							<td colspan="3"><center><b>Total</b></center></td>
							<td><?php echo $pm->total?></td>
						</tr>
						<?php } ?>
					</tfoot>
          </table>
		</div>
		
		<h5>Jumlah saldo pada akhir bulan ......... 2019</h5>
		<?php
		foreach($total_pem as $pm ){ 
		foreach($total_peng as $png ){ ?>
		<?php $total =  $pm->total - $png->total?>
		<h4>Rp. <?php echo $total?></h4>
		<?php } ?>
		<?php } ?>
		<br>

		<div class="lap1">
			<p>Mengetahui,</p>
				<p>Ketua Panti Asuhan BJ Habibie</p>
				<br><br><br>
				<p>Arini Indah Nur Fuadah</p>
				<br>
		</div>

        <div class="lap2">
		<br>
				<br><p>Bendahara,</p>
				<br><br><br>
				<p>Jack</p>
				<br>
		
		</div>
		
      </div>
    </div>
  </div>
</section>

<style>
.table-striped > tbody > tr:nth-child(2n+1) > td, .table-striped > tbody > tr:nth-child(2n+1) > th {
   background-color: #f4f4f4;
}
.lap{
  float:left;
  width: 70%;
  margin-right: 120px;
  margin-left: 120px;
}
.lap2{
  float:right;
  width: 20%;
  margin-left: 100px;
  margin-right: 20px;
}

.lap1{
  float:left;
  width: 40%;
  margin-left: 20px;
}

</style>

