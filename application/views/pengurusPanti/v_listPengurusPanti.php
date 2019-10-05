<!DOCTYPE html>
<html>
<head>
	<title>Bantu Panti</title>
</head>
<body>
	<h1>Bu Sarwo</h1>
	<table border="1">
		<tr>
			<th>Nama</th>
			<th>Alamat</th>
			<th>Pekerjaan</th>
			<th>Email</th>
			<th>Telp</th>
		</tr>
		<?php foreach($data as $pp){ ?>
		<tr>
			<td><?php echo $pp->pp_nama ?></td>
			<td><?php echo $pp->pp_alamat ?></td>
			<td><?php echo $pp->pp_jabatan ?></td>
			<td><?php echo $pp->pp_email ?></td>
			<td><?php echo $pp->pp_telf ?></td>
		</tr>
		<?php } ?>
	</table>
</body>
</html>
