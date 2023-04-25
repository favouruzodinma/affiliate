<?php
include_once('config.php');
if($_SESSION['login']!=true){
    header("location:login.php");
 }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href=".../affiliate_logo.png">

    <title>Findo - Admin_Dashboard</title>
    
	<!-- Vendors Style-->
	<link rel="stylesheet" href="css/vendors_css.css">
	  
	<!-- Style-->  
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/skin_color.css">
	<link rel="stylesheet" href="./sweetalert2.min.css">
     
	<style>
		.logout-box:hover{
			background-color:red;
		}
	</style>
  </head>

<body class="hold-transition light-skin sidebar-mini theme-primary">
	
<div class="wrapper">
	
  <header class="main-header">
	<div class="d-flex align-items-center logo-box justify-content-start">
		<a href="#" class="waves-effect waves-light nav-link d-none d-md-inline-block mx-10 push-btn bg-transparent" data-toggle="push-menu" role="button">
			<i data-feather="menu"></i>
		</a>	
		<!-- Logo -->
		<a href="index.php" class="logo">
		  <!-- logo-->
		  <div class="logo-lg">
			  <span class="light-logo"><img src="../images/logo.png " alt="logo"></span>
			  <span class="dark-logo"><img src="../images/logo.png" alt="logo"></span>
		  </div>
		</a>	
	</div>  
    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
	  <div class="app-menu">
		<ul class="header-megamenu nav">
			<li class="btn-group nav-item d-md-none">
				<a href="#" class="waves-effect waves-light nav-link push-btn" data-toggle="push-menu" role="button">
					<i data-feather="menu"></i>
			    </a>
			</li>
		</ul> 
	  </div>
		
      <div class="navbar-custom-menu r-side">
        <ul class="nav navbar-nav">	
		  <li class="btn-group nav-item d-lg-flex d-none align-items-center">
			
		  </li>
		  <li class="btn-group nav-item d-lg-inline-flex d-none">
			<a href="#" data-provide="fullscreen" class="waves-effect waves-light nav-link full-screen" title="Full Screen">
				<i data-feather="maximize"></i>
			</a>
		  </li>
          <!-- Control Sidebar Toggle Button -->	
		  <li class="btn-group nav-item d-inline-flex">
			<a href="profile.php"  class="waves-effect waves-light nav-link full-screen" title="User Profile"  aria-expanded="false">
				<i data-feather="user"></i>
			</a>
			<!-- <div class="dropdown-menu">
				<a class="dropdown-item" href="#">
				<i class="fa fa-user-circle"><span class="path1"></span><span class="path2"></span></i>
					<strong>Profile</strong></a>
				<a class="dropdown-item" href="#"> 
					<i class="fa fa-sign-out"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i>
					<strong>Logout</strong></a>
			</div> -->
		  </li>	
		
		
        </ul>
      </div>
    </nav>
  </header>
  
  