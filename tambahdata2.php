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


mysqli_query($koneksi,"INSERT INTO data_analisa_waste values('$id','$jenis_produksi','$ukuran','$warna','$customer','$tanggal','$shift','$mesin','$kriteria_waste','$jumlah','$keterangan','$total_produksi')");
mysqli_query($koneksi,$query);
if($jenis_produksi == 'POY'){header("Location:dataPOY2.php");
}else($jenis_produksi == 'DTY'){header("Location:dataDTY2.php")
}
?>