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
		<a href="home.php" class="klik">home |</a>
		<a href="inputdata.php" class="klik">Input Data |</a>
		<a href="dataPOY.php" class="klik">Data POY |</a>
		<a href="dataDTY.php" class="klik">Data DTY</a></font></center>
	</div>
	<center>
	</center><div class="content">
	<div id="content"><center>
		<font face="mv boli" size="5" color="orange"><br>
		Oke, data telah berhasil ditambahkan, silahkan cek!!
		<br>
		<a href="inputdata.php" class="oke">Oke</a>
	</div></center></font></div></center>
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
	#content{
		background-color: transparent;
		width:500px;
		height:180px;
		border:dotted 5px #FF8C00;
		border-radius: 10px;
		margin: 100px 400px;
		float:left;
	}
	.content{
		background:url('image/berhasil.jpg');
		width:100%;
		height:440px;

	}
	.footer{
		background-color: orange;
		width: 100%;
		height: 30px;
	}
	.oke{
		background-color: orange;
		width:60px;
		height: 40px;
		border-radius: 10px;
	}

</style>
</html>