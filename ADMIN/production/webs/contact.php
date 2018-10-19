<!DOCTYPE html>
<?php
include('../../access/check.php');
$cookie_name2="user2";
$cookie_value2=$login_user;
setcookie($cookie_name2,$cookie_value2,time()+ (86400 * 30),  "/");
?>
<html lang="en">
  <head>
	<!--- ballina_start --->
	<link href="../../../shared/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<script src="../js/jquery.min.js"></script>
	<!-- Custom Theme files -->
	<!--theme-style-->
	<link href="../../../shared/css/style.css" rel="stylesheet" type="text/css" media="all" />
	<!--//theme-style-->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="Charity Hub Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
	<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
	<!--fonts-->
	<link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900' rel='stylesheet' type='text/css'>
	<!--//fonts-->
	<script src="../js/responsiveslides.min.js"></script>
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
  <!--- ballina_end --->
  <!---Ekstra per ballinen --->
  <style>
  .webpage-content{
	  float:right;
	  height:800px;
    overflow-y: scroll;
  }



  .webpage-content p{
	  color:#B4B2B2
  }
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
  <!--- Ekstra per ballinen --->

  <!--- Slider --->
    <link rel="stylesheet" type="text/css" href="../../../shared/slicker-slider/slick/slick.css">
  <link rel="stylesheet" type="text/css" href="../../../shared/slicker-slider/slick/slick-theme.css">

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
  <!--- End of Slider --->


    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Administrator</title>
    <!-- Bootstrap -->
    <link href="../../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="../../vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="../../vendors/iCheck/skins/flat/green.css" rel="stylesheet">
    <!-- bootstrap-progressbar -->
    <link href="../../vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
    <!-- JQVMap -->
    <link href="../../vendors/jqvmap/dist/jqvmap.min.css" rel="stylesheet"/>
    <!-- bootstrap-daterangepicker -->
    <link href="../../vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">
    <!-- Custom Theme Style -->
    <link href="../../build/css/custom.min.css" rel="stylesheet">
  </head>
  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="index.php" class="site_title"><i class="fa fa-paw"></i> <span>Fundraiser</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="../images/img.jpg" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Welcome,</span>
                <h2><?php echo "$login_user";?></h2>
              </div>
            </div>
            <!-- /menu profile quick info -->
            <br />
            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
			<div class="menu_section">
                <h3>Admin Panel</h3>
                <ul class="nav side-menu">
                  <li><a href="../index.php"><i class="fa fa-windows"></i> Homepage</span></a>
                  </li>
                </ul>
              </div>

              <div class="menu_section">
                <h3>Webpage Interface</h3>
                <ul class="nav side-menu">
                  <li><a><i class="fa fa-home"></i> Home <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="../webs/ballina_view.php">View</a></li>
                      <!---<li><a href="../webs/ballina_modify.php">Modify</a></li>--->
                    </ul>
                  </li>
                  <li><a><i class="fa fa-edit"></i> Categories <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="../webs/categories_view.php">View</a></li>
                      <!---<li><a href="form_advanced.html">Modify</a></li>--->
                    </ul>
                  </li>
                  <li><a><i class="fa fa-desktop"></i> Start a Campaign <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="../webs/start_a_campaign.php">View</a></li>
                      <!---<li><a href="media_gallery.html">Modify</a></li>-->
                    </ul>
                  </li>
                  <li><a><i class="fa fa-table"></i> About <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="../webs/about.php">View</a></li>
                      <!---<li><a href="tables_dynamic.html">Modify</a></li>-->
                    </ul>
                  </li>
                  <li><a><i class="fa fa-bug"></i> FAQ <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="../webs/faq.php">View</a></li>
                      <!---<li><a href="chartjs2.html">Modify</a></li>-->
                    </ul>
                  </li>
                  <li><a><i class="fa fa-clone"></i>Contact Us <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="../webs/contact.php">View</a></li>
                      <!---<li><a href="fixed_footer.html">Modify</a></li>--->
                    </ul>
                  </li>
                </ul>
              </div>
              <div class="menu_section">
                <h3>Database Administration</h3>
                <ul class="nav side-menu">
                  <li><a><i class="fa fa-windows"></i> Users <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="../datab/users_view.php">View</a></li>
                      <li><a href="../datab/users_modify.php">Modify</a></li>
                    </ul>
                  </li>
                  <!---<li><a><i class="fa fa-bar-chart-o"></i> Threads <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="page_403.html">View</a></li>
                      <li><a href="page_404.html">Modify</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-sitemap"></i> Categories <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                        <li><a href="#level1_1">View</a></li>
                        <li><a>Modify</span></a>
                        </li>
                    </ul>
                  </li>
				<li><a><i class="fa fa-sitemap"></i> Bank Information <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                        <li><a href="#level1_1">Delete</a>
                        </li>
                    </ul>
                  </li>
                  <li><a href="javascript:void(0)"><i class="fa fa-laptop"></i> Documentation <span class="label label-success pull-right">Coming soon!</span></a></li>--->
                </ul>
              </div>
            </div>
            <!-- /sidebar menu -->
            <!-- /menu footer buttons -->
            <div class="sidebar-footer hidden-small">
              <a data-toggle="tooltip" data-placement="top" title="Settings">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Lock">
                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Logout" href="../access/index.php">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
              </a>
            </div>
            <!-- /menu footer buttons -->
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
            <nav>
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>

              <ul class="nav navbar-nav navbar-right">
                <li class="">
                  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    <img src="../images/img.jpg" alt="">Welcome <?php echo "$login_user";?>
                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                    <li><a href="javascript:;"> Profile</a></li>
                    <li>
                      <a href="javascript:;">
                        <span class="badge bg-red pull-right">50%</span>
                        <span>Settings</span>
                      </a>
                    </li>
                    <li><a href="javascript:;">Help</a></li>
                    <li><a href="../access/index.php"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                  </ul>
                </li>

                <li role="presentation" class="dropdown">
                  <a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown" aria-expanded="false">
                    <i class="fa fa-envelope-o"></i>
                    <span class="badge bg-green">6</span>
                  </a>
                  <ul id="menu1" class="dropdown-menu list-unstyled msg_list" role="menu">
                    <li>
                      <a>
                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <a>
                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <a>
                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <a>
                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <div class="text-center">
                        <a>
                          <strong>See All Alerts</strong>
                          <i class="fa fa-angle-right"></i>
                        </a>
                      </div>
                    </li>
                  </ul>
                </li>
              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->
        		<!-- drilona-start -->
				<div class="right_col" role="main" style="min-height: 2259px;">
