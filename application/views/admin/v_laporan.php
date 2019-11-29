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
        <div class="box-body" style="overflow-y:scroll">
        <div class="lap">
              <table id="example2" class="table table-bordered table-hover bg-danger table-striped text-center">
                  
                  <h2>Laporan Pemasukan</h2>
                      <tr>
                <th>No</th>
                <th>Keterangan</th>
                <th>Nominal</th>
                <th>Tanggal</th>
                    </tr>
                  
                  
            <?php
              $no=1;
              foreach($data as $pm){ ?>
              <tr>
                <td><?php echo $no++ ?> </td>
                <td><?php echo $pm->keterangan ?></td>
                <td><?php echo $pm->nominal ?></td>
                <td><?php echo $pm->tanggal?></td>
              </tr>
              <?php } ?>
                
                </table>
        </div>
        <div class="lap">
            <table id="example2" class="table table-bordered table-hover bg-danger table-striped text-center">
               
             <h2>Laporan Pengeluaran</h2>
                      <tr>
                <th>No</th>
                <th>Keterangan</th>
                <th>Nominal</th>
                <th>Tanggal</th>
                    </tr>
              
                 
            <?php
              $no=1;
              foreach($data as $pm){ ?>
              <tr>
                <td><?php echo $no++ ?> </td>
                <td><?php echo $pm->keterangan ?></td>
                <td><?php echo $pm->nominal ?></td>
                <td><?php echo $pm->tanggal?></td>
              </tr>
              <?php } ?>
               
                </table>
        </div>

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
  width: 47%;
  margin-right: 20px;
}
</style>

