<!DOCTYPE html>
<?php
include('../../access/check.php');
$cookie_name2="user2";
$cookie_value2=$login_user;
setcookie($cookie_name2,$cookie_value2,time()+ (86400 * 30),  "/");
?>
<html lang="en">
  <head>
<link href="../../../shared//css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="../../../shared//js/jquery.min.js"></script>
<!-- Custom Theme files -->
<!--theme-style-->
<link href="../../../shared//css/style.css" rel="stylesheet" type="text/css" media="all" />
<!--//theme-style-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<style type="text/css">
.form-style-7{
    max-width:100%;
    margin:0px auto;
    background:#fff;
    border-radius:2px;
    padding:60px;
    font-family: Georgia, "Times New Roman", Times, serif;
}
.form-style-7 h1{
    display: block;
    text-align: center;
    padding: 0;
    margin: 0px 0px 20px 0px;
    color: #5C5C5C;
    font-size:x-large;
}
.form-style-7 ul{
    list-style:none;
    padding:0;
    margin:0;
}
.form-style-7 li{
    display: block;
    padding: 13px;
    border:1px solid #DDDDDD;
    margin-bottom: 60px;
    border-radius: 3px;
}
.form-style-7 li:last-child{
    border:none;
    margin-bottom: 0px;
    text-align: center;
}
.form-style-7 li > label{
    display: block;
    float: left;
    margin-top: -19px;
    background: #FFFFFF;
    height: 30px;
    padding: 0px 5px 2px 5px;
    color: #B9B9B9;
    font-size: 14px;
    overflow: hidden;
    font-family: Arial, Helvetica, sans-serif;
}
.form-style-7 input[type="text"],
.form-style-7 input[type="date"],
.form-style-7 input[type="datetime"],
.form-style-7 input[type="email"],
.form-style-7 input[type="number"],
.form-style-7 input[type="search"],
.form-style-7 input[type="time"],
.form-style-7 input[type="url"],
.form-style-7 input[type="password"],
.form-style-7 textarea,
.form-style-7 select
{
    box-sizing: border-box;
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    width: 100%;
    display: block;
    outline: none;
    border: none;
    height: 25px;
    line-height: 25px;
    font-size: 20px;
    padding: 0;
    font-family: Georgia, "Times New Roman", Times, serif;
	color:black;
	text-align:center;
}
.form-style-7 input[type="text"]:focus,
.form-style-7 input[type="date"]:focus,
.form-style-7 input[type="datetime"]:focus,
.form-style-7 input[type="email"]:focus,
.form-style-7 input[type="number"]:focus,
.form-style-7 input[type="search"]:focus,
.form-style-7 input[type="time"]:focus,
.form-style-7 input[type="url"]:focus,
.form-style-7 input[type="password"]:focus,
.form-style-7 textarea:focus,
.form-style-7 select:focus
{
}
.form-style-7 li > span{
    background: #F3F3F3;
    display: block;
    padding: 13px;
    margin: 0 -9px -9px -9px;
    text-align: center;
    color: #C0C0C0;
    font-family: Arial, Helvetica, sans-serif;
    font-size: 13px;
}
.form-style-7 textarea{
    resize:none;
	text-align:left;
	height:100px;
}
.form-style-7 input[type="submit"],
.form-style-7 input[type="button"]{
    background: #2471FF;
    border: none;
    padding: 10px 20px 10px 20px;
    border-bottom: 3px solid #5994FF;
    border-radius: 3px;
    color: #D2E2FF;
}
.form-style-7 input[type="submit"]:hover,
.form-style-7 input[type="button"]:hover{
    background: #6B9FFF;
    color:#fff;
}
table{
	border: 1px solid #DDDDDD;
}
  .webpage-content{
	  float:right;
	  height:800px;
    overflow-y: scroll;
  }
  .webpage-content p{
	  color:#B4B2B2
  }
</style><script type="text/javascript">
//auto expand textarea
function adjust_textarea(h) {

    h.style.height = (h.scrollHeight)+"px";
}
</script>	<script src="../js/responsiveslides.min.js"></script>
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

  <!--- Ekstra per ballinen --->


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
              <a data-toggle="tooltip" data-placement="top" title="Logout" href="../../access/index.php">
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
                    <li><a href="../../access/index.php"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
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
				<div class="webpage-content">
				<div class="right_col" role="main" style="min-height: 2259px;">
				<!-- drilona-start -->
<div class="webpage-content" style="pointer-events: none;">
<?php include("../../../shared/inclusive/start_a_campaign.php");?>
			</div>
			<!--- drilona_end --->
		</div>
	</div>

		</div>



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
