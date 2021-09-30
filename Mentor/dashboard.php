<!DOCTYPE html>
<html>

<head>
	<!-- Required Meta Tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0" />
	<meta name="description" content="We are committed to provoke mindsets towards self learningand  provide unlimited opportunities with redefined look.">
	<meta name="keywords" content="LMS,lms,sac,aitam,aitamsac,aditya tekkali,aitam tekkali,Student Activity Center,Student Activity Center aitam,Aditya Institute of Technology and Management (AITAM College, Tekkali),Student Activity Center | AITAM">
	<meta name="author" content="Student Activity Center | AITAM">
	<title>Student Activity Center | AITAM</title>
	<!-- Favicon  -->
	<link rel="icon" href="./assets/images/sac-favicon.png">
	<!-- Bootstrap CSS CDN -->
	<link rel="stylesheet" href="./assets/css/bootstrap.min.css">
	<!-- Font awesome -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
	<!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <!-- Our Custom CSS -->
	<link rel="stylesheet" href="./assets/css/main.css"> </head>
<body>
	<div class="wrapper">
		<!-- Sidebar Holder -->
		<nav id="sidebar">
			<div class="sidebar-header">
				<a class="navbar-brand" href="#"> <img src="./assets/images/logos/sac-white-logo.png" width="200" height="75" alt=""> </a>
			</div>
			<ul class="list-unstyled components">
				<p>LMS portal</p>
				<li class="Dashboard"> <a href="#" onclick="ajaxDashboardPageCall()"><i class="fas fa-tachometer-alt"></i>&nbsp; Dashboard</a></li>
				<li class="Profile"> <a href="#" onclick="ajaxProfilePageCall()"><i class="fas fa-user-alt">&nbsp;</i> Profile</a> </li>
				<li class="Registered-Events"> <a href="#" onclick="ajaxRegisteredEventsPageCall()"><i class="fas fa-list-ol"></i>&nbsp; Registered Events</a> </li>
				<li class="Leaderboard"> <a href="#" onclick="ajaxLeaderboardPageCall()"><i class="fas fa-chart-bar"></i>&nbsp; Leaderboard</a> </li>
				<!-- <li class="active home">
					<a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"> <i class="fas fa-home"></i> &nbsp;Home</a>
					<ul class="collapse list-unstyled" id="homeSubmenu">
						<li> <a href="#" >Home page</a> </li>
						<li> <a href="#">About SAC</a> </li>
						<li> <a href="#">contact</a> </li>
					</ul>
				</li> -->
				<!-- <li> <a href="#"><i class="fas fa-address-card"></i>&nbsp; About</a> </li>
				<a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Pages</a>
                    <ul class="collapse list-unstyled" id="pageSubmenu">
                        <li>
                            <a href="#">Page 1</a>
                        </li>
                        <li>
                            <a href="#">Page 2</a>
                        </li>
                        <li>
                            <a href="#">Page 3</a>
                        </li>
                    </ul>
				</li> -->
			</ul>
			<ul class="list-unstyled CTAs">
				<li> <a href="#" class="download">Add Mentor</a> </li>
				<li> <a href="#" class="article">Logout</a> </li>
			</ul>
		</nav>
		<!-- Page Content Holder -->
		<div id="content">
			<nav class="navbar navbar-expand-lg navbar-light bg-light">
				<div class="container-fluid">
					<button type="button" id="sidebarCollapse" class="navbar-btn"> <span></span> <span></span> <span></span> </button>
					<div class="d-flex nav" id="navbarSupportedContent">
						<ul class="nav  ml-auto float-right">
							<li>
								<div class="dropdown-toggle" data-toggle="dropdown" data-display="" aria-haspopup="true" aria-expanded="false"> <img src="https://mdbootstrap.com/img/new/avatars/1.jpg" class="rounded-circle shadow-4 " height="35" width="35" alt="" />
									<div class="dropdown-menu dropdown-menu-right dropdown-menu-lg-left"> <a class="dropdown-item " href="#"><i class="fas fa-user-alt"></i> profile</a> <a class="dropdown-item " href="#"><i class="fas fa-chart-bar"></i> leaderboard</a> <a class="dropdown-item " href="#"><i class="fas fa-sign-out-alt"></i> logout</a> </div>
								</div>
							</li>
						</ul>
					</div>
				</div>
			</nav>
			<main class="ajax-main-content"> </main>
		</div>
		<!-- jQuery CDN -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
		<!-- Popper.JS -->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
		<!-- Bootstrap JS -->
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>

		<script src="./script.js"></script>
		<script>
			$(document).ready(function () {
				$('#sidebarCollapse').on('click', function () {
					$('#sidebar').toggleClass('active');
				});
			});
		</script>
		<body>

</html>