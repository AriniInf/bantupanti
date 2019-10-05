<!DOCTYPE html>
<html>
<head>
	<title>Bantu Panti</title>
</head>
<body>
	<h1>List</h1>
	<table border="1">
		<tr>
			<th>Nama</th>
			<th>Alamat</th>
			<th>Pekerjaan</th>
			<th>Email</th>
			<th>Telp</th>
		</tr>
		<?php foreach($data as $do){ ?>
		<tr>
			<td><?php echo $do->do_nama ?></td>
			<td><?php echo $do->do_alamat ?></td>
			<td><?php echo $do->do_pekerjaan ?></td>
			<td><?php echo $do->do_email ?></td>
			<td><?php echo $do->do_telp ?></td>
		</tr>
		<?php } ?>
	</table>
</body>
</html>
