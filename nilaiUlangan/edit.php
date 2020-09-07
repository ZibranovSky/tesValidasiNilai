<?php 
include 'koneksi.php';
$nis = $_GET['nis'];
$data = mysqli_query($koneksi, "SELECT * FROM validasi where nis ='$nis' ");
while ($d = mysqli_fetch_array($data)) {
	

 ?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<title>jasjoes kriptoss</title>
</head>
<body class="antiburn">
<form action="edit_pro.php" method="POST">
	<h1>Edit Data</h1>
	<table>
	<tr>
		<td>nis</td>
		<td> : </td>
		<td><input type="hidden	" name="nis" class="form-control"  value="<?php echo $d['nis'];?>" placeholder=""></td>
	</tr>
	<tr>
		<td>nama</td>
		<td> : </td>
		<td><input type="text" name="nama" class="form-control" value="<?php echo $d['nama'];?>" placeholder=""></td>
	</tr>
	<tr>
		<td>nilai matematika</td>
		<td> : </td>
		<td><input type="text" name="mtk" class="form-control" value="<?php echo $d['mtk'];?>" placeholder=""></td>
	</tr>
	<tr>
		<td>nilai Bahasa inggris</td>
		<td> : </td>
		<td><input type="text" name="inggris" class="form-control" value="<?php echo $d['inggris'];?>" placeholder=""></td>
		
	</tr>
	<tr>
		<td>nilai Bahasa Indonesia</td>
		<td> : </td>
		<td><input type="text" name="indo" class="form-control" value="<?php echo $d['indo'];?>" placeholder="">	</td>
	</tr>
	
	<tr><td><input type="submit" name="simpan" class="btn btn-warning" value="proses"></td></tr>
	</table>
</form>
</body>
</html>
<?php } ?>