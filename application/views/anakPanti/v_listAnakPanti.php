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
			<th>Tempat Tanggal Lahir</th>
			<th>Hobi</th>
			<th>Sekolah</th>
			<th>Prestasi</th>
		</tr>
		<?php foreach($data as $ap){ ?>
		<tr>
			<td><?php echo $ap->ap_nama ?></td>
			<td><?php echo $ap->ap_tempatlahir, $ap->ap_tanggallahir ?></td>
			<td><?php echo $ap->ap_hobi ?></td>
			<td><?php echo $ap->ap_sekolah ?></td>
			<td><?php echo $ap->ap_prestasi ?></td>
		</tr>
		<?php } ?>
	</table>
</body>
</html>
