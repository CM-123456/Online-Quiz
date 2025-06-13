<?php
session_start();
	
	include"connection.php";
	if(isset($_POST['btnok']))
	{
		$nm=$_POST['nmtxt'];
		$em=$_POST['emtxt'];
		$pw=$_POST['pwtxt'];
		$cn=$_POST['cntxt'];
		$ed=$_POST['edtxt'];
		
		
		$q="INSERT into user_registration values('','$nm','$em','$pw','$cn','$ed')";
		$c=mysqli_query($con,$q);
		
		if($c)
		{
			?>
			<script>
				alert("Successfully Registered");
				window.location="login.php";
			</script>
			<?php
		}
		else
		{
			?>
			<script>
				alert("Something goes wrong... Please try again...");
				window.location="registration.php";
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
                <div class="d-inline-flex text-white">
                    <i class="fa fa-angle-double-right pt-1 px-3"></i>
                    <h3 class="display-4 text-white text-uppercase">Registration</h3>
                </div>
            </div>
        </div>
    </div>
<!-- Header End -->



<div class="container-fluid py-2">
        <div class="container py-2">
			<div class="text-center mb-5">
                <h1>User Registration</h1>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="contact-form bg-secondary rounded p-5">
                        <div id="success"></div>
                        <form action="#" method="post">
                            <div class="control-group">
                                <input type="text" class="form-control border-0 p-4" name="nmtxt" placeholder="Enter  User Name" required="required" data-validation-required-message="Please enter your name" />
                                <p class="help-block text-danger"></p>
                            </div>
							<div class="control-group">
                                <input type="text" class="form-control border-0 p-4" name="emtxt" placeholder="Enter Your E-mail" required="required" data-validation-required-message="Please enter your e-mail" />
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="control-group">
                                <input type="password" class="form-control border-0 p-4" name="pwtxt" placeholder="Enter Your Password" required="required" data-validation-required-message="Please enter a password" />
                                <p class="help-block text-danger"></p>
                            </div>
							<div class="control-group">
                                <input type="text" class="form-control border-0 p-4" name="cntxt" placeholder="Enter Your Contact-No." required="required" data-validation-required-message="Please enter your contact-no." />
                                <p class="help-block text-danger"></p>
                            </div>
							<div class="control-group">
                                <input type="text" class="form-control border-0 p-4" name="edtxt" placeholder="Enter Your Education" required="required" data-validation-required-message="Please enter your education" />
                                <p class="help-block text-danger"></p>
                            </div></br>
							<div class="text-center">
                                <button class="btn btn-primary py-3 px-5" type="submit" name="btnok" id="sendMessageButton">Register</button>
								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
								<button class="btn btn-primary py-3 px-5" type="reset" name="btncl" id="sendMessageButton">Cancel</button>
							 </div></br>
						</form>
                    </div>
                </div>
            </div>
        </div>
    </div>



   
<?php
	include"footer1.php";
?>