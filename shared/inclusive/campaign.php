
<!--header-->
	<div class="header">
	<div class="header-top">
		<div class="container">
				<div class="top-nav">
					<span class="menu"><img src="../../../shared/images/menu.png" alt=""> </span>
					<ul>
						<li><a href="ballina.php">Home</a><span>/</span></li>
						<li><a href="categories.php">Categories</a><span>/</span></li>
						<li class="active"><a href="start_a_campaign.php">Start a Campaign</a><span>/</span></li>
						<li><a href="about.php">About</a><span>/</span></li>
						<li><a href="faq.php">FAQ</a><span>/</span></li>
						<li><a href="contact.php">Contact Us</a><span>/</span></li>
						<li><a href="profile.php"><b>Your Profile</b></a></li>
						<li style="float:right;"><b style="color:white;"><em><a href="#">Welcome, <?php
							if(!isset($_COOKIE[$cookie_name2])) {
								header("refresh:2, url=ballina.php");
							}
							else {
								echo $cookie_value2;
							}
							?>!</a></em></li>
						<li style="float:right;"><p><a href="Logout.php"><b>Log Out</em></a></b></li>
					</ul>
					<!--script-->
				</div>
			</div>
		</div>
		<div class="header-bottom">
			<div class="container">
				<div class="logo">
					<h1><a href="index.html"><?php include("../../../shared/config.php"); $uid=$_GET['uid'];mysqli_next_result($conn); $text1=mysqli_query($conn,"CALL selectCampaignTitle($uid)");$text=mysqli_fetch_array($text1); echo $text['campaign_title'];?></a></h1>
					<p>Content</p>
				</div>
			</div>
		<div>
			<div style="float:left;width:20%;margin-left:1%;"><?php include("../../../shared/config.php"); $uid=$_GET['uid'];mysqli_next_result($conn); $tmp=mysqli_query($conn,"CALL selectUserIDByPost($uid)"); $userid=mysqli_fetch_array($tmp); $iduser=$userid['uid'];mysqli_next_result($conn);
			$sql=mysqli_query($conn,"CALL selectPicName_Name_LastName($iduser)");
			$user=mysqli_fetch_array($sql); echo '<img src="../../../shared/images/'.$user['picture_name'].'" style="width:300px;height:300px;"><p style="color:black;">By '.$user['u_firstname'] .' '.$user['u_lastname'].'</p>'?></div>
			<div style="float:right;width:75%;margin-right:1%;margin-bottom:5%;"><?php include("../../../shared/config.php"); $uid=$_GET['uid'];mysqli_next_result($conn); $sql=mysqli_query($conn,"CALL selectPostDate_Content_File($uid)"); $post=mysqli_fetch_array($sql); echo '<h3 style="color:black;">Post date: '.$post['post_date'].'</h3><img src="../../../shared/uploads/'.$post['File'].'" style="max-width:600px;"><br><br><p style="color:black;">'.$post['post_content'].'</p>'?>
			<br><br><br>
			<!--- Following form was taken from www.developer.paypal.com --->
			<form action="https://www.paypal.com/cgi-bin/webscr" method="post">
    <!-- Identify your business so that you can collect the payments. -->
    <input type="hidden" name="business"
        value="donations@kcparkfriends.org">

    <!-- Specify a Donate button. -->
    <input type="hidden" name="cmd" value="_donations">

    <!-- Specify details about the contribution -->
    <input type="hidden" name="item_name" value="Friends of the Park">
    <input type="hidden" name="item_number" value="Fall Cleanup Campaign">
    <input type="hidden" name="currency_code" value="USD">

    <!-- Display the payment button. -->
    <input type="image" name="submit"
    src="https://www.paypalobjects.com/webstatic/en_US/i/btn/png/btn_donate_92x26.png"
    alt="Donate">
    <img alt="" width="1" height="1"
    src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" >

</form>
			</div>
		</div>

		</div>

<!---->

	</div>
