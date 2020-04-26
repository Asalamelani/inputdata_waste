<?php
session_start();
include 'koneksi.php';
$adminname=$_POST['adminname'];
$password=$_POST['password'];
$data=mysqli_query($koneksi,"SELECT * FROM adminqc WHERE adminname='$adminname' and password='$password'");
$cek=mysqli_num_rows($data);
if($cek>0){	
	$cek['adminname'];
	$cek['password'];
	header("location:homeadmin.php");
}
else{
	header("location:gagallogin.php");
}
?>
