<?php
include_once("../../../shared/config.php");
	$uid=$_POST['uid'];
	$filename= basename($_FILES['image']['name']);
	$uploaddir = '../../../shared/images/';
	$uploadfile = $uploaddir . $filename;
	$imgData =addslashes(file_get_contents($_FILES['image']['tmp_name']));
	$sql = "UPDATE users SET picture_name='$filename',u_picture='$imgData' WHERE uid=$uid;";
	mysqli_next_result($conn);
	$result=mysqli_query($conn,$sql);
	mysqli_next_result($conn);
if (!(move_uploaded_file($_FILES['image']['tmp_name'], $uploadfile))) {
   echo "Upload failed. Please Contact the administrator!";
}
else{
	header("Location: profile.php");
}
?>
