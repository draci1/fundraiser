<?php
//including  the database connection file
include_once("../../../shared/config.php");

//fetching data is descending order (lastest entry first)
$result=mysqli_query($conn,"SELECT * FROM users ORDER BY uid DESC");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Homepage</title>
</head>
<body>
<a href="signup.html">Add New Data</a><br />
<br />
<form action="" method="post">Search username or email: <input type="text" name="term"  />
<input type="submit" value="Search"  />
</form>
<table width="80%" border=0>

<tr bgcolor='#CCCCCC'>
<td>First Name</td>
<td>Last Name</td>
<td>Password</td>
<td>Birthday</td>
<td>Gender</td>
<td>Email</td>
<td>Update</td>
</tr>
<?php
if(!empty($_REQUEST['term'])){
	$term=mysqli_real_escape_string($conn,$_REQUEST['term']);
	$sql=mysqli_query($conn,"SELECT * FROM users WHERE u_firstname LIKE '%".$term."%' OR u_email LIKE '%".$term."%'");
	while($row = mysqli_fetch_array($sql)) {
		echo "<tr>";
		echo "<td>".$row['u_firstname']."</td>";
		echo "<td>".$row['u_lastname']."</td>";
		echo "<td>".$row['u_password']."</td>";
		echo "<td>".$row['u_birthday']."</td>";
		echo "<td>".$row['u_gender']."</td>";
		echo "<td>".$row['u_email']."</td>";
		echo "<td><a href=\"edit.php?uid=$row[uid]\">
		Edit</a> | <a href=\"delete.php?uid=$row[uid]\" onClick=\"return confirm ('Are you sure you want to delete?')\">Delete</a></td>";
	}
}
?>
	
</body>
</html>