<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<body>
<?php
include('../../../shared/config.php');
if (session_status() == PHP_SESSION_NONE) {
    session_start();
$cookie_name="user";
$cookie_value=$_SESSION['email'];
setcookie($cookie_name, $cookie_value, time()+ (86400 * 30),  "/");
mysqli_next_result($conn);
$ses_sql=mysqli_query($conn,"CALL ProcedureForCheckPhPFile('$cookie_value')");
mysqli_next_result($conn);
$row=mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
$cookie_name2="user2";
$cookie_value2=$row['u_firstname'];
setcookie($cookie_name2,$cookie_value2,time()+ (86400 * 30),  "/");
$user_id=$row['uid'];
}
if(!isset($cookie_value2))
{
	header("Location: index.php");
}
?>

</body>
</html>
