<?php
session_start();
include 'koneksi.php';
$username=$_POST['username'];
$password=$_POST['password'];
$data=mysqli_query($koneksi,"SELECT * FROM userqc WHERE username='$username' and password='$password'");
$cek=mysqli_num_rows($data);
if($cek>0){	
	$cek['username'];
	$cek['password'];
	header("location:home.php");
}
else{
	header("location:gagallogin.php");
}
?>
