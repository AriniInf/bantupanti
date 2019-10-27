<!DOCTYPE html>
<html>
<head>
	<title>Bantu Panti</title>
</head>
<body>
	<center>
		<h1>Form Tambah Anak</h1>
	</center>
	<form action="<?php echo base_url(). 'anakPanti/tambahAnak'; ?>" method="post">
		<table style="margin:20px auto;">
			<tr>
				<td>Nama</td>
				<td><input type="text" name="ap_nama"></td>
			</tr>
			<tr>
				<td>Tempat Lahir</td>
				<td><input type="text" name="ap_tempatlahir"></td>
			</tr>
			<tr>
				<td>Tanggal Lahir</td>
				<td><input type="date" name="ap_tanggallahir"></td>
			</tr>
			<tr>
				<td>Hobi</td>
				<td><input type="text" name="ap_hobi"></td>
			</tr>
			<tr>
				<td>Sekolah</td>
				<td><input type="text" name="ap_sekolah"></td>
			</tr>
			<tr>
				<td>Prestasi</td>
				<td><input type="text" name="ap_prestasi"></td>
			</tr>
			<tr>
				<td>Foto</td>
				<td><input type="photo" name="ap_foto"></td>
			</tr>
			<tr>
				<td>Username</td>
				<td><input type="text" name="ap_username"></td>
			</tr>
			<tr>
				<td>Password</td>
				<td><input type="password" name="ap_password"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="Tambah"></td>
			</tr>
		</table>
	</form>	
</body>
</html>
