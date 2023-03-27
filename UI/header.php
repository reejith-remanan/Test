<!DOCTYPE html>
<html lang="en">
<?php

 session_start();
 error_reporting(0);
?>
<head>
    <meta charset="utf-8">
    <title>ECOURSES - Online Courses HTML Template</title>
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
                    <h1 class="m-0"><span class="text-primary">image</span>captions</h1>
                </a>
            </div>
              <div class="col-lg-9">
                <nav class="navbar navbar-expand-lg bg-light navbar-light py-3 py-lg-0 px-0">
                    <a href="" class="text-decoration-none d-block d-lg-none">
                        <h1 class="m-0"><span class="text-primary">image</span>Captions</h1>
                    </a>
                    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                        <span class="navbar-toggler-icon"></span>
                    </button>
					  <?php
						   
						  
						   if($_SESSION['type']=='admin')
						   {
							
						   ?>
					
					
					
                    <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                        <div class="navbar-nav py-0">
                            <a href="index.php" class="nav-item nav-link active">Home</a>
                            <a href="viewuser.php" class="nav-item nav-link">viewuser</a>
                                </div>
                         
                        <a class="btn btn-primary py-2 px-4 ml-auto d-none d-lg-block" href="logout.php">logout</a>
                    </div>
						 <?php
						   }
						   elseif($_SESSION['type']=='user')
						   {
						   ?>
					                    <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                        <div class="navbar-nav py-0">
                            <a href="index.php" class="nav-item nav-link active">Home</a>
                            <a href="upload.php" class="nav-item nav-link">upload</a>
                            <a href="viewuser.php" class="nav-item nav-link">profile</a>
                            
                        </div>
                        <a class="btn btn-primary py-2 px-4 ml-auto d-none d-lg-block" href="logout.php">logout</a>
                    </div>
					 <?php
						   }
						   else 
						   {
						   
						   ?>	
					  <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                        <div class="navbar-nav py-0">
                            <a href="index.php" class="nav-item nav-link active">Home</a>
                            <a href="register.php" class="nav-item nav-link">register</a>
                            <a href="login.php" class="nav-item nav-link">login</a>
                        </div>
                    </div>
					
                </nav>
            </div>
           
             <?php
						   }
						   ?>
        </div>
    </div>
    <!-- Topbar End -->


  