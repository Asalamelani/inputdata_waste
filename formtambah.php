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
  </div><br>
	<div class="formu"><center><br>
    <font face="kristen itc" size="5" color="#6495ED">
    <u>Silahkan Tambah Datanya..</u></font>
		  <form method="POST" action="tambahdata2.php">
        <table>
          <tr>
      <td><input type="hidden" name="id" required placeholder="silahkan isi"></td></tr>
      <tr>
      <td> <font face="mv boli" size="5" color="white">Jenis Produksi</td>
      <td><font face="mv boli" size="5" color="white"><input type="radio" name="jenis_produksi" value="POY">
      <label for="POY">POY</label>
      <input type="radio"  name="jenis_produksi" value="DTY">
      <label for="DTY">DTY</label></td></tr><tr></tr>
      <tr>
			<td><font face="mv boli" size="5" color="white">Ukuran </td>
 			<td><input type="text" name="ukuran" required placeholder="silahkan isi" class="isi"></td></tr><br><tr></tr>
      <tr>
  		<td><font face="mv boli" size="5" color="white">Warna</td>
  		<td><input type="text" name="warna" required placeholder="silahkan isi" class="isi"></td></tr><tr></tr>
      <tr>
  		<td><font face="mv boli" size="5" color="white">Customer</td>
  		<td><input type="text" name="customer" required placeholder="silahkan isi" class="isi"></td></tr><tr></tr>
      <tr>
      <td><font face="mv boli" size="5" color="white">Tanggal</td>
      <td><input type="date" name="tanggal" required placeholder="silahkan isi" class="isi"></td></tr><tr></tr>
  	  <tr>
      <td><font face="mv boli" size="5" color="white">Shift</td>
  		<td><select name="shift" required  class="isi">
           <option value="pilih">Silahkan Pilih</option>
           <option value="1">1</option>
           <option value="2">2</option>
           <option value="3">3</option>
           <option value="4">4</option>
       </select></td></tr><tr></tr>
       <tr>
       <td><font face="mv boli" size="5" color="white">Mesin</td>
       <td><select name="mesin" required class="isi">
           <option value="pilih">Silahkan Pilih</option>
           <option value="1">1</option>
           <option value="2">2</option>
           <option value="3">3</option>
           <option value="4">4</option>
           <option value="5">5</option>
           <option value="6">6</option>
           <option value="7">7</option>
           <option value="8">8</option>
           <option value="9">9</option>
           <option value="10">10</option>
           <option value="11">11</option>
           <option value="12">12</option>
       </select></td></tr><tr></tr>
       <tr>
       <td><font face="mv boli" size="5" color="white">Kriteria Waste</td>
        <td><select name="kriteria_waste" required class="isi">
           <option value="">Silahkan Pilih</option>
           <option value="Cacat">Cacat</option>
           <option value="Double Cutting">Double Cutting</option>
           <option value="Jendul">Jendul</option>
           <option value="Jerawatan">Jerawatan</option>
           <option value="Kotor">Kotor</option>
           <option value="Merejel">Merejel</option>
           <option value="Ngareunteut">Ngareunteut</option>
           <option value="Ngelupas">Ngelupas</option>
           <option value="Permukaan Tidak Rata">Permukaan Tidak Rata</option>
           <option value="Rebek">Rebek</option>
           <option value="Slot">Slot</option>
           <option value="Notching">Notching</option>
       </select></td></tr><br><tr></tr>
       <tr>
       <td><font face="mv boli" size="5" color="white">Jumlah </td>
       <td><input type="number" name="jumlah" required placeholder="silahkan isi" class="nomber"></td></tr>
       <tr>
       <td><font face="mv boli" size="5" color="white">Keterangan</td>
       <td><select name="keterangan" required class="isi">
           <option value="">Silahkan Pilih</option>
           <option value="Cacat Dari Winding">Cacat Dari Winding</option>
           <option value="Cacat Dari Finishing">Cacat Dari Finishing</option>
           <option value="Cacat Dari Pengering">Cacat Dari Pengering</option>
           <option value="Double Cutting">Double Cutting</option>
           <option value="Long Tube Pendek">Long Tube Pendek</option>
           <option value="Sambungan">Sambungan</option>
           <option value="Ply Numpuk">Ply Numpuk</option>
           <option value="Overlap Numpuk">Overlap Numpuk</option>
           <option value="Jerawatan">Jerawatan</option>
           <option value="Oli">Oli</option>
           <option value="Debu">Debu</option>
           <option value="Minyak">Minyak</option>
           <option value="kotor">Printing</option>
           <option value="Printing">Merejel</option>
           <option value="merejel">Ply Dalam Bergelembung</option>
           <option value="Ply Dalam Bergelembung">Ngareunteut</option>
           <option value="Ngelupas">Ngelupas</option>
           <option value="Ply Tidak Nempel">Ply Tidak Nempel</option>
           <option value="Kertas Keriput">Kertas Keriput</option>
           <option value="Kertas Melipat">Kertas Melipat</option>
           <option value="Renggang">Renggang</option>
           <option value="Rebek">Rebek</option>
           <option value="Slot Pisau Error">Slot Pisau Error</option>
           <option value="Notching Error">Notching Error</option>
           <option value="Sobek">Sobek</option>
       </select></td></tr><tr></tr>
       <tr>
       <td><font face="mv boli" size="5" color="white">Total Produksi</td>
       <td><input type="number" name="total_produksi" required placeholder="silahkan isi" class="nomber"></td></tr><br><tr></tr>
       <tr></tr>
       <br></table>
  			<table><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr>
          <tr><td><input type="submit" value="selesai" class="selesai"></td></tr></table>
</center>
		</form>
    
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
  
  form{
    background-color:#6495ED;
    width:600px;
    height:700px;
   border-radius: 20px;
  }
  .footer{
    background-color: #6495ED;
    width: 100%;
    height: 30px;
  }
  .isi{
    background-color: white;
    width: 260px;
    height: 40px;
    border:solid 5px white;
    border-radius: 20px;
  }
  .nomber{
    background-color: white;
    height: 40px;
    width: 100px;
    border:solid 5px white;
    border-radius: 20px;

  }
  .selesai{
    background-color: #6495ED;
    height: 40px;
    width: 150px;
    border:solid 3px white;
    border-radius: 20px;
    float:center;
  }
  </style>
</html>
