<section class="content-header">
  <h1>
   Profile Donatur
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
    <li><a href="#">Lihat Semua</a></li>
    <li class="active">Profile</li>
  </ol>
<table class="table table hover table-bordered table-striped">


            <?php foreach($data as $do) : ?>
        <tr>
          <td>Foto</td>
          <td><?php echo $do->foto; ?></td>
        </tr>
				<tr>
          <td>nama</td>
					<td><?php echo $do->nama; ?></td>
        </tr>
        <tr>
          <td>Alamat</td>
					<td><?php echo $do->alamat; ?></td>
        </tr>
        <tr>
          <td>Pekerjaan</td>
					<td><?php echo $do->pekerjaan; ?></td>
        </tr>
        <tr>
          <td>Email</td>
					<td><?php echo $do->email; ?></td>
        </tr>
        <tr>
          <td>Telp</td>
					<td><?php echo $do->telp; ?></td>
				</tr>
        <tr>
        <td><?php echo anchor('donatur/editprofile','<button class="btn btn-primary btn-sm"><i class="fa fa-edit"></i> komen </button>')?>
        </tr>
        <br>
              <?php endforeach; ?>
              
         
          </table>
 

<style>
.table-striped > tbody > tr:nth-child(2n+1) > td, .table-striped > tbody > tr:nth-child(2n+1) > th {
   background-color: #f4f4f4;
}
</style>
