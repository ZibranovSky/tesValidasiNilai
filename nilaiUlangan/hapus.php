<?php 

include 'koneksi.php';

$nis = $_GET['nis'];

mysqli_query($koneksi, "DELETE FROM validasi WHERE nis = $nis");

header("location: view_nilai.php")

?>