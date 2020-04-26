<?php
include 'koneksi.php';

$id=$_POST['id'];
$jenis_produksi=$_POST['jenis_produksi'];
$ukuran=$_POST['ukuran'];
$warna=$_POST['warna'];
$customer=$_POST['customer'];
$tanggal=$_POST['tanggal'];
$shift=$_POST['shift'];
$mesin=$_POST['mesin'];
$kriteria_waste=$_POST['kriteria_waste'];
$jumlah=$_POST['jumlah'];
$keterangan=$_POST['keterangan'];
$total_produksi=$_POST['total_produksi'];

$query="UPDATE data_analisa_waste set jenis_produksi='$jenis_produksi', ukuran='$ukuran', warna='$warna', customer='$customer', tanggal='$tanggal', shift='$shift', mesin='$mesin', kriteria_waste='$kriteria_waste', jumlah='$jumlah', keterangan='$keterangan', total_produksi='$total_produksi' where id='$id'";
mysqli_query($koneksi,$query);
if($jenis_produksi == 'POY'){header("Location:dataPOY2.php");
}else($jenis_produksi == 'DTY'){header("Location:dataDTY2.php")
}


?>