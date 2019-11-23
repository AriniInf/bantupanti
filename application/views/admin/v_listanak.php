<section class="content-header">
<?php if($this->session->flashdata('tambah')): ?>
     <?php if($this->session->flashdata('tambah') == TRUE): ?>
          <div class="alert alert-success">Berhasil menambahkan pengguna baru</div>
     <?php elseif($this->session->flashdata('tambah') == FALSE): ?>
          <div class="alert alert-danger">Gagal menambahkan pengguna baru</div>
     <?php endif; ?>
<?php endif; ?>
  <h1>
    List Anak Panti
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
					<th>Tempat Tanggal Lahir</th>
          <th>Hobi</th>
          <th>Prestasi</th>
          <th>Sekolah</th>
          <th>Foto</th>
					
               </tr>
            </thead>
            <tbody>
			<?php 
              $no=1;
              foreach($data as $ap){ ?>
				<tr>
					<td><?php echo $no++ ?> </td>
					<td><?php echo $ap->nama ?></td>
					<td><?php echo $ap->tempatlahir ?>, <?php echo $ap->tanggal ?></td>
          <td><?php echo $ap->hobi ?></td>
					<td><?php echo $ap->prestasi ?></td>
					<td><?php echo $ap->sekolah ?></td>
          <td><img src="<?php echo base_url('assets/uploads/').$ap->foto; ?>" width="90" height="110">
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
