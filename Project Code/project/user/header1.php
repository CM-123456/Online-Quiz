<?php
	session_start();
	include "connection.php";
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

<body>
   
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

    <!-- Navbar Start -->
	 <div class="container-fluid">
        <div class="row border-top px-xl-5">
           
            <div class="col-lg-9">
                <nav class="navbar navbar-expand-lg bg-light navbar-light py-3 py-lg-0 px-0">
				<a href="" class="text-decoration-none d-block d-lg-none">
                        <h1 class="m-0"><span class="text-primary">Q</span>uiz</h1>
                    </a>
                    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                
					 <div class="collapse navbar-collapse" id="navbarSupportedContent">
					 <style="float:left">
						<ul class="navbar-nav ml-auto">
							<li class="nav-item active">
								<a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
							</li>
							<li class="nav-item @@about-active">
								<a class="nav-link" href="category.php">Category</a>
							</li>
							<li class="nav-item @@contact-active">
								<a class="nav-link" href="contact.php">Contact</a>
							</li>
							
							
						<?php 
						if(isset($_SESSION['user_id']))
						{ 
						?>
								<li class="nav-item @@services-active">
									<a class="nav-link" href="result.php">Result</a>
								</li>
								<li class="nav-item @@services-active">
										<a class="nav-link" href="logout.php">Logout</a>
								</li>
						<?php 
						}
						else
						{
						?>
								<li class="nav-item @@services-active">
										<a class="nav-link" href="login.php">Login</a>
								</li>
						<?php 
						}
						?>
						
						</ul>
					</div>
                </nav>
            </div>
		</div>
    </div>
    <!-- Navbar End -->


    <!-- Carousel Start -->
    <div class="container-fluid p-0 pb-5 mb-5">
        <div id="header-carousel" class="carousel slide carousel-fade" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#header-carousel" data-slide-to="0" class="active"></li>
                <li data-target="#header-carousel" data-slide-to="1"></li>
                <li data-target="#header-carousel" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active" style="min-height: 300px;">
                    <img class="position-relative w-100" src="img/carousel-1.jpg" style="min-height: 300px; object-fit: cover;">
                    <div class="carousel-caption d-flex align-items-center justify-content-center">
                        <div class="p-5" style="width: 100%; max-width: 900px;">
                            <h5 class="text-white text-uppercase mb-md-3">Best Online Quizs</h5>
                            <h1 class="display-3 text-white mb-md-4">Best Education From Your Home</h1>
                     </div>
                    </div>
                </div>
                <div class="carousel-item" style="min-height: 300px;">
                    <img class="position-relative w-100" src="img/carousel-2.jpg" style="min-height: 300px; object-fit: cover;">
                    <div class="carousel-caption d-flex align-items-center justify-content-center">
                        <div class="p-5" style="width: 100%; max-width: 900px;">
                            <h5 class="text-white text-uppercase mb-md-3">Best Online Quizs</h5>
                            <h1 class="display-3 text-white mb-md-4">Best Online Learning Platform</h1>
                         </div>
                    </div>
                </div>
                <div class="carousel-item" style="min-height: 300px;">
                    <img class="position-relative w-100" src="img/carousel-3.jpg" style="min-height: 300px; object-fit: cover;">
                    <div class="carousel-caption d-flex align-items-center justify-content-center">
                        <div class="p-5" style="width: 100%; max-width: 900px;">
                            <h5 class="text-white text-uppercase mb-md-3">Best Online Quizs</h5>
                            <h1 class="display-3 text-white mb-md-4">New Way To Learn From Home</h1>
                         </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Carousel End -->
	