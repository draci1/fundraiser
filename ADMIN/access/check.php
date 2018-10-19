<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<body>
<?php
include('config.php');
if (session_status() == PHP_SESSION_NONE) {
    session_start();
$user_check=$_SESSION['username'];
mysqli_next_result($conn);
$ses_sql=mysqli_query($conn,"CALL selectNameMod('$user_check')");
mysqli_next_result($conn);
$row=mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
$login_user=$row['m_name'];
}
$user_id=25;

if(!isset($user_check))
{
	header("Location: ../production/index.php");
}

?>
</body>
</html>
