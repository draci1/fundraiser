
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
					<h1><a href="index.html">Start a Campaign</a></h1>
					<p>Fill out the form to start your very own campaign!</p>
				</div>
			</div>
		</div>
		</div>
<form class="form-style-7" method="post" action="add_campaign.php" name="form1" enctype="multipart/form-data">
	<ul>
		<table>
			<tr>
			<td>
			<li>
				<label for="title">Title</label>
				<input type="text" name="title" maxlength="100">
				<span>Enter the title of your campaign <br>(be creative!)</span>
			</li>
			</td>
			<td>
			<li>
				<label for="category">Category</label>
				<select name="category">
				<?php
				mysqli_next_result($conn);
				$sql=mysqli_query($conn,"CALL selectAllCategories()");
				while($row = mysqli_fetch_array($sql)){
					echo "<option value=".$row['id_category'].">".$row['category_name']."</option>";
				}
				?>
				</select>
				<span>Select the category of your campaign <br></span>
			</li>
			</td>

<td>
<li>
    <label for="currency">Currency</label>
    <select name="currency">
	<?php
	mysqli_next_result($conn);
	$sql=mysqli_query($conn,"CALL selectAllCurrencies()");
	while($row = mysqli_fetch_array($sql)){
		echo "<option value=".$row['id_currency'].">".$row['currency_name']." (".$row['currency_symbol'].")"."</option>";
	}
	?>
	</select>
    <span>Select the currency you want to receive the donations in</span>
</li>
</td>

<td>
<li>
    <label for="amount">Cash amount</label>
    <input type="number" name="amount" maxlength="11">
    <span>Set the amount of money you need <br>(be reasonable)</span>
</li>
</td>
</tr>

<br><br><br>

<tr>

<th colspan="4">

<li>
	<label for="content">Content</label>
	<textarea name="content" onkeyup="adjust_textarea(this)" maxlength="6000"></textarea>
	<span>Elaborate your campaign. Tell us how funding your campaign can bring a change in your life!</span>
</li>

</th>
</tr>

<th>
<br><br><br>
<li>
<label for="upload">Upload a file! <i>(This is optional)</i></label>

<input type="file" name="file" style="color:grey"/>
<span>If you have a CV, an interesting research paper, a beatiful poem, amazing pictures or more, add them here!</span>
</li>
</th>
<td><input type="hidden" name="uid" value='<?php echo $user_id;?>'></td>
</table>
<br>
</ul>
    <input type="submit" name="submit" value="Post it!" >
</form>
<!---->

	</div>
