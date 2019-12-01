<section class="content-header">
  <h1>
    Kegiatan Panti
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
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
					foreach($komen as $ko){ ?>
					<div class="row">
						<div class="col-xs-6">
						
						<li>
							<p><?php echo $ko->tanggal ?></p>
							<p><?php echo $ko->komen ?></p>
							<div>

								<?php echo anchor('admin/hapusKegiatan/'.$kp->kp_id,'<button class="btn btn-danger btn-remove btn-sm"><i class="fa fa-trash mr-2"></i> Hapus</button>', array('class'=>'delete', 'onclick'=>"return confirmDialog();"));?>

							</div>
							
						</div>
						<div class="col-xs-3">
						<br><br>
							<span><img src="<?php echo base_url('assets/uploads/').$kp->foto; ?>" width="110" height="90"></span>
							<br>
						</div>
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

</div>	

</body>

<script>
function confirmDialog() {
    return confirm("Are you sure you want to delete this record?")
}
</script>

</section>
