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

mysqli_query($koneksi, "UPDATE validasi SET nama='$nama', mtk='$mtk', inggris='$inggris', indo='$indo', keterangan='$keterangan' WHERE nis='$nis'");

 ?>

 <a href="view_nilai.php">back</a>