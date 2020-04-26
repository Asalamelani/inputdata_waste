<?php
include 'koneksi.php';
?>
<html>
<head>
<title>Quality Control</title>
</head>
<body>
	<div class="header"><br>
		<font face="kristen itc" size="6" color="#6495ED">
		<img src="image/qclogo.jpg" width="100px" height="70px">&nbsp;&nbsp;Quality Control PT. Alkindo Naratama Tbk</font>
		
		<font face="kristen itc" size="4" color="white" class="tombollogout" align="center"><a href="logout.php" onclick="javascript:return confirm('Apakah anda yakin akan logout?')">Logout</a></font>
	</div><br>
	<div class="menu">
		<center><font face="mv boli" size="4" color="white">
		<a href="homeadmin.php" class="klik">Home |</a>
		<a href="dataPOY2.php" class="klik">Data POY |</a>
		<a href="dataDTY2.php" class="klik">Data DTY</a></font></center>
	</div>
	<div class="content"style="background-color: gray; width: 100%; height: auto;">
		<br><center><font face="mv boli" size="5" color="white">Hasil Data Analisa Waste Finishing DTY
		<br></font></center>
		<a href="formtambah.php" class="tomboltambah">
		<font face="comic sans ms" size="3" color="white"><center>TAMBAH</center></font></a>
		<form action="dataDTY2.php" method="get">
			<input type="submit" value="cari" class="caris"> 
			<input type="text" name="cari" placeholder="Search" class="cari">
		</form>
		<font face="mv boli" size="4" color="black">
			<br>
		<?php
		if(isset($_GET['cari'])){
			$cari=$_GET['cari'];
			echo"<b>Hasil pencarian: ".$cari."</b>";
		}
		?>
		<table border="2">
			<tr>
				<th>NO</th>
				<th>JENIS PRODUKSI</th>
				<th>UKURAN</th>
				<th>WARNA</th>
				<th>CUSTOMER</th>
				<th>TANGGAL</th>
				<th>SHIFT</th>
				<th>MESIN</th>
				<th>KRITERIA WASTE</th>
				<th>JUMLAH</th>
				<th>KETERANGAN</th>
				<th>TOTAL PRODUKSI</th>
				<th colspan="2">OPSI</th>
		
			
			</tr>
			<?php
			if(isset($_GET['cari'])){
				$cari=$_GET['cari'];
				$data=mysqli_query($koneksi,"SELECT * FROM data_analisa_waste where jenis_produksi='DTY' AND concat(warna,kriteria_waste,tanggal) LIKE '%".$cari."%'");
			}else{
				$data=mysqli_query($koneksi,"SELECT * FROM data_analisa_waste WHERE jenis_produksi='DTY'");
			}
			$no=1;
			while($d=mysqli_fetch_array($data))
			{
			?>
			<tr>
				<td><?php echo $no++; ?></td>
				<td><?php echo $d['jenis_produksi']; ?></td>
				<td><?php echo $d['ukuran']; ?></td>
				<td><?php echo $d['warna']; ?></td>
				<td><?php echo $d['customer']; ?></td>
				<td><?php echo $d['tanggal']; ?></td>
				<td><?php echo $d['shift']; ?></td>
				<td><?php echo $d['mesin']; ?></td>
				<td><?php echo $d['kriteria_waste']; ?></td>
				<td><?php echo $d['jumlah']; ?></td>
				<td><?php echo $d['keterangan']; ?></td>
				<td><?php echo $d['total_produksi']; ?></td>
				<td><a href="formedit.php?id=<?php echo $d['id'];?>" class="tomboledit"
				onclick="javascript:return confirm('Apakah anda yakin akan Mengubah data ini?')">
				<font face="comic sans ms" size="3" color="white"><center>EDIT</center></td>
				<td><a href="delete.php?id=<?php echo $d['id'];?>" class="tombolhapus"
				onclick="javascript:return confirm('Apakah anda yakin akan Menghapus data ini?')">
				<font face="comic sans ms" size="3" color="white"><center>HAPUS</center></td>

			</tr>
			<?php
		}
		?></table>
		<br>
		<a href="cetakDTY.php" class="tombolcetak">
		<font face="comic sans ms" size="3" color="white"><center>CETAK</center></font></a>
	</div>
<div class="footer">
    <font face="mv boli" size="4" color="white">
    <center>copyright &copy; 2020 Asala Melani</center>
  </div>
</body>
<style>
	.header{
		background-color:white;
		height:85px; 
		
	}
	.menu{
		background-color:#6495ED;
		height:30px; 
		width:cover;
		
	}
	a:link, a:visited {
		background-color:black center;
		color: white;
		text-align: center;
		text-decoration: none;
		display: inline-block;
	}
	a:hover, a:active {
		background-color: #87CEFA;
}

	.tombollogout{
		background-color: #6495ED;
		float: right;
		width:100px;
		height:30px;
		border:solid white 2px;
		border-radius: 10px;

	}
	.cari{
		background-color: white;
		float:right;
		width:130px;
		height:30px;
		border:solid gray 1px;
		border-radius: 10px;

	}
	.caris{
		background-color: white;
		float:right;
		width:50px;
		height: 30px;
		border:solid gray 1px;
		border-radius: 10px;
	}
	table{
		font-family: sans-serif;
		color:#444;
		border-collapse: collapse;
		width: 100%;
		border:solid 2px black;
	}
	table,tr,th{
		background:#6495ED;
		color:black;
		font-weight: normal;	
	}
	table,th,td{
		padding: 8px 10px;
		text-align: center;
	}
	table tr,td:hover{
		background-color: #C0C0C0;
	}
	table tr:nth-child(even){
		background-color: white;
	}

		.footer{
		background-color: #6495ED;
		width: 100%;
		height: 30px;
	}
	.tomboledit{
		background-color: yellow;
		width: 60px;
		height: 30px;
		border:solid 2px yellow;
		border-radius: 8px;
	}
	.tombolhapus{
		background-color: red;
		width: 60px;
		height: 30px;
		border:solid 2px red;
		border-radius: 8px;
	}
	.tomboltambah{
		background-color: blue;
		width: 80px;
		height: 30px;
		border:solid 2px blue;
		border-radius: 8px;
		float:left;
	}
	.tombolcetak{
		background-color: blue;
		width: 80px;
		height: 30px;
		border:solid 2px blue;
		border-radius: 8px;
	
	}
</style>
</html>