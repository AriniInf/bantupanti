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
			<td><?php echo $sap->isistory ?></td>
			<td><?php echo $sap->tanggalstory ?></td>
		</tr>
		<?php } ?>
	</table>
</body>
</html>
