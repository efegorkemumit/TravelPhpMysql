<?php

define("APPURL","http://localhost/TravelPhpMysql");

define("APPURLADMIN","http://localhost/TravelPhpMysql/admin");
session_start();

if(!isset($_SESSION["admin"])) {
	echo "<script>window.location.href='".APPURL."';</script>";
  }






define("ASSETSIMAGE", "http://localhost/TravelPhpMysql/assets/images");
define("DBIMAGE", "http://localhost/TravelPhpMysql/assets/images");

require_once($_SERVER['DOCUMENT_ROOT'].'/TravelPhpMysql/config/config.php');


?>


<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="Responsive Admin &amp; Dashboard Template based on Bootstrap 5">
	<meta name="author" content="AdminKit">
	<meta name="keywords" content="adminkit, bootstrap, bootstrap 5, admin, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web">

	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link rel="shortcut icon" href="img/icons/icon-48x48.png" />

	<link rel="canonical" href="https://demo-basic.adminkit.io/" />

	<title>AdminKit Demo - Bootstrap 5 Admin Template</title>

	<link href="css/app.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
</head>


<body>
	<div class="wrapper">
		<nav id="sidebar" class="sidebar js-sidebar">
			<div class="sidebar-content js-simplebar">
				<a class="sidebar-brand" href="index.html">
          <span class="align-middle">AdminKit</span>
        </a>

				<ul class="sidebar-nav">

                <li class="sidebar-header">
						Pages
					</li>

                    <li class="sidebar-item">
						<a class="sidebar-link" href="index.html">
              <i class="align-middle" data-feather="sliders"></i> <span class="align-middle">Dashboard</span>
            </a>
					</li>
                    <li class="sidebar-item">
						<a class="sidebar-link" href="index.html">
              <i class="align-middle" data-feather="sliders"></i> <span class="align-middle">Hotels</span>
            </a>
					</li>

                    <li class="sidebar-item">
					<a class="sidebar-link" href="<?php echo APPURLADMIN ?>/car.php">
              <i class="align-middle" data-feather="sliders"></i> <span class="align-middle">Car</span>
            </a>
					</li>

                    <li class="sidebar-item">
						<a class="sidebar-link" href="<?php echo APPURLADMIN ?>/cruise.php">
              <i class="align-middle" data-feather="sliders"></i> <span class="align-middle">Cruise</span>
            </a>
					</li>

                    <li class="sidebar-item ">
						<a class="sidebar-link" href="<?php echo APPURLADMIN ?>/flight.php">
              <i class="align-middle" data-feather="sliders"></i> <span class="align-middle">Flight</span>
            </a>
					</li>

                    <li class="sidebar-item">
						<a class="sidebar-link" href="<?php echo APPURLADMIN ?>/active.php">
              <i class="align-middle" data-feather="sliders"></i> <span class="align-middle">Activities</span>
            </a>
					</li>

                    <li class="sidebar-item">
						<a class="sidebar-link" href="<?php echo APPURLADMIN ?>/trip.php">
              <i class="align-middle" data-feather="sliders"></i> <span class="align-middle">Trips</span>
            </a>
					</li>

					<li class="sidebar-item">
						<a class="sidebar-link" href="<?php echo APPURLADMIN ?>/user.php">
              <i class="align-middle" data-feather="sliders"></i> <span class="align-middle">user</span>
            </a>
					</li>
					




					<li class="sidebar-header">
						Pages
					</li>

					<li class="sidebar-item active">
						<a class="sidebar-link" href="index.html">
              <i class="align-middle" data-feather="sliders"></i> <span class="align-middle">Dashboard</span>
            </a>
					</li>

					<li class="sidebar-item">
						<a class="sidebar-link" href="pages-profile.html">
              <i class="align-middle" data-feather="user"></i> <span class="align-middle">Profile</span>
            </a>
					</li>

					<li class="sidebar-item">
						<a class="sidebar-link" href="pages-sign-in.html">
              <i class="align-middle" data-feather="log-in"></i> <span class="align-middle">Sign In</span>
            </a>
					</li>

					<li class="sidebar-item">
						<a class="sidebar-link" href="pages-sign-up.html">
              <i class="align-middle" data-feather="user-plus"></i> <span class="align-middle">Sign Up</span>
            </a>
					</li>

					<li class="sidebar-item">
						<a class="sidebar-link" href="pages-blank.html">
              <i class="align-middle" data-feather="book"></i> <span class="align-middle">Blank</span>
            </a>
					</li>

					<li class="sidebar-header">
						Tools & Components
					</li>

					<li class="sidebar-item">
						<a class="sidebar-link" href="ui-buttons.html">
              <i class="align-middle" data-feather="square"></i> <span class="align-middle">Buttons</span>
            </a>
					</li>

					<li class="sidebar-item">
						<a class="sidebar-link" href="ui-forms.html">
              <i class="align-middle" data-feather="check-square"></i> <span class="align-middle">Forms</span>
            </a>
					</li>

					<li class="sidebar-item">
						<a class="sidebar-link" href="ui-cards.html">
              <i class="align-middle" data-feather="grid"></i> <span class="align-middle">Cards</span>
            </a>
					</li>

					<li class="sidebar-item">
						<a class="sidebar-link" href="ui-typography.html">
              <i class="align-middle" data-feather="align-left"></i> <span class="align-middle">Typography</span>
            </a>
					</li>

					<li class="sidebar-item">
						<a class="sidebar-link" href="icons-feather.html">
              <i class="align-middle" data-feather="coffee"></i> <span class="align-middle">Icons</span>
            </a>
					</li>

					<li class="sidebar-header">
						Plugins & Addons
					</li>

					<li class="sidebar-item">
						<a class="sidebar-link" href="charts-chartjs.html">
              <i class="align-middle" data-feather="bar-chart-2"></i> <span class="align-middle">Charts</span>
            </a>
					</li>

					<li class="sidebar-item">
						<a class="sidebar-link" href="maps-google.html">
              <i class="align-middle" data-feather="map"></i> <span class="align-middle">Maps</span>
            </a>
					</li>
				</ul>

				
			</div>
		</nav>

		<div class="main">
			<nav class="navbar navbar-expand navbar-light navbar-bg">
				<a class="sidebar-toggle js-sidebar-toggle">
          <i class="hamburger align-self-center"></i>
        </a>

				<div class="navbar-collapse collapse">
					<ul class="navbar-nav navbar-align">
						
					
						<li class="nav-item dropdown">
							<a class="nav-icon dropdown-toggle d-inline-block d-sm-none" href="#" data-bs-toggle="dropdown">
                <i class="align-middle" data-feather="settings"></i>
              </a>

							<a class="nav-link dropdown-toggle d-none d-sm-inline-block" href="#" data-bs-toggle="dropdown">
                <img src="img/avatars/avatar.jpg" class="avatar img-fluid rounded me-1" alt="Charles Hall" /> <span class="text-dark"><?php echo $_SESSION['admin']; ?></span>
              </a>
							<div class="dropdown-menu dropdown-menu-end">
							
								<a class="dropdown-item" href="<?php echo APPURLADMIN ?>/logout.php">Log out</a>
							</div>
						</li>
					</ul>
				</div>
			</nav>