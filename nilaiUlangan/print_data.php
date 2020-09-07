<!DOCTYPE html>
<html>
<head>
	<title>lihat nilai</title>
</head>
<body>

<table border="1">
	<tr>
		<th>NIS</th>
		<th>Nama</th>
		<th>Nilai Matematika</th>
		<th>Nilai Bahasa Inggris</th>
		<th>Nilai Bahasa Indonesia</th>
		<th>Keterangan</th>
		
	</tr>
	<?php 
	include 'koneksi.php';

	$query = mysqli_query($koneksi, "SELECT * FROM validasi ORDER BY nis DESC");

	while ($data = mysqli_fetch_array($query)) {
		
			
	 ?>

	 <tr>
	 	<td><?php echo $data['nis']; ?></td>
	 	<td><?php echo $data['nama']; ?></td>
	 	<td><?php echo $data['mtk']; ?></td>
	 	<td><?php echo $data['inggris']; ?></td>
	 	<td><?php echo $data['indo']; ?></td>
	 	<td><?php echo $data['keterangan']; ?></td>

	 </tr>
	 <?php } ?>

	 <script type="text/javascript">window.print();</script>