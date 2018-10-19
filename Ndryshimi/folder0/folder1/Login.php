<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<body>
<?php
session_start();
include("../../../shared/config.php");
$error = "";
if(isset($_POST["submit"]))
{
	if(empty($_POST["email"]) || empty($_POST["password"]))
	{
		$_SESSION['error']="Ju lutem plotesoni te dy fushat!";
	}
	else
	{
		$email=$_POST['email'];
		$password=$_POST['password'];
		$email=mysqli_real_escape_string($conn,$email);
		$password=mysqli_real_escape_string($conn,$password);
		//Check username and password from database
		mysqli_next_result($conn);
		$sql="CALL SelectUIDLogIn('$email','$password')";
		mysqli_next_result($conn);
		$result=mysqli_query($conn,$sql);
		$row=mysqli_fetch_array($result,MYSQLI_ASSOC);
		if(mysqli_num_rows($result) == 1)
		{
			$_SESSION['email'] = $email;
			header("location: ballina.php");
		}else
		{
			$_SESSION['error']="Email ose fjalekalimi i gabuar!";
		}
	}
}
?>
</body>
</html>
