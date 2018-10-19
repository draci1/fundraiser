
<!--header-->
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
						<li class="active"><a href="contact.php">Contact Us</a><span>/</span></li>
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
					<h1><a href="index.html">Charity Hub</a></h1>
					<p>Social Services</p>
				</div>
			</div>
		</div>
		</div>
<!---->
 <div class="contact">
	<div class="container">

			<h2>Contact</h2>
			<form>
					<div class="contact-grid">
						<div class="col-md-6 contact-us">
							<input type="text" style="pointer-events: none;" value="Name" onfocus="this.value='';" onblur="if (this.value == '') {this.value = 'Name';}">
						</div>
						<div class="col-md-6 contact-us">
							<input type="text" style="pointer-events: none;" value="Email-id" onfocus="this.value='';" onblur="if (this.value == '') {this.value = 'Email-id';}">
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="contact-grid">
						<div class="col-md-6 contact-us">
							<input type="text" style="pointer-events: none;" value="URL" onfocus="this.value='';" onblur="if (this.value == '') {this.value = 'URL';}">
						</div>
						<div class="col-md-6 contact-us">
							<input type="text" style="pointer-events: none;" value="Subject" onfocus="this.value='';" onblur="if (this.value == '') {this.value = 'Subject';}">
						</div>
						<div class="clearfix"> </div>
					</div>
					<textarea cols="77" rows="6" value=" " style="pointer-events: none;" onfocus="this.value='';" onblur="if (this.value == '') {this.value = 'Message';}">Message</textarea>
					<div class="send ">
						<input type="submit" style="pointer-events: none;" value="SEND" >
					</div>
				</form>
				</div>
				<div class="map">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d37494223.239094906!2d103!3d55!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x453c569a896724fb%3A0x1409fdf86611f613!2sRussia!5e0!3m2!1sen!2sin!4v1432796618846" ></iframe>
				</div>
			</div>


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
		<div class="container">
				<div class="class-footer">
					 <p class="footer-grid"> Design by <a href="http://w3layouts.com/" target="_blank">W3layouts</a> </p>
			 	</div>
		 </div>
	</div>
