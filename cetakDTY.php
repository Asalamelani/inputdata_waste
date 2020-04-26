<?php
include 'koneksi.php';
?>
<html>
<head>
<title></title>
</head>
<body>
	
	<div class="content"style="background-color: gray; width: 100%; height: 800px;">
		<br><center><font face="mv boli" size="5" color="black">Hasil Data Analisa Waste Finishing DTY
		<br></font></center>
		
		
		<font face="mv boli" size="4" color="black">
			<br>
	
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
				
			
			<?php

			$no=1;
			$data=mysqli_query($koneksi,"SELECT * FROM data_analisa_waste WHERE jenis_produksi='DTY'");
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
		<script>
			window.print();
		</script>
		
	</div>

<style>
	
	
	
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

</style>
</html>