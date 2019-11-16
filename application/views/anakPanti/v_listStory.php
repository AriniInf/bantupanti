<!sapCTYPE html>
<html>
<head>
	<title>Bantu Panti</title>
</head>
<body>
	<h1>List</h1>
	<table border="1">
		<tr>
			<th>Nama</th>
			<th>Story</th>
			<th>Tanggal</th>
			
		</tr>
		<?php foreach($data as $sap){ ?>
		<tr>
			<td><?php echo $sap->ap_nama ?></td>
			<td><?php echo $sap->diary ?></td>
			<td><?php echo $sap->tanggal ?></td>
		</tr>
		<?php } ?>
	</table>
</body>
</html>
