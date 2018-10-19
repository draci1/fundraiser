<?php
include("../../access/config.php");
include('../../access/check.php');
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>View Users</title>
    <!-- Bootstrap -->
    <link href="../../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="../../vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="../../vendors/iCheck/skins/flat/green.css" rel="stylesheet">
    <!-- Datatables -->
    <link href="../../vendors/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">
    <link href="../../vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css" rel="stylesheet">
    <link href="../../vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css" rel="stylesheet">
    <link href="../../vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css" rel="stylesheet">
    <link href="../../vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="../../build/css/custom.min.css" rel="stylesheet">
	  <style>
  .webpage-content{
	  float:right;
	  height:800px;
  }
  .webpage-content p{
	  color:#B4B2B2
  }
  </style>
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
        <!--- Drilona Start --->
        <!-- page content -->
        <div class="right_col" role="main" style="min-height: 2259px;">
		<div class="webpage-content">
            <div class="page-title">
              <div class="title_left">
                <h3>User Panel</h3>
              </div>
              <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                  <div class="input-group">
                    <input type="text" class="form-control">
                    <span class="input-group-btn">
                      <button class="btn btn-default" type="button" style="">Go!</button>
                    </span>
                  </div>
                </div>
              </div>
            </div>


            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Search Users</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <ul class="dropdown-menu" role="menu">
                          <li><a href="#">Settings 1</a>
                          </li>
                          <li><a href="#">Settings 2</a>
                          </li>
                        </ul>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <table id="datatable" class="table table-striped table-bordered">
                      <thead>
                        <tr>
							<th>ID</th>
                          <th>Name</th>
                          <th>Last Name</th>
                          <th>Gender</th>
                          <th>Email</th>
                          <th>Password</th>
                          <!---<th>Verified</th>--->
                        </tr>
                      </thead>


                      <tbody>
					  <?php


						$sql=mysqli_query($conn,"SELECT * FROM users");
						while($row=mysqli_fetch_array($sql)){
								echo "<tr>";
						echo"<td>".$row['uid']."</td>";
                          echo"<td>".$row['u_firstname']."</td>";
                          echo"<td>".$row['u_lastname']."</td>";
                          echo"<td>".$row['u_gender']."</td>";
                          echo"<td>".$row['u_email']."</td>";
                          echo"<td>".$row['u_password']."</td>";
                          //echo"<td>".$row['email_verified']."</td>";
						  echo "</tr>";
						}

						?>

                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
        <!-- /page content -->

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
    <!-- iCheck -->
    <script src="../../vendors/iCheck/icheck.min.js"></script>
    <!-- Datatables -->
    <script src="../../vendors/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="../../vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
    <script src="../../vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
    <script src="../../vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js"></script>
    <script src="../../vendors/datatables.net-buttons/js/buttons.flash.min.js"></script>
    <script src="../../vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
    <script src="../../vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
    <script src="../../vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"></script>
    <script src="../../vendors/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
    <script src="../../vendors/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
    <script src="../../vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js"></script>
    <script src="../../vendors/datatables.net-scroller/js/dataTables.scroller.min.js"></script>
    <script src="../../vendors/jszip/dist/jszip.min.js"></script>
    <script src="../../vendors/pdfmake/build/pdfmake.min.js"></script>
    <script src="../../vendors/pdfmake/build/vfs_fonts.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="../../build/js/custom.min.js"></script>

  </body>
</html>
