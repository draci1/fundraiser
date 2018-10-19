<?php
include_once("../../../shared/config.php");
if(isset($_POST['update'])){
	$uid=$_POST['uid'];
	$firstname=$_POST['firstname'];
	$lastname=$_POST['lastname'];
	$birthday=$_POST['birthday']; //ndryshoja formatin
	$gender=$_POST['gender']; 
	$email=$_POST['email'];
	$password=$_POST['password'];
	//password do te kete formen e vet, email nuk mundet me u ndryshu (mundesoje nese tepron kohe)
	if(empty($firstname) || empty($lastname) || empty($birthday) || empty($gender) || empty($email) || empty($password)){
		if(empty($firstname)){
			echo"<font color='red'>Fusha e emrit eshte e zbrazet.</font><br/>";
		}
		if(empty($lastname)){
			echo"<font color='red'>Fusha e mbiemrit eshte e zbrazet.</font><br/>";
		}
		if(empty($birthday)){
			echo"<font color='red'>Fusha e ditelindjes eshte e zbrazet.</font><br/>";
		}
		if(empty($gender)){
			echo"<font color='red'>Fusha e gjinise eshte e zbrazet.</font><br/>";
		}
		if(empty($email)){
			echo"<font color='red'>Fusha e e-mailit eshte $email.</font><br/>";
		}
		if(empty($password)){
			echo"<font color='red'>Fusha e fjalekalimit eshte e zbrazet.</font><br/>";
		}
	}
	else{
		$result=mysqli_query($conn,"CALL updateUserInfo($uid,$firstname,$lastname,$birthday,$gender,$email,$password");
		header ("Location: admin.php");
	}
}
?>
<?php
$uid=$_GET['uid'];
$result=mysqli_query($conn,"CALL selectUserByID($uid)");
while($res=mysqli_fetch_array($result)){
	$firstname=$res['u_firstname'];
	$lastname=$res['u_lastname'];
	$birthday=$res['u_birthday'];
	$gender=$res['u_gender'];
	$email=$res['u_email'];
	$password=$res['u_password'];
}
?>
<html>
<header><title>Edit Data</title></header>
<body>
<a href="admin.php">Home</a><br>
<br>
<form name="form1" method="post" action="edit.php">
<table border="0">
	<tr>
		<td>Emri</td>
        <td><input type="text" name="firstname" value='<?php echo $firstname;?>'></td>
    </tr>
	<tr>
		<td>Mbiemri</td>
        <td><input type="text" name="lastname" value='<?php echo $lastname;?>'></td>
    </tr>
    <tr>
		<td>Ditelindja</td>
        <td><input name="birthday" type="text" onFocus="(this.type='date')" value='<?php echo $birthday;?>'></td>
    </tr>
    <tr>
		<td>Gjinia</td>
        <td><select name="gender"><option name="gender" value="$u_gender" selected disabled><?php echo $gender;?></option><option name="gender" value="1">Male</option><option name"gender" value="2">Female</option><option name="gender" value="3">Other</option></td>
    </tr>
    <tr>
		<td>E-mail</td>
        <td><input type="text" name="email" value='<?php echo $email;?>'></td>
    </tr>
    <tr>
    	<td>Fjalekalimit</td>
    	<td><input type="password" name="password" value='<?php echo $password;?>'></td>
    <tr>
    	<td><input type="hidden" name="uid" value='<?php echo $_GET['uid'];?>'></td>
        <td><input type="submit" name="update" value="Update" /></td>
     </tr>
</table>
</form>
</body>
</html> 
