<!DOCTYPE html>
<html>
<head>
	<title>Bantu Panti</title>
</head>
<body>
	<h1>Donasi</h1>
	<table border="1">
		<tr>
			<th>Nama</th>
			<th>Nominal</th>
			<th>Tanggal</th>
			<th>Validasi</th>
			<th>Hapus</th>
		</tr>
		<?php foreach($data as $dn){ ?>
		<tr>
			<td><?php echo $dn->do_nama ?></td>
			<td><?php echo $dn->dn_nominal ?></td>
			<td><?php echo $dn->dn_tanggal ?></td>
			<td><button>Validasi</button></td>
			<td><?php echo anchor('admin/hapusDonasi/'.$dn->dn_id,'Hapus');?></td>
		</tr>
		<?php } ?>
	</table>
</body>
</html>
