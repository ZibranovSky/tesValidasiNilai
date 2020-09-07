<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<title>
		Validasi Lulus
	</title>
</head>
<body class="antiburn"><center>
<form action="validasi.php" method="POST">
<h1>Validasi nilai ulangan php</h1>
<table class="">
	<tr>
		<td>Nilai Matematika</td>
		<td> </td>
		<td><input type="text" autocomplete="off" name="mtk" class="form-control"></td>
	</tr>
	<tr>
		<td>Nilai Bahasa Indonesia</td>
		<td> </td>
		<td><input type="text" name="indo" class="form-control" autocomplete="off"></td>
	</tr>
	<tr>
		<td>Nilai Bahasa Inggris</td>
		<td> </td>
		<td><input type="text" name="inggris" autocomplete="off" class="form-control"></td>
	</tr>
	<tr>
		<td><input type="submit" name="simpan" class="btn btn-success" value="Validasi"></td>
	</tr>
</table>
	
</form>
</center>
</body>
</html>