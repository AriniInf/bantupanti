<!DOCTYPE html>
<html>
<head>
	<title>Bantu Panti</title>
</head>
<body>
	<center>
		<h1>Add Story</h1>
		<h3>Tambah data baru</h3>
	</center>
	<form action="<?php echo base_url(). 'anakPanti/addStory'; ?>" method="post">
		<table style="margin:20px auto;">
			<tr>
				<td>Kegiatan</td>
				<td><input type="text" name="kp_namakegiatan"></td>
			</tr>
			<tr>
				<td>Detil Kegiatan</td>
				<td><input type="text" name="kp_penjelasan"></td>
			</tr>
			<tr>
				<td>Tanggal</td>
				<td><input type="text" name="kp_tanggal"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="Tambah"></td>
			</tr>
		</table>
	</form>	
</body>
</html>
