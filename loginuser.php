<html>
<head>
</head>
<body bgcolor="orange">
	<br><br><br><br><br>
	<center>
		<font face="mv boli" size="5" color="white">
		<b>LOGIN USER QUALITY CONTROL</b><br><br></font>
	<div class="login">
		
      <form method="POST" action="loginprosesuser.php">
      	<input type="hidden" name="id"><br>
      	<font face="kristen itc" size="3" color="orange">
			&nbsp;&nbsp;&nbsp;&nbsp;User Name:<br>
 			 <center><input type="text" name="username" class="text" required><br></center>
 			 <font face="comic sans ms" size="2" color="red">
 			 <br>
 			<font face="kristen itc" size="3" color="orange">
 			&nbsp;&nbsp;&nbsp;&nbsp;Password:<br>
 			 <center><input type="password" name="password" class="text" required><br></center>
 			 <font face="comic sans ms" size="2" color="red">
 			 <br><br>
 				<center>
 			 <input type="submit" value="Login" class="submit" onclick="javascript:return confirm('Apakah anda yakin akan login?')"><br>
 			  <br></center>
 			</form></div></center>
</body>
<style>
	.login{
		position: center;
		background-color:white;
		text-align: left;
		background-position: center;
		width:400px;
		height:280px;
		border:2px solid white;
		border-radius: 15px;
	}
	.text{
		background-color:white;
		width:360px;
		height:40px;
		background-position: center;
		border:2px solid gray;
		border-radius: 15px;
	}
	.submit{
		width:360px;
		height:40px;
		font-family:kristen itc;
		font-size: 20px;
		background-color:orange;
		border:2px solid orange;
		border-radius:10px;

	}
</style>
</html>
