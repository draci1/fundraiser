<html>
<head>
<title>Add Data</title>
</head>

<body>
<?php
include_once("../../../shared/config.php");
foreach($_POST as $clear => $value){
	$clear=mysqli_real_escape_string($conn,$clear);
}
if (isset($_POST['submit'])) {
  $firstname = mysqli_real_escape_string($conn,$_POST['firstname']);
  $lastname = mysqli_real_escape_string($conn,$_POST['lastname']);
  $birthday=mysqli_real_escape_string($conn,$_POST['birthday']);
  $gender=mysqli_real_escape_string($conn,$_POST['gender']);
  $email = mysqli_real_escape_string($conn,$_POST['email']);
  $password = mysqli_real_escape_string($conn,$_POST['password']);

  if(empty($firstname) || empty($lastname) || empty($birthday) || empty($gender) || empty($email) || empty($password)) {
  if(empty($firstname)) {
  echo "<font color='red'>First name field is empty.</font><br/>";
  }
  if(empty($lastname)) {
  echo "<font color='red'>Last name field is empty.</font><br/>";
  }
  if(empty($birthday)) {
  echo "<font color='red'>Date of birth field is empty.</font><br/>";
  }
  if(empty($gender)) {
  echo "<font color='red'>Gender field is empty.</font><br/>";
  }
  if(empty($email)) {
  echo "<font color='red'>E-mail field is empty.</font><br/>";
  }
  if(empty($password)) {
  echo "<font color='red'>Password field is empty.</font><br/>";
  }
  echo "<br/><a href='javascript:self.history.back();'>Go
  Back</a>";
  }
  else if(!preg_match("/^[a-zA-Z ]*$/",$firstname) || !preg_match("/^[a-zA-Z ]*$/",$lastname) || !filter_var($email, FILTER_VALIDATE_EMAIL)){
		    if (!preg_match("/^[a-zA-Z ]*$/",$firstname)) {
  			echo "<font color='red'>Name can only contain letters.</font><br/>";
			}
  			if (!preg_match("/^[a-zA-Z ]*$/",$lastname)) {
  			echo "<font color='red'>Last name can only contain letters.</font><br/>";
			}
				if (!filter_var($email, FILTER_VALIDATE_EMAIL) || checkdnsrr($mailDomain, "MX")) {
			  echo "<font color='red'>Please enter a valid e-mail.</font><br/>";
			}
			  echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
	  }
	else{
    $email_verified=0;
	  $result = mysqli_query($conn,"CALL insertUsers('$firstname','$lastname','$birthday','$gender','$email','$password',$email_verified)");

    if($result){echo "You have signed up successfully!"; header("Refresh:2; url=index.php");}
    else{echo "Something went wrong. If the issue persists, please contact the administrator.";}

		}
	}




  ?>
  </body>
  </html>
