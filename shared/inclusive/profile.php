	<div class="header">
	<div class="header-top">
		<div class="container">	
				<div class="top-nav">
					<span class="menu"><img src="../../../shared/images/menu.png" alt=""> </span>
					<ul>
						<li><a href="ballina.php">Home</a><span>/</span></li>
						<li><a href="categories.php">Categories</a><span>/</span></li>
						<li><a href="start_a_campaign.php">Start a Campaign</a><span>/</span></li>
						<li><a href="about.php">About</a><span>/</span></li>
						<li><a href="faq.php">FAQ</a><span>/</span></li>
						<li><a href="contact.php">Contact Us</a><span>/</span></li>
						<li class="active"><a href="profile.php"><b>Your Profile</b></a></li>
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
		
		<div>
		<?php echo '<input type="hidden" name="uid" value='.$user_id.'>';?>
			<div style="float:left;border-right:thick solid grey;text-align:center;;width:30%;text-align:center;">
			<?php
			mysqli_next_result($conn); 
			$sql=mysqli_query($conn,"CALL selectPictureName($user_id)");
			while($row=mysqli_fetch_array($sql)){
				if(empty($row['picture_name'])){
					$picture="default-user.gif";
				}
				else{
					$picture=$row['picture_name'];
				} 
				echo'<form action="picchange.php" method="post" enctype="multipart/form-data"><div class="profile-picture" style="float:right;width:250px;height:250px;"><img style="width:250px;height:250px;max-width:250px;max-height:250px;" src="../../../shared/images/'.$picture.'"><p style="color:black;"><input type="file" onchange="this.form.submit()" name="image"></p><input type="hidden" name="uid" value='.$user_id.'></div></form>'; 
				}?>
			
			</div>
			<div>
			<div style="float:right;width:70%;">
			<table style="width:50%;margin-left:5%;">
			<?php
			mysqli_next_result($conn);
            	$sql=mysqli_query($conn,"CALL selectUserByID($user_id)");
					while($row=mysqli_fetch_array($sql)){
						$temp=$row['u_gender'];
						mysqli_next_result($conn);
						 $sql2=mysqli_query($conn,"CALL selectGenderByID($temp)"); $gender=mysqli_fetch_array($sql2);
                         echo'<tr style="padding:1%;border-top:1px solid black;border-bottom:1px solid black;"><td style="color:black;font-size:200%;"><b>Name: </b></td><td style="color:black;font-size:200%;float:right;">'.$row['u_firstname'].'</td></tr>';
                         echo'<tr style="padding:1%;border-bottom:1px solid black;"><td style="color:black;font-size:200%;"><b>Last Name: </b></td><td style="color:black;font-size:200%;float:right;">'.$row['u_lastname'].'</td></tr><br>';
                         echo'<tr style="padding:1%;border-bottom:1px solid black;"><td style="color:black;font-size:200%;"><b>Gender: </b></td><td style="color:black;font-size:200%;float:right;">'.$gender['gender'].'</td></tr>';
                         echo'<tr style="padding:1%;border-bottom:1px solid black;"><td style="color:black;font-size:200%;"><b>Email: </b></td><td style="color:black;font-size:200%;float:right;">'.$row['u_email'].'</td></tr>';
						}
                        
			?>
			</table>
			</div>
			<div>
			<br><br><br><br><br><br><br><br><br><br><br><br><br><br>
			<h3 style="color:#A7A6A6;text-align:center;">Your Campaigns</h3>
<section class="center slider" style="width:85%;margin-left:5%;margin-right:5%;margin-top:1%;margin-bottom:1%;">
	<?php 
	mysqli_next_result($conn);
	$sql2=mysqli_query($conn,"CALL selectPostByID($user_id)");
	while($row=mysqli_fetch_array($sql2)){
		$temp=$row['uid'];
		mysqli_next_result($conn);
		$sql3=mysqli_query($conn,"CALL selectPictureName($temp)");
		$img=mysqli_fetch_array($sql3);
		echo '<div><img src="../../../shared/images/'.$img['picture_name'].'"><p style="color:black;">'.$row['campaign_title'].'</p></div>';
	
	}
	
	
	?>
  </section>
		</div>
		
	</div>
		
	</div>
