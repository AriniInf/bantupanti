<!DOCTYPE html>
<html>
<head>
	<title>Bantu Panti</title>
</head>
<body>
	<center>
		<h1>Form Tambah Story</h1>
	</center>
	<form action="<?php echo base_url(). 'anakPanti/tambahStory'; ?>" method="post">
		<table style="margin:20px auto;">
			<?php
			// foreach($data as $ap){
			// 	echo 
			// 	'<tr>
			// 	<td>Nama</td>
			// 	<td><input type="text" value="'.$ap->sap.ap_id.'" name="ap_id"></td>
			// 	</tr>';
			// }?>
			<tr>
				<td>ap_id</td>
				<td><input type="text" name="ap_id"></td>
			</tr>
			<tr>
				<td>Cerita</td>
				<td><input type="text" name="diary"></td>
			</tr>
			<tr>
				<td>Tanggal</td>
				<td><input type="date" name="tanggal"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="Tambah"></td>
			</tr>
		</table>
	</form>	
</body>
</html>
