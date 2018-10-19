<!--A Design by W3layouts 
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php
include("check.php");
?>
<!DOCTYPE html>
<html>
<head>
<title>Welcome to Fundraiser</title>
<link href="../../../shared//css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="../../../shared//js/jquery.min.js"></script>
<!-- Custom Theme files -->
<!--theme-style-->
<link href="../../../shared//css/style.css" rel="stylesheet" type="text/css" media="all" />	
<!--//theme-style-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Charity Hub Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--fonts-->
<link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900' rel='stylesheet' type='text/css'>
<!--//fonts-->
<script src="js/responsiveslides.min.js"></script>
<script>
    $(function () {
      $("#slider").responsiveSlides({
      	auto: true,
      	nav: true,
      	speed: 500,
        namespace: "callbacks",
        pager: true,
      });
    });
  </script>
  <!--- slider_start --->
  <link rel="stylesheet" type="text/css" href="../../../shared/slicker-slider/slick/slick.css">
  <link rel="stylesheet" type="text/css" href="../../../shared/slicker-slider/slick/slick-theme.css">
  <style type="text/css">

    * {
      box-sizing: border-box;
    }

    .slider {
        width: 50%;
        margin: 100px auto;
    }

    .slick-slide {
      margin: 0px 20px;
    }

    .slick-slide img {
      width: 100%;
    }
	
    .slick-prev:before,
    .slick-next:before {
        color: black;
		
	hr {
    display: block;
    -webkit-margin-before: 0.5em;
    -webkit-margin-after: 0.5em;
    -webkit-margin-start: auto;
    -webkit-margin-end: auto;
    border-style: inset;
    border-width: 1px;
	}
}
  </style>
  <script src="../../../shared/slicker-slider/slick/javascript/jquery-2.2.0.min.js" type="text/javascript"></script>
  <script src="../../../shared/slicker-slider/slick/javascript/slick.js" type="text/javascript" charset="utf-8"></script>
  <script type="text/javascript">
    $(document).on('ready', function() {
      $(".regular").slick({
        dots: true,
        infinite: true,
        slidesToShow: 3,
        slidesToScroll: 3
      });
      $(".center").slick({
        dots: true,
        infinite: true,
        centerMode: true,
        slidesToShow: 3,
        slidesToScroll: 3
      });
      $(".variable").slick({
        dots: true,
        infinite: true,
        variableWidth: true
      });
    });
  </script>
 <!--- slider_end --->
</head>
<body>
<?php include("../../../shared/inclusive/profile.php");?>
 </body>
</html>