<?php

	session_start();
	include"connection.php";
	if(isset($_POST['btnok']))
	{
		$un=$_POST['untxt'];
		$pw=$_POST['pwtxt'];
		
		$q="SELECT * from admin_login where a_name='$un' AND a_password='$pw'";
		$c=mysqli_query($con,$q);
		$r=mysqli_num_rows($c);
		if($r>=1)
		{
			$_SESSION['admin']=$un;
			?>
			<script>
				alert("Successfully Login");
				window.location="index.php";
			</script>
			<?php
		}
		else
		{
			?>
			<script>
				alert("Invalid Username and Password...");
				window.location="login.php";
			</script>
			<?php
		}
	}
?>
<html>
<head>
<title>Admin Login</title>
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
</head>
<body class="signup-body">
		<div class="agile-signup">	
			
			<div class="content2">
				<div class="grids-heading gallery-heading signup-heading">
					<h2>Admin Login</h2>
				</div>
				<form action="#" method="post">
					<input type="text" name="untxt">
					<input type="password" name="pwtxt">
					</br></br>
					<input type="submit" name="btnok" value="Login">
					<input type="reset" name="btncl" value="Cancel">
				</form>
				<div class="signin-text">
					<div class="text-left">
						<p><a href="#"> Forgot Password? </a></p>
					</div>
					<div class="clearfix"> </div>
				</div>
				<h5>- OR -</h5>
				<div class="footer-icons">
					<ul>
						<li><a href="#" class="twitter"><i class="fa fa-twitter"></i></a></li>
						<li><a href="#" class="twitter facebook"><i class="fa fa-facebook"></i></a></li>
						<li><a href="#" class="twitter chrome"><i class="fa fa-google-plus"></i></a></li>
						<li><a href="#" class="twitter dribbble"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
					</ul>
				</div>
			</div>
		</div>
			
			<!-- footer -->
<?php
	include "footer.php";
?>