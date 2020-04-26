<?php
$host="localhost";
$user="quality control";
$pass="";
$db="qcalkindo";

$koneksi=mysqli_connect($host,$user,$pass,$db);

if(mysqli_connect_errno()){
	echo"koneksi database gagal, silahkan coba lagi".mysqli_connect_errno();
}
?> 
