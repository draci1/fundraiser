
<!--header-->
	<div class="header">
	<div class="header-top">
		<div class="container">
				<div class="top-nav">
					<span class="menu"><img src="../../../shared/images/menu.png" alt=""> </span>
					<ul>
						<li><a href="ballina.php">Home</a><span>/</span></li>
						<li class="active"><a href="categories.php">Categories</a><span>/</span></li>
						<li><a href="start_a_campaign.php">Start a Campaign</a><span>/</span></li>
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
				<script>
					$("span.menu").click(function(){
						$(".top-nav ul").slideToggle(500, function(){
						});
					});
			</script>
				</div>
			</div>
		</div>
		<div class="header-bottom">
			<div class="container">
				<div class="logo">
					<h1><a href="index.html">Categories</a></h1>
					<p>Categories of funding projects</p>
				</div>
			</div>
		</div>
	</div>


	  	  <!---->
<br><br>
<h3 style="color:#A7A6A6;text-align:center;">All Posts</h3>
<section class="center slider" style="width:85%;margin-left:5%;margin-right:5%;margin-top:1%;margin-bottom:1%;">
	<?php
	mysqli_next_result($conn);
	$sql2=mysqli_query($conn,"CALL selectAllPosts();");
	while($row=mysqli_fetch_array($sql2)){
		$temp=$row['uid'];
		if(empty($imgname)){$imgname='default-user.gif';}
		$campaigntitle=$row['campaign_title'];
		mysqli_next_result($conn);
		$sql3=mysqli_query($conn,"CALL selectPictureName($temp)");
		$img=mysqli_fetch_array($sql3);
		$imgname=$img['picture_name'];
		echo "<div style='width:300px;max-width:300px;height:auto;text-align:center;'><a href=\"campaign.php?uid=$row[id_post]\"><img style='width:100%;height:auto;' src='../../../shared/images/$imgname'><br><p style='color:black;'>$campaigntitle</p></a></div>";
	}
	?>

<!---<br><br><hr><br><br>
  <h3 style="color:#A7A6A6;text-align:center;">Education assistance</h3>
<section class="center slider" style="width:85%;margin-left:5%;margin-right:5%;margin-top:1%;margin-bottom:1%;">
    <div>
      <img src="../../../shared/images/ab.jpg">
    </div>
    <div>
      <img src="../../../shared/images/ab1.jpg">
    </div>
    <div>
      <img src="../../../shared/images/ab.jpg">
    </div>
    <div>
      <img src="../../../shared/images/ab1.jpg">
    </div>
    <div>
      <img src="../../../shared/images/ab.jpg">
    </div>
    <div>
      <img src="../../../shared/images/ab1.jpg">
    </div>
    <div>
      <img src="../../../shared/images/ab.jpg">
    </div>
    <div>
      <img src="../../../shared/images/ab1.jpg">
    </div>
    <div>
      <img src="../../../shared/images/ab.jpg">
    </div>
  </section>
  <br><br><br>
  <h3 style="color:#A7A6A6;text-align:center;">Education assistance</h3>
<section class="center slider" style="width:85%;margin-left:5%;margin-right:5%;margin-top:1%;margin-bottom:1%;">
    <div>
      <img src="../../../shared/images/ab.jpg">
    </div>
    <div>
      <img src="../../../shared/images/ab1.jpg">
    </div>
    <div>
      <img src="../../../shared/images/ab.jpg">
    </div>
    <div>
      <img src="../../../shared/images/ab1.jpg">
    </div>
    <div>
      <img src="../../../shared/images/ab.jpg">
    </div>
    <div>
      <img src="../../../shared/images/ab1.jpg">
    </div>
    <div>
      <img src="../../../shared/images/ab.jpg">
    </div>
    <div>
      <img src="../../../shared/images/ab1.jpg">
    </div>
    <div>
      <img src="../../../shared/images/ab.jpg">
    </div>--->
  </section>
<div class="footer">
	<div class="footer-mid">
			<div class="container">

				<div class="col-md-3 grid1">
					<h3>Contacts</h3>
					<p>Contrary to popular</p>
					<p>perspiciatis</p>
					<p>+10 999 333 52</p>
				</div>
				<div class="col-md-6 grid1">
					<h3>Newsletter</h3>
					<form>
						<input type="text" value="" onfocus="this.value='';" onblur="if (this.value == '') {this.value ='';}">
						<input type="submit" value="SUBSCRIBE">
					</form>
				</div>
				<div class="col-md-3 grid2">
				<h3>Follow Us</h3>
					<ul class="social-in">
						<li><a href="#"><i> </i></a></li>
						<li><a href="#"><i class="twitter"> </i></a></li>
						<li><a href="#"><i class="linked"> </i></a></li>
						<li><a href="#"><i class="rss"> </i></a></li>
						<li><a href="#"><i class="pin"> </i></a></li>
				</ul>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
