<!DOCTYPE html>
<html>
<body>

<!-- <form action="/action_page.php" id="usrform">
  Name: <input type="text" name="usrname">
  <input type="submit">
</form> -->
<br>
<form action="<?php echo base_url(). 'donatur/tambahkomenkegiatan'; ?>" method="post" class="col-xs-6">
<div class="form-group">
		<input type="hidden" name="do_id" id="do_id" value="" class="form-control">
	</div>
	<div class="form-group">
		<input type="hidden" name="kp_id" id="kp_id" value="" class="form-control">
	</div>
    <div class="form-group">
		<label>tanggal</label>
		<input type="date" name="tanggal" class="form-control">
	</div>
<textarea rows="4" cols="50" name="komen" id="komen" form="usrform">
Enter text here...</textarea>
<br>
<input type="submit">
</form>



</body>
</html>