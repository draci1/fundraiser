<?php
include_once("../../../shared/config.php");
	$uid=mysqli_real_escape_string($conn,$_POST['uid']);
	$filename= basename($_FILES['image']['name']);
	$uploaddir = '../../../shared/images/';
	$uploadfile = $uploaddir . $filename;
	$imgData =addslashes(file_get_contents($_FILES['image']['tmp_name']));
	$sql = "UPDATE users SET picture_name='$filename',u_picture='$imgData' WHERE uid=$uid;";
	$result=mysqli_query($conn,$sql);
if (!(move_uploaded_file($_FILES['image']['tmp_name'], $uploadfile))) {
   echo "Upload failed. Please Contact the administrator!";
}
else{
	header("Location: users_modify.php");
}
?>
