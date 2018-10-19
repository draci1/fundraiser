<?php
include("config.php");

$uid=$_GET['uid'];
$result=mysqli_query($conn,"CALL deleteUsers($uid)");
header("Location:admin.php");
?>