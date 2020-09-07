<?php 
if (isset($_POST['simpan'])) {
	
	$mtk = $_POST['mtk'];
	$indo = $_POST['indo'];
	$inggris = $_POST['inggris'];
}

$mtkmin = 95;
$indomin = 75;
$inggrismin = 75;

if ($mtk < $mtkmin || $indo < $indomin || $inggris < $inggrismin) {
	echo "anda tidak lulus :(";
}else{
	echo "anda lulus :)";
}
 
 ?>
 <br>
<a href="https://youtu.be/NqM032dnPtk"><button class="btn btn-success">Click this button to proceed</button>
