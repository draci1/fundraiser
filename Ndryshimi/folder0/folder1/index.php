<?php
include('login.php');
?>
<!DOCTYPE html>
<html>
<head>
    <link type="text/css" rel="stylesheet" href="index2.css" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log In</title>
</head>
<body>
    <div class="container">
        <img src="../../../shared//images/fundraiser.jpg" />
        <section>
          <?php
            if(isset($_SESSION['error']))
            {
              echo '<div style="text-align:center;"><b style="color:red;">Error: '. $_SESSION['error'].'</b></div>';
              unset($_SESSION['error']);
            }
          ?>
            <div class="double-border">
                <h1 style="font-size:40px;font-weight:lighter;font-family:SimSun;opacity:1;">Sign <span style="color:deeppink;">In</span></h1>
				<form method="post" action="">
                <input placeholder="E-mail" style="margin-bottom:5%;width:90%;border-radius:10px;border:none;" name="email"><br /><br />
                <input type="password" placeholder="Password" style="margin-bottom:7.5%;width:90%;border-radius:10px;border:none;" name="password"/><br />
                <input type="submit" name="submit" value="Log in"><br />
				</form>
                <div style="margin-bottom:5%; width:250px;"><a href="#" style="text-decoration:none;opacity:1;"><p id="bonus" style="border-right:solid black;">Forgot Password? </p></a><a href="signup.html" style="text-decoration:none;"><p id="bonus" style="margin-left:2%;">Sign up!</p></a></div>
            </div>
        </section>
        <footer><h1 style="color:gold;text-align:center;font-family:'Times New Roman';font-weight:lighter;">&copy; Fundraiser Copyright 2017</h1></footer>
    </div>
</body>
</html>
