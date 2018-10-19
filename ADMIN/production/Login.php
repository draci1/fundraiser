<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<body>
<?php
session_start();
include("config.php");
$error = "";
if(isset($_POST["submit"]))
{
	if(empty($_POST["username"]) || empty($_POST["password"]))
	{
		$error="Both fields are required.";
	}
	else
	{
		$username=$_POST['username'];
		$password=$_POST['password'];
		//Check username and password from database
		mysqli_next_result($conn);
		$sql="CALL getModID($username,$password)";
		$result=mysqli_query($conn,$sql);
		$row=mysqli_fetch_array($result,MYSQLI_ASSOC);
		if(mysqli_num_rows($result) == 1)
		{
			$_SESSION['username'] = $username; 
			header("location: ../production/index.php");
		}else
		{
			$error="Incorrect username or password.";
		}
	}
}
?>
</body>
</html>