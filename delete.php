<?php
include 'koneksi.php';
$id=$_GET['id'];

$query="DELETE FROM data_analisa_waste WHERE id='$id'";
	mysqli_query($koneksi, $query);

header("Location:dataPOY2.php");

?>