<div class="webpage-content">
	<?php include("../../../shared/inclusive/contact.php");?>
		</div>
	</div>
		<!--- drilona_end --->
		</div>



      </div>

    <!-- jQuery -->
    <script src="../../vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="../../vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="../../vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="../../vendors/nprogress/nprogress.js"></script>
    <!-- Chart.js -->
    <script src="../../vendors/Chart.js/dist/Chart.min.js"></script>
    <!-- gauge.js -->
    <script src="../../vendors/gauge.js/dist/gauge.min.js"></script>
    <!-- bootstrap-progressbar -->
    <script src="../../vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    <!-- iCheck -->
    <script src="../../vendors/iCheck/icheck.min.js"></script>
    <!-- Skycons -->
    <script src="../../vendors/skycons/skycons.js"></script>
    <!-- Flot -->
    <script src="../../vendors/Flot/jquery.flot.js"></script>
    <script src="../../vendors/Flot/jquery.flot.pie.js"></script>
    <script src="../../vendors/Flot/jquery.flot.time.js"></script>
    <script src="../../vendors/Flot/jquery.flot.stack.js"></script>
    <script src="../../vendors/Flot/jquery.flot.resize.js"></script>
    <!-- Flot plugins -->
    <script src="../../vendors/flot.orderbars/js/jquery.flot.orderBars.js"></script>
    <script src="../../vendors/flot-spline/js/jquery.flot.spline.min.js"></script>
    <script src="../../vendors/flot.curvedlines/curvedLines.js"></script>
    <!-- DateJS -->
    <script src="../../vendors/DateJS/build/date.js"></script>
    <!-- JQVMap -->
    <script src="../../vendors/jqvmap/dist/jquery.vmap.js"></script>
    <script src="../../vendors/jqvmap/dist/maps/jquery.vmap.world.js"></script>
    <script src="../../vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="../../vendors/moment/min/moment.min.js"></script>
    <script src="../../vendors/bootstrap-daterangepicker/daterangepicker.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="../../build/js/custom.min.js"></script>

  </body>
</html>
