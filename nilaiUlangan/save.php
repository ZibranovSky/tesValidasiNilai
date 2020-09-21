<?php 
include 'koneksi.php';


if (isset($_POST['simpan'])) {
	$nis = $_POST['nis'];
	$nama = $_POST['nama'];
	$mtk = $_POST['mtk'];
	$inggris = $_POST['inggris'];
	$indo = $_POST['indo'];

}

$mtkmin = 75;
$indomin = 75;
$inggrismin = 75;

if ($mtk < $mtkmin || $inggris < $inggrismin || $indo < $indomin) {
	$keterangan = "tidak lulus";
}else{
	$keterangan = "lulus";
}

$save = "INSERT INTO validasi set nis='$nis', nama='$nama', mtk='$mtk', inggris='$inggris', indo='$indo', keterangan='$keterangan'";
mysqli_query($koneksi, $save);
 ?>


 <?php 
if ($save) {
	header("location: view_nilai.php");
}else{
	echo "false";
}
  
  ?>
