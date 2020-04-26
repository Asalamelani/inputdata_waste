<html>
<head>
<title>Quality Control</title>
</head>
<body>
	<div class="header"><br>
		<font face="kristen itc" size="6" color="orange">
		<img src="image/qclogo.jpg" width="100px" height="70px">&nbsp;&nbsp;Quality Control PT. Alkindo Naratama Tbk</font>
		
		<font face="kristen itc" size="4" color="white" class="tombollogout" align="center"><a href="logout.php" onclick="javascript:return confirm('Apakah anda yakin akan logout?')">Logout</a></font>
	</div><br>
	<div class="menu">
		<center><font face="mv boli" size="4" color="white">
		<a href="home.php" class="klik">Home |</a>
		<a href="inputdata.php" class="klik">Input Data |</a>
		<a href="dataPOY.php" class="klik">Data POY |</a>
		<a href="dataDTY.php" class="klik">Data DTY</a></font></center>
	</div>
	<div class="content"style="background-color: #9370DB; width: 100%; height: auto;">
		<br><center><font face="mv boli" size="5" color="white">Hasil Data Analisa Waste Finishing POY
		<br></font></center>
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
		
			
			</tr>
			<?php
			include 'koneksi.php';
			$no=1;
			$data=mysqli_query($koneksi,"SELECT * FROM data_analisa_waste WHERE jenis_produksi='POY'");
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
			
			</tr>
			<?php
		}
		?></table>
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
		background-color:orange;
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
		background-color: yellow;
}

	.tombollogout{
		background-color: orange;
		float: right;
		width:100px;
		height:30px;
		border:solid white 2px;
		border-radius: 10px;

	}
	table{
		font-family: sans-serif;
		color:#444;
		border-collapse: collapse;
		width: 100%;
		border:solid 2px gray;
	}
	table,tr,th{
		background:orange;
		color:black;
		font-weight: normal;
		
		
	}
	table,th,td{
		padding: 8px 15px;
		text-align: center;
	}
	table tr,td:hover{
		background-color: #C0C0C0;
	}
	table tr:nth-child(even){
		background-color: white;
	}

		.footer{
		background-color: orange;
		width: 100%;
		height: 30px;
	}

	
</style>
</html>