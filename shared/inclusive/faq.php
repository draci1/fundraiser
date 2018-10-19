
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
						<li class="active"><a href="faq.php">FAQ</a><span>/</span></li>
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
					<h1><a href="index.html">Charity Hub</a></h1>
					<p>Social Services</p>
				</div>
			</div>
		</div>
		</div>
<!---->
 
	  	  <!---->

  <div class="blog">
			<div class="container">
			<h2>Blog</h2>
			<div class="col-md-8 ">
				<div class=" single-grid">
					<a href="single.html"><img class="img-responsive" src="../../../shared/images/bo.jpg" alt="" /></a>
					<div class="lone-line">
						<h4><a href="single.html">Social Sense Perception of Loneliness</a></h4>
						<ul class="sin-grid">
							<li><span>By</span><a href="single.html"> Admin</a><b>|</b></li>
							<li><a href="single.html">Activities</a><b>|</b></li>
							<li><a href="single.html">24 Comment</a><b>|</b></li>
							<li><span>Posted at 09.00am</span><b>|</b></li>
							<li><a href="single.html">Share This Post</a></li>
						</ul>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco</p>
						<p class="ut"> laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error.</p>
						<a class="hvr-rectangle-out" href="#">READ MORE</a>
					</div>
				</div>
					<div class=" single-grid">
					<a href="single.html"><img class="img-responsive" src="images/bo1.jpg" alt="" /></a>
					<div class="lone-line">
						<h4><a href="single.html">Social Sense Perception of Loneliness</a></h4>
						<ul class="sin-grid">
							<li><span>By</span><a href="single.html"> Admin</a><b>|</b></li>
							<li><a href="single.html">Activities</a><b>|</b></li>
							<li><a href="single.html">24 Comment</a><b>|</b></li>
							<li><span>Posted at 09.00am</span><b>|</b></li>
							<li><a href="single.html">Share This Post</a></li>
						</ul>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco</p>
						<p class="ut"> laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error.</p>
						<a class="hvr-rectangle-out" href="#">READ MORE</a>
					</div>
				</div>
					<div class=" single-grid">
					<a href="single.html"><img class="img-responsive" src="images/bo2.jpg" alt="" /></a>
					<div class="lone-line">
						<h4><a href="single.html">Social Sense Perception of Loneliness</a></h4>
						<ul class="sin-grid">
							<li><span>By</span><a href="single.html"> Admin</a><b>|</b></li>
							<li><a href="single.html">Activities</a><b>|</b></li>
							<li><a href="single.html">24 Comment</a><b>|</b></li>
							<li><span>Posted at 09.00am</span><b>|</b></li>
							<li><a href="single.html">Share This Post</a></li>
						</ul>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco</p>
						<p class="ut"> laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error.</p>
						<a class="hvr-rectangle-out" href="#">READ MORE</a>
					</div>
				</div>
				</div>
				<div class="col-md-3 categories-grid">
				<div class="grid-categories">
					<h4>Categories</h4>
					<ul class="popular ">
						<li><a href="#"><i class="glyphicon glyphicon-ok-sign"> </i>Contrary to popular belief</a></li>
						<li><a href="#"><i class="glyphicon glyphicon-ok-sign"> </i>There are many variation</a></li>
						<li><a href="#"><i class="glyphicon glyphicon-ok-sign"> </i>Lorem Ipsum is simply</a></li>
						<li><a href="#"><i class="glyphicon glyphicon-ok-sign"> </i>Sed ut perspiciatis unde</a></li>
						<li><a href="#"><i class="glyphicon glyphicon-ok-sign"> </i>Nemo enim ipsam volume</a></li>
						<li><a href="#"><i class="glyphicon glyphicon-ok-sign"> </i>At vero eos et accusamus</a></li>
						<li><a href="#"><i class="glyphicon glyphicon-ok-sign"> </i>Contrary to popular belief</a></li>
						<li><a href="#"><i class="glyphicon glyphicon-ok-sign"> </i>There are many variation</a></li>
					</ul>
				</div>
				<div class="grid-categories">
					<h4>Achivements</h4>
					<ul class="popular popular-in">
						<li><a href="#"><i class="glyphicon glyphicon-ok-sign"> </i>MAY 2014</a></li>
						<li><a href="#"><i class="glyphicon glyphicon-ok-sign"> </i>SEP 2012</a></li>
						<li><a href="#"><i class="glyphicon glyphicon-ok-sign"> </i>JANUARY 2011</a></li>
						<li><a href="#"><i class="glyphicon glyphicon-ok-sign"> </i>FEB 2010</a></li>
						<li><a href="#"><i class="glyphicon glyphicon-ok-sign"> </i>NOV 2009</a></li>
					</ul>
				</div>
			</div>
				<div class="clearfix"> </div>
			<nav>
				  <ul class="pagination">
					<li class="disabled"><a href="#" aria-label="Previous"><span aria-hidden="true">&laquo;</span></a></li>
					<li class="active"><a href="#">1 <span class="sr-only">(current)</span></a></li>
					<li ><a href="#">2 <span class="sr-only"></span></a></li>
					<li ><a href="#">3 <span class="sr-only"></span></a></li>
					<li ><a href="#">4 <span class="sr-only"></span></a></li>
					<li ><a href="#">5 <span class="sr-only"></span></a></li>
					 <li> <a href="#" aria-label="Next"><span aria-hidden="true">&raquo;</span> </a> </li>
				  </ul>
				</nav>	
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
	</div>