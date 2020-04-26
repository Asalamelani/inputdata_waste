  <?php
include 'koneksi.php';
$id=$_GET['id'];
$data= mysqli_query($koneksi,"SELECT* from data_analisa_waste where id='$id'");
while($d=mysqli_fetch_array($data))
{

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
  </div><br>
	<div class="formu"><center><br>
    <font face="kristen itc" size="5" color="#6495ED">
    <u>Edit Data</u></font>
		  <form method="POST" action="edit.php">
    
      <input type="hidden" name="id" value="<?php echo $d['id']; ?>">
      <table>
      <tr>
      <td> <font face="mv boli" size="5" color="white">Jenis Produksi</td>
      <td><font face="mv boli" size="5" color="white">
      <input type="radio" id="POY" name="jenis_produksi" value="POY"<?php if($d['jenis_produksi'] =='POY'){echo'checked';}?> required>
      <label for="poy">POY</label>
      <input type="radio" id="DTY" name="jenis_produksi" value="DTY"<?php if($d['jenis_produksi'] =='DTY'){echo'checked';}?> required>
      <label for="dty">DTY</label></td></tr><tr></tr>
      <tr>
			<td><font face="mv boli" size="5" color="white">Ukuran </td>
 			<td><input type="text" name="ukuran" required placeholder="silahkan isi" class="isi" value="<?php echo $d['ukuran']; ?>"></td></tr><br><tr></tr>
      <tr>
  		<td><font face="mv boli" size="5" color="white">Warna</td>
  		<td><input type="text" name="warna" required placeholder="silahkan isi" class="isi" value="<?php echo $d['warna']; ?>"></td></tr><tr></tr>
      <tr>
  		<td><font face="mv boli" size="5" color="white">Customer</td>
  		<td><input type="text" name="customer" required placeholder="silahkan isi" class="isi" value="<?php echo $d['customer']; ?>"></td></tr><tr></tr>
      <tr>
      <td><font face="mv boli" size="5" color="white">Tanggal</td>
      <td><input type="date" name="tanggal" required placeholder="silahkan isi" class="isi" value="<?php echo $d['tanggal']; ?>"></td></tr><tr></tr>
  	  <tr>
      <td><font face="mv boli" size="5" color="white">Shift</td>
  		<td><select name="shift" required  class="isi" >
           <option value="">Silahkan Pilih</option>
           <option value="1"<?php if($d['shift'] =='1'){echo'selected';}?>>1</option>
           <option value="2"<?php if($d['shift'] =='2'){echo'selected';}?>>2</option>
           <option value="3"<?php if($d['shift'] =='3'){echo'selected';}?>>3</option>
           <option value="4"<?php if($d['shift'] =='4'){echo'selected';}?>>4</option>
       </select></td></tr><tr></tr>
       <tr>
       <td><font face="mv boli" size="5" color="white">Mesin</td>
       <td><select name="mesin" required class="isi">
           <option value="">Silahkan Pilih</option>
           <option value="1"<?php if($d['shift'] =='1'){echo'selected';}?>>1</option>
           <option value="2"<?php if($d['shift'] =='2'){echo'selected';}?>>2</option>
           <option value="3"<?php if($d['shift'] =='3'){echo'selected';}?>>3</option>
           <option value="4"<?php if($d['shift'] =='4'){echo'selected';}?>>4</option>
           <option value="5"<?php if($d['shift'] =='5'){echo'selected';}?>>5</option>
           <option value="6"<?php if($d['shift'] =='6'){echo'selected';}?>>6</option>
           <option value="7"<?php if($d['shift'] =='7'){echo'selected';}?>>7</option>
           <option value="8"<?php if($d['shift'] =='8'){echo'selected';}?>>8</option>
           <option value="9"<?php if($d['shift'] =='9'){echo'selected';}?>>9</option>
           <option value="10"<?php if($d['shift'] =='10'){echo'selected';}?>>10</option>
           <option value="11"<?php if($d['shift'] =='11'){echo'selected';}?>>11</option>
           <option value="12"<?php if($d['shift'] =='12'){echo'selected';}?>>12</option>
       </select></td></tr><tr></tr>
       <tr>
       <td><font face="mv boli" size="5" color="white">Kriteria Waste</td>
        <td><select name="kriteria_waste" required class="isi">
           <option value="">Silahkan Pilih</option>
           <option value="Cacat"<?php if($d['kriteria_waste'] =='Cacat'){echo'selected';}?>>Cacat</option>
           <option value="Double Cutting"<?php if($d['kriteria_waste'] =='Double Cutting'){echo'selected';}?>>
           Double Cutting</option>
           <option value="Jendul"<?php if($d['kriteria_waste'] =='Jendul'){echo'selected';}?>>
           Jendul</option>
           <option value="Jerawatan"<?php if($d['kriteria_waste'] =='Jerawatan'){echo'selected';}?>>
           Jerawatan</option>
           <option value="Kotor"<?php if($d['kriteria_waste'] =='Kotor'){echo'selected';}?>>
           Kotor</option>
           <option value="Merejel"<?php if($d['kriteria_waste'] =='Merejel'){echo'selected';}?>>
           Merejel</option>
           <option value="Ngareunteut"<?php if($d['kriteria_waste'] =='Ngareunteut'){echo'selected';}?>>
           Ngareunteut</option>
           <option value="Ngelupas"<?php if($d['kriteria_waste'] =='Ngelupas'){echo'selected';}?>>
           Ngelupas</option>
           <option value="Permukaan Tidak Rata"<?php if($d['kriteria_waste'] =='Permukaan Tidak Rata'){echo'selected';}?>>Permukaan Tidak Rata</option>
           <option value="Rebek"<?php if($d['kriteria_waste'] =='Rebek'){echo'selected';}?>>
           Rebek</option>
           <option value="Slot"<?php if($d['kriteria_waste'] =='Slot'){echo'selected';}?>>
           Slot</option>
           <option value="Notching"<?php if($d['kriteria_waste'] =='Notching'){echo'selected';}?>>
           Notching</option>
       </select></td></tr><br><tr></tr>
       <tr>
       <td><font face="mv boli" size="5" color="white">Jumlah </td>
       <td><input type="number" name="jumlah" required placeholder="silahkan isi" class="nomber" value="<?php echo $d['jumlah']; ?>"></td></tr>
       <tr>
       <td><font face="mv boli" size="5" color="white">Keterangan</td>
       <td><select name="keterangan" required class="isi" value="<?php echo $d['keterangan']; ?>">
           <option value="">Silahkan Pilih</option>
           <option value="Cacat Dari Winding"<?php if($d['keterangan'] =='Cacat Dari Winding'){echo'selected';}?>>
           Cacat Dari Winding</option>
           <option  value="Cacat Dari Finishing"<?php if($d['keterangan'] =='Cacat Dari Finishing'){echo'selected';}?>>Cacat Dari Finishing</option>
           <option value="Cacat Dari Pengering"<?php if($d['keterangan'] =='Cacat Dari Pengering'){echo'selected';}?>>Cacat Dari Pengering</option>
           <option value="Double Cutting"<?php if($d['keterangan'] =='Double Cutting'){echo'selected';}?>>
           Double Cutting</option>
           <option value="Long Tube Pendek"<?php if($d['keterangan'] =='Long Tube Pendek'){echo'selected';}?>>
           Long Tube Pendek</option>
           <option value="Sambungan"<?php if($d['keterangan'] =='Sambungan'){echo'selected';}?>>
           Sambungan</option>
           <option value="Ply Numpuk"<?php if($d['keterangan'] =='Ply Numpuk'){echo'selected';}?>>
           Ply Numpuk</option>
           <option value="Overlap Numpuk"<?php if($d['keterangan'] =='Overlap Numpuk'){echo'selected';}?>>
           Overlap Numpuk</option>
           <option value="Jerawatan"<?php if($d['keterangan'] =='Jerawatan'){echo'selected';}?>>
           Jerawatan</option>
           <option value="Oli"<?php if($d['keterangan'] =='Oli'){echo'selected';}?>>
           Oli</option>
           <option value="Debu"<?php if($d['keterangan'] =='Debu'){echo'selected';}?>>
           Debu</option>
           <option value="Minyak"<?php if($d['keterangan'] =='Minyak'){echo'selected';}?>>
           Minyak</option>
           <option value="Printing"<?php if($d['keterangan'] =='Printing'){echo'selected';}?>>
           Printing</option>
           <option value="Merejel"<?php if($d['keterangan'] =='Merejel'){echo'selected';}?>>
           Merejel</option>
           <option value="Ply Dalam Bergelembung"<?php if($d['keterangan'] =='Ply Dalam Bergelembung'){echo'selected';}?>>Ply Dalam Bergelembung</option>
           <option value="Ngareunteut"<?php if($d['keterangan'] =='Ngareunteut'){echo'selected';}?>>
           Ngareunteut</option>
           <option value="Ngelupas"<?php if($d['keterangan'] =='Ngelupas'){echo'selected';}?>>
           Ngelupas</option>
           <option value="Ply Tidak Nempel"<?php if($d['keterangan'] =='Ply Tidak Nempel'){echo'selected';}?>>
           Ply Tidak Nempel</option>
           <option value="Kertas Keriput"<?php if($d['keterangan'] =='Kertas Keriput'){echo'selected';}?>>
           Kertas Keriput</option>
           <option value="Kertas Melipat"<?php if($d['keterangan'] =='Kertas Melipat'){echo'selected';}?>>
           Kertas Melipat</option>
           <option value="Renggang"<?php if($d['keterangan'] =='Renggang'){echo'selected';}?>>
           Renggang</option>
           <option value="Rebek"<?php if($d['keterangan'] =='Rebek'){echo'selected';}?>>
           Rebek</option>
           <option value="Slot Pisau Error"<?php if($d['keterangan'] =='Slot Pisau Error'){echo'selected';}?>>Slot Pisau Error</option>
           <option value="Notching Error"<?php if($d['keterangan'] =='Notching Error'){echo'selected';}?>>Notching Error</option>
           <option value="Sobek"<?php if($d['keterangan'] =='Sobek'){echo'selected';}?>>
           Sobek</option>
       </select></td></tr><tr></tr>
       <tr>
       <td><font face="mv boli" size="5" color="white">Total Produksi</td>
       <td><input type="number" name="total_produksi" required placeholder="silahkan isi" class="nomber" value="<?php echo $d['total_produksi']; ?>"></td></tr><br><tr></tr>
       <tr></tr>
       <br> 
       <?php
     }
       ?>
</table>

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
    background-color: orange;
    height: 40px;
    width: 150px;
    border:solid 3px white;
    border-radius: 20px;
    float:center;
  }
  </style>
</html>
