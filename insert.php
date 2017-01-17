<?php
	include('include/connection.php');
	
	$fname=$_POST['fname'];		//all [] contents are name not id,,id is used for javascript validation
	$lname=$_POST['lname'];
	$mailid=$_POST['mailid'];
	$mob=$_POST['mob'];
	$address=$_POST['address'];
	$service=$_POST['service'];
	$gender=$_POST['gender'];
	$lastq=$_POST['lastq'];
	$pwd=$_POST['pwd'];
	
	
	
	//code for image
	$allowedExts=array("jpg","jpeg","gif");
	$temp=explode(".",$_FILES["file"]["name"]);
	$extention=end($temp);
	if(($_FILES["file"]["size"]<2000000000)&& in_array($extention,$allowedExts))
	{
		if($_FILES["file"]["error"]>0)
		{
			echo "return code:".$_FILES["file"]["error"]."<br>";
		}
		else
		{
		/*	echo"upload:".$_FILES["file"]["name"]."<br>";
			echo"Type:".$_FILES["file"]["type"]."<br>";
			echo"size:".($_FILES["file"]["size"]/1024)."kB<br>";
			echo"TempFile:".$_FILES["file"]["tmp_name"]."<br>";*/
			if(file_exists("upload/".$_FILES["file"]["name"]))
			{
				echo $_FILES["file"]["name"]."already exist";
			}
			else
			{
				move_uploaded_file($_FILES["file"]["tmp_name"],"upload/".$_FILES["file"]["name"]);
				//echo "stored in:"."upload/".$_FILES["file"]["name"];
				$img="upload/".$_FILES["file"]["name"];
			}
		}
	}
	else
	{
		echo "invalid file";
	}
	
		$sql="INSERT INTO user_reg
		(
			fname,
			lname,
			mailid,
			mobno,
			address,
			service,
			gender,
			last_qual,
			image,
			paswd
		)
		values('$fname','$lname','$mailid','$mob','$address','$service','$gender','$lastq','$img','$pwd')";
		
	$result=mysql_query($sql);
	if($result)
	{
	include("thank.php");
	}
	else
	{
	echo die(mysql_error());
	}
?>
