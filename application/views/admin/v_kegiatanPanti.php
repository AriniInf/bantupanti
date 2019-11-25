<section class="content-header">
  <h1>
    Kegiatan Panti
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
    <li><a href="#">Lihat Semua</a></li>
    <li class="active">Kegiatan Panti</li>
  </ol>
</section>
<section class="content">
  <div class="row">
    <div class="col-xs-12">
      <div class="box">
        <div class="box-body" style="overflow-y:scroll">
			<div class="box_general">
				<div class="list_general list_admin">
					<ul>
						<?php
						foreach($data as $kp){ ?>
						<li>	
							<span><h3><?php echo $kp->pengurus?></h3></span>
							<span><p><?php echo $kp->tanggal ?></p></span>
							<h4 class="mb-2"><?php echo $kp->kegiatan ?></h4>
							<p><?php echo $kp->penjelasan ?></p>
							<div>
								<a href="" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#myModal" name="button_name" value="<?php echo $kp->kp_id?>"><i class="fa fa-edit"></i> Edit</a>
								<a href="" class="btn btn-primary btn-sm" onclick="show_add_komentar(<?php echo $kp->kp_id;?>);"><i class="fa fa-edit"></i> Komen</a>
								<?php echo anchor('admin/hapusKegiatan/'.$kp->kp_id,'<button class="btn btn-danger btn-remove btn-sm"><i class="fa fa-trash mr-2"></i>Hapus</button>');?>
							</div>						
						</li>	
						<?php } ?>		
					</ul>
				</div>
			</div>
		</div>
	  </div>
	</div>
  </div>

  <div class="modal fade" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Modal title</h4>
	  </div>
	  <?php foreach($data as $kp){?>
		<div class="modal-body">
			<form action="">
				<input type="hidden" name="id" value="">    
				<div class="form-group">
					<label>Nama lengkap</label>
					<input type="text" name="nama" class="form-control">
				</div>
				<div class="form-group">
					<label>Alamat</label>
					<textarea class="form-control" name="alamat"></textarea>
				</div>
			</form>
		</div>
		<div class="modal-footer">
			<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			<button type="button" class="btn btn-primary">Save changes</button>
		</div>
	 <?php }?>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
</body>
<script type="text/javascript">
    $(window).load(function(){
        $('#myModal').modal('show');
    });
</script>

</section>
