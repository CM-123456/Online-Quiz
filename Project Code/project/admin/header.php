<?php
	session_start();
	if(!isset($_SESSION['admin']))
	{
		?>
			<script>
				alert("You have to Login First...");
				window.location="login.php";
			</script>
		<?php
	}
	include "connection.php";
?>
<html>
<head>
<title>Welcome To Online Quiz</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Colored Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- bootstrap-css -->
<link rel="stylesheet" href="css/bootstrap.css">
<!-- //bootstrap-css -->
<!-- Custom CSS -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<!-- font CSS -->
<link href='//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
<!-- font-awesome icons -->
<link rel="stylesheet" href="css/font.css" type="text/css"/>
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome icons -->
<script src="js/jquery2.0.3.min.js"></script>
<script src="js/modernizr.js"></script>
<script src="js/jquery.cookie.js"></script>
<script src="js/screenfull.js"></script>
<link rel="stylesheet" href="css/st.css"/>
		<script>
		$(function () {
			$('#supported').text('Supported/allowed: ' + !!screenfull.enabled);

			if (!screenfull.enabled) {
				return false;
			}

			

			$('#toggle').click(function () {
				screenfull.toggle($('#container')[0]);
			});	
		});
		</script>
<!-- charts -->
<script src="js/raphael-min.js"></script>
<script src="js/morris.js"></script>
<link rel="stylesheet" href="css/morris.css">
<!-- //charts -->
<!--skycons-icons-->
<script src="js/skycons.js"></script>
<!--//skycons-icons-->
</head>
<body class="dashboard-page">
	<script>
	        var theme = $.cookie('protonTheme') || 'default';
	        $('body').removeClass (function (index, css) {
	            return (css.match (/\btheme-\S+/g) || []).join(' ');
	        });
	        if (theme !== 'default') $('body').addClass(theme);
        </script>
	<nav class="main-menu">
		<ul>
			<li>
				<a href="index.php">
					<i class="fa fa-home nav_icon"></i>
					<span class="nav-text">
					Home
					</span>
				</a>
			</li>
			<li class="has-subnav">
				<a href="viewuser.php">
					<i class="fa fa-user nav-icon"></i>
						<span class="nav-text">
						User
						</span>
				</a>
			</li>
			<li class="has-subnav">
				<a href="viewcategory.php">
						<i class="fa fa-th-large nav-icon"></i>
						<span class="nav-text">
						Category
						</span>
				</a>
			</li>
			<li>
				<a href="viewexam.php">
					<i class="icon-table nav-icon"></i>
					<span class="nav-text">
					 Exam Details
					</span>
				</a>
			</li>
			<li>
				<a href="viewquiz.php">
				<i class="fa fa-pencil nav-icon"></i>
					<span class="nav-text">
					Quiz
					</span>
				</a>
			</li>
			<li>
				<a href="viewresult.php">
					<i class="fa fa-map-marker"></i>
					<span class="nav-text">
					Result
					</span>
				</a>
			</li>
			<li>
				<a href="viewfeedback.php">
				<i class="fa fa-comment nav-icon"></i>
				<span class="nav-text">
				Feddback
				</span>
				</a>
			</li>
			<li>
				<a href="viewfaq.php">
					<i class="fa fa-exclamation-triangle"></i>
					<span class="nav-text">
					FAQ
					</span>
				</a>
			</li>
		</ul>
		<ul class="logout">
			<li>
			<a href="logout.php">
			<i class="icon-off nav-icon"></i>
			<span class="nav-text">
			Logout
			</span>
			</a>
			</li>
		</ul>
	</nav>
	<!-- tables -->
<link rel="stylesheet" type="text/css" href="css/table-style.css" />
<link rel="stylesheet" type="text/css" href="css/basictable.css" />
<script type="text/javascript" src="js/jquery.basictable.min.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
      $('#table').basictable();

      $('#table-breakpoint').basictable({
        breakpoint: 768
      });

      $('#table-swap-axis').basictable({
        swapAxis: true
      });

      $('#table-force-off').basictable({
        forceResponsive: false
      });

      $('#table-no-resize').basictable({
        noResize: true
      });

      $('#table-two-axis').basictable();

      $('#table-max-height').basictable({
        tableWrapper: true
      });
    });
</script>

	<section class="wrapper scrollable">
		<nav class="user-menu">
			<a href="javascript:;" class="main-menu-access">
			<i class="icon-proton-logo"></i>
			<i class="icon-reorder"></i>
			</a>
		</nav>
		<section class="title-bar">
			<!--<div class="logo">
				<h1><a href="index.php"><img src="images/logo1.png" alt="" />quiz</a></h1>
			</div>-->
			<!-- Topbar Start -->
				<div class="container-fluid d-none d-lg-block">
					<div class="row align-items-center py-2 px-xl-2">
						<div class="col-lg-2">
							<a href="" class="text-decoration-none">
								<h1 class="m-0"><span class="text-primary">Q</span>uiz</h1>
							</a>
						</div>
					</div>
				</div>
				
				<!-- Topbar End -->
			
			
			<div class="profile_details">		
						<ul>
							<li class="dropdown profile_details_drop">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
									<div class="profile_img">	
										<span class="prfil-img"><i class="fa fa-user" aria-hidden="true"></i></span> 
										<div class="clearfix"></div>	
									</div>	
								</a>
								<ul class="dropdown-menu drp-mnu">
									
									<li> <a href="logout.php"><i class="fa fa-sign-out"></i> Logout</a> </li>
								</ul>
							</li>
						</ul>
					</div>
					<div class="clearfix"> </div>
				
			<div class="clearfix"> </div>
		</section>
	