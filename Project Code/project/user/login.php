<?php
	session_start();
	include"connection.php";
	if(isset($_POST['btnok']))
	{
		$nm=$_POST['nmtxt'];
		$pw=$_POST['pwtxt'];
		
		$q="SELECT * from user_registration WHERE u_name='$nm' AND u_password='$pw'";
		$c=mysqli_query($con,$q);
		$r=mysqli_num_rows($c);
		if($r>=1)
		{
			$_SESSION['user']=$un;
			while($rr=mysqli_fetch_array($c))
			{
				$_SESSION['user_id']=$rr['u_id'];
			}
			?>
			<script>
				alert("Successfully Sign-up");
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
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Welcome! to Online Quiz</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet"> 

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>


    <!-- Topbar Start -->
    <div class="container-fluid d-none d-lg-block">
        <div class="row align-items-center py-4 px-xl-5">
            <div class="col-lg-3">
                <a href="" class="text-decoration-none">
                    <h1 class="m-0"><span class="text-primary">Q</span>uiz</h1>
                </a>
            </div>
        </div>
    </div>
    <!-- Topbar End -->
	
<!-- Header Start -->
    <div class="container-fluid page-header" style="margin-bottom: 90px;">
        <div class="container">
            <div class="d-flex flex-column justify-content-center" style="min-height: 300px">
                <h4 class="display-4 text-white text-uppercase">LOGIN</h4>
                <div class="d-inline-flex text-white">
                    <p class="m-0 text-uppercase"><a class="text-white" href="index.php">Home</a></p>
                    <i class="fa fa-angle-double-right pt-1 px-3"></i>
                    <p class="m-0 text-uppercase">Login</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->


<div class="container-fluid py-2">
        <div class="container py-2">
            <div class="text-center mb-5">
                <h1>User Login</h1>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="contact-form bg-secondary rounded p-5">
                        <div id="success"></div>
                        <form action="#" method="post">
                            <div class="control-group">
                                <input type="text" class="form-control border-0 p-4" name="nmtxt" placeholder="Enter Your User Name" required="required" data-validation-required-message="Please enter your name" />
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="control-group">
                                <input type="password" class="form-control border-0 p-4" name="pwtxt" placeholder="Enter Your Password" required="required" data-validation-required-message="Please enter a password" />
                                <p class="help-block text-danger"></p>
                            </div>
							<div class="signin-text">
								<p></br><a href="#"> Forgot Password? </a></p>
								<div class="clearfix"> </div>
							</div></br>
                            <div class="text-center">
                                <button class="btn btn-primary py-3 px-5" type="submit" name="btnok" id="sendMessageButton">Sign up</button>
								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
								<button class="btn btn-primary py-3 px-5" type="reset" name="btncl" id="sendMessageButton">Cancel</button>
							 </div></br>
							 
							
								Not registered? <a href="registration.php" class="hyperlink">Create Account</a></br>
						</form>
                    </div>
                </div>
            </div>
        </div>
    </div>


<?php
	include"footer1.php";
?>