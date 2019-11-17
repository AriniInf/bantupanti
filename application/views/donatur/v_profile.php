<div class="cotainer-fliud">
<section class="content-header">
  <h1>
    Donatur
  </h1>
  <ol class="breadcrumb">
    
  </ol>
</section>

<section class="content">

          <table id="example2" class="table table-hover table-striped text-center">
           
                <tr>
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th>Pekerjaan</th>
                    <!-- <th>Telp</th>
                    <th>Foto</th> -->
                    <th colspan="2">Aksi</th>
               </tr>
            
            <tbody>
              <?php 
              
              foreach ($data as $do)  : ?> 
				<tr>
                    <td><?php echo $do->nama ?></td>
                    <td><?php echo $do->alamat ?></td>
                    <td><?php echo $do->pekerjaan ?></td>
                    <td width="20px"><?php echo anchor('donatur/detail/'.$do->do_id,'<div class="btn btn-sm btn-info"><i class="fa fa-eye"></i></div>')?></td>
                    <td width="20px"><?php echo anchor('donatur/update/'.$do->do_id,'<div class="btn btn-sm btn-primary"><i class="fa fa-edit"></i></div>')?></td>
				</tr>
                <?php endforeach; ?>
            </tbody>
          </table>
       
</section>

<style>
.table-striped > tbody > tr:nth-child(2n+1) > td, .table-striped > tbody > tr:nth-child(2n+1) > th {
   background-color: #f4f4f4;
}
</style>
</div>