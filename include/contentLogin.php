<html>
<head>
	<style type="text/css">
	#wrapper
	{
	height:500px;
	width:1050px;
	}
	#content
	{
	height:500px;
	width:1050px;
	background-image:url(image/bglogin.JPG);
	float:left;
	}
	.apply
	{
		padding-top:150px;
		padding-left:150px;
	}
</style>
</head>
<body>
	<div id="wrapper">
		<div id="content">
		<form name="f1" action="user.php" method="post">
	<div class="apply">
	<table>
		<tr><td><font size="4" style="font-family:Batang"><b><font color="white">email id</font></b></font></td>
			<td><input type="text" name="uid" id="uid"></td>
		</tr>
		<tr><td><font size="4" style="font-family:Batang"><b><font color="white">password</font></b></font></td>
			<td><input type="password" name="pwd" id="pwd" ></td>
		</tr>
		<tr>
			<td>
			<input type="image" src="image\lb.JPG" height="25px" width="100px" />
			</td>
			<td><a href="home.php">
			<img src="image\can.PNG" height="25px" width="100px" /> </a>
			</td>
		</tr>
		<tr>
			<td>
			</td>
			<td>
				<font color="yellow">new user ?</font> <a href="register.php"><b>sign up</b></a>
			</td>
		</tr>
	</table>	
	</div>
	</form>
		</div>
	</div>
</body>
</html>