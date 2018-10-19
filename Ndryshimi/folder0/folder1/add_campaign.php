<html>
<head>
<title>Add Data</title>
</head>

<body>

<?php

include_once("../../../shared/config.php");
if (isset($_POST['submit'])) {
	$uid=mysqli_real_escape_string($conn,$_POST['uid']);
  $title = mysqli_real_escape_string($conn,$_POST['title']);
  $category = mysqli_real_escape_string($conn,$_POST['category']);
  $currency=mysqli_real_escape_string($conn,$_POST['currency']);
  $amount=mysqli_real_escape_string($conn,$_POST['amount']);
  $file=$_FILES['file']['name'];
  $content = mysqli_real_escape_string($conn,$_POST['content']);
  $postdate=date('y/m/d');
  if(empty($title) || empty($category) || empty($currency) || empty($amount) || empty($content) || empty($postdate)) {
  if(empty($title)) {
  echo "<font color='red'>Title field is empty.</font><br/>";
  }
  if(empty($category)) {
  echo "<font color='red'>Category field is empty.</font><br/>";
  }
  if(empty($currency)) {
  echo "<font color='red'>Currency field is empty.</font><br/>";
  }
  if(empty($amount)) {
  echo "<font color='red'>Amount field is empty.</font><br/>";
  }
  if(empty($content)) {
  echo "<font color='red'>Content field is empty.</font><br/>";
  }
  if(empty($postdate)) {
  echo "<font color='red'>Whoops! Something went wrong with the date. Please contact the administrator if the issue persists.</font><br/>";
  }
  echo "<br/><a href='javascript:self.history.back();'>Go
  Back</a>";
  }

	else{
    include("externalfilterforamount.php");
    if(!isset($file) || trim($file) == '')
    {
      mysqli_next_result($conn);
      $result = mysqli_query($conn,
      "CALL addCampaign($uid,'$title','$category','$currency','$amount',$postdate','$content')");
      header("Location: categories.php");
    }
    else
    {
      $file = rand(1000, 100000)."-".$_FILES['file']['name'];
      $file_loc = $_FILES ['file']['tmp_name'];
      $file_size = $_FILES ['file']['size'];
      $file_type = $_FILES ['file']['type'];
      $folder="../../../shared/uploads/";
      $new_size = floor($file_size/1024);
      $new_file_name = strtolower($file);
      $final_file=str_replace(' ','-',$new_file_name);

		if(move_uploaded_file($file_loc,$folder.$final_file))
		{
      mysqli_next_result($conn);
      //echo "Variables: $uid<br>$title<br>$category<br>$currency<br>$amount<br> $final_file<br>$file_type<br>$new_size<br>$postdate<br>$content<br>";
      $result = mysqli_query($conn,
      "CALL addCampaignWithFile($uid,'$title',$category,$currency,$amount,'$final_file','$file_type',$new_size,'$postdate','$content')");
      header("Location: categories.php");
    }
    else
		{
			?>
			<script>
			alert('error while uploading file');
			window.location.href='start_a_campaign.php?fail';
			</script>
			<?php
		}
    }
	}	}
  ?>
  </body>
  </html>
