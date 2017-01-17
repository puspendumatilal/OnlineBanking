<html>
<head>
<title>registration HTML</title>
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
	background-image:url(image/bgreg.JPG);
	float:left;
	}
	</style>
	<script type="text/JavaScript">
			function validation()
			{
			
			var RE_PASS = /^(\w)+$/;
			var RE_FNAME = /^(\w)+$/;
			var RE_LNAME = /^(\w)+$/;
			var RE_ADDRESS = /^(\w)+$/;
			var RE_CONTACTNO = /^\d{10,11}$/;
			var RE_EMAIL = /^(\w+[\-\.])*\w+@(\w+\.)+[A-Za-z]+$/;
				
			var name1=document.getElementById("fname").value;
				if(name1=="")
				{
					alert("first name cannot be blank");
					return false;
				}
				if (!RE_FNAME.test(name1)) 
				  {
				   alert("enter name properly");
					return false;
				
				  }
				  
			var name2=document.getElementById("lname").value;
				if(name2=="")
				{
					alert("last name cannot be blank");
					return false;
				}
				if (!RE_LNAME.test(name2)) 
				  {
				   alert("enter poper last name");
					return false;
				
				  }	
				  
			var em=document.getElementById("mailid").value;
				if(em=="")
				{
					alert("email cannot be blank");
					return false;
				}
				if (!RE_EMAIL.test(em)) 
				  {
				   alert("enter a valid mail id");
					return false;
				
				  }
				  
			var mno=document.getElementById("mob").value;
				if(mno=="")
				{
					alert("mobile number cannot be blank");
					return false;
				}
				if (!RE_CONTACTNO.test(mno)) 
				  {
				   alert("enter valid mobile number");
					return false;
				
				  }
			
			
			var ad=f2.address.value;
				if(ad=="")
				{
					alert("enter proper address");
					return false;
				}
				/*if (!RE_ADDRESS.test(ad)) 
				  {
				   alert("enter valid address");
					return false;
				
				  }*/
			var pw=document.getElementById("pwd").value;
				if(pw=="")
				{
					alert("password cannot be blank");
					return false;
				}
				if (!RE_PASS.test(pw)) 
				  {
				   alert("password has to be alphanumeric");
					return false;
				
				  }
												
			}
		</script>	  
</head>

<body>
	<div id="wrapper">
	
	<div id="content">
	<form name="f2" action="insert.php" onSubmit="return validation()" method="post" enctype="multipart/form-data">
	
	<table>
		<tr>
			<td><font color="white">
				first name</font>
			</td>
			<td>
				<input type="text" name="fname" id="fname">
			</td>
			
		</tr>
		<tr>
			<td><font color="white">
				last name</font>
			</td>
			<td>
				<input type="text" name="lname" id="lname">
			</td>
		</tr>
		<tr>
			<td><font color="white">
				email id</font>
			</td>
			<td>
				<input type="text" name="mailid" id="mailid" >
			</td>
		</tr>
		<tr>
			<td><font color="white">
				mobile no</font>
			</td>
			<td>
				<input type="text" name="mob" id="mob" >
			</td>
		</tr>
		<tr>
			<td><font color="white">
				address</font>
			</td>
			<td>
				<textarea rows="10" cols="40" name="address" id="address">
				</textarea>
			</td>
			
		</tr>
		<tr>
			<td><font color="white">
				services required</font>
			</td>
			<td>
				<input type="checkbox" name="service" value="atm" > <font color="white">atm</font>
				<input type="checkbox" name="service" value="payment" > <font color="white">payment</font>
				<input type="checkbox" name="service" value="loan" > <font color="white">loan</font>
				
			</td>
		</tr>
		<tr>
			<td><font color="white">
				gender</font>
			</td>
			<td>
				<input type="radio" name="gender" value="male"><font color="white"> male</font>
				<input type="radio" name="gender" value="female"><font color="white"> female</font>
			</td>
		</tr>
		<tr>
			<td><font color="white">
				last qualification</font>
			</td>
			<td>
				<select name="lastq" id="lastq">
				<option value="0">select</option>
				<option value="1">BCA</option>
				<option value="2">MCA</option>
				<option value="3">BE/BTECH</option>
				<option value="4">ME/MTECH</option>
				<option value="5">BSC</option>
				<option value="6">MSC</option>
				</select><br>
			</td>
		</tr>
		<tr>
		<td><font color="white">
		Select image to upload</font>
		</td>
		<td>
			<input type="file" name="file" id="file">
		</td>
		</tr>
		<tr>
			<td><font color="white">
				enter password</font>
			</td>
			<td>
				<input type="password" name="pwd" id="pwd">
			</td>
		</tr>
		
		<tr>
			<td>
			<input type="image" src="image\reg.PNG" height="100px" width="100px" >
			</td>
			
			<td><a href="home.php">
			<img src="image\can.PNG" height="50px" width="200px" /> </a>
			</td>
		</tr>
	</table>	
	</form>
	</div>
	</div>
</body>
</html>