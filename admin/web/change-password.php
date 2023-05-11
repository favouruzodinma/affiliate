<?php
include 'config.php';

if(isset($_GET['reset'])){ 
	$reset= $_GET['reset'];
	if (mysqli_num_rows(mysqli_query($conn, "SELECT * FROM admin WHERE code='reset'")>0)) {
	 if (isset($_POST['SaveNewPass'])) {
		 $password=md5(cleaninput($_POST['password']));
		 $cpassword=md5(cleaninput($_POST['cpassword']));
 
		 if($password == $cpassword){
		 $query = mysqli_query( $conn, "UPDATE admin SET password='$password', code='' WHERE code='reset'");
		 if ($query) {
			 header('location:login.php');
		 }
		 }else{
			 $_SESSION['mgs'] = '
			 <div class="alert alert-danger alert-dismissible fade show" role="alert" timer: 2000,>
			 <strong>New Password and Confirm Password dont Match !!</strong> 
			 <button type="button" class="close" data-dismiss="alert" aria-label="Close">
			   <span aria-hidden="true">&times;</span>
			 </button>
		   </div>';
		 }
	 }
	}else{
	 $_SESSION['mgs'] = "
	 <div class='alert alert-danger alert-dismissible fade show' role='alert'>
	 <strong>Reset Link Doesn't match</strong> 
	 <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
	   <span aria-hidden='true'>&times;</span>
	 </button>
   </div>";
	 header("Location:change-password.php");
	}
  }else {
	//  header('location:forgettenpwd.php');
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
    <link rel="icon" href="../images/favicon.ico">

    <title>Findo - Log in </title>
  
	<!-- Vendors Style-->
	<link rel="stylesheet" href="css/vendors_css.css">
	  
	<!-- Style-->  
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/skin_color.css">	

</head>
	
<body class="hold-transition theme-primary bg-img" style="background-image: url(../images/auth-bg/bg-1.jpg)">
	
	<div class="container h-p100">
		<div class="row align-items-center justify-content-md-center h-p100">	
			
			<div class="col-12">
				<div class="row justify-content-center no-gutters">
					<div class="col-lg-5 col-md-5 col-12">
						<div class="content-top-agile p-20 pb-3">
							<span class="dark-logo"><img src="../images/logo-two.png" alt="logo"></span>					
						</div>
						<div class="bg-white rounded30 shadow-lg">
		
							<div class="p-40">
								<form action="#" method="post">
								<div class="content-top-agile p-20 pb-3">
									<?php  echo isset($_SESSION['mgs'])?$_SESSION['mgs']:""?>	
									<h3>Change Password</h3>					
								</div>
									<div class="form-group">
										<div class="input-group mb-3">
											<div class="input-group-prepend">
												<span class="input-group-text  bg-transparent"><i class="ti-lock"></i></span>
											</div>
											<input type="password" class="form-control pl-15 bg-transparent" name="password" placeholder="Input Your New Password" required>
										</div>
										<div class="form-group">
										<div class="input-group mb-3">
											<div class="input-group-prepend">
												<span class="input-group-text  bg-transparent"><i class="ti-lock"></i></span>
											</div>
											<input type="password" class="form-control pl-15 bg-transparent" name="cpassword" placeholder="Confrim Your New Password" required>
										</div>
									</div>
									  <div class="row">
										<!-- /.col -->
										<div class="col-12 text-center">
										  <button type="submit" name="SaveNewPass" class="btn btn-primary mt-10">Change Password</button>
										</div>
										<!-- /.col -->
									  </div>
								</form>	
								<div class="text-center">
									<p class="mt-15 mb-0">Not	 my account? <a href="login.php" class="text-warning ml-5">Sign in</a></p>
								</div>	
							</div>						
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
<?php
	if(isset($_SESSION['mgs'])){
		unset($_SESSION['mgs']);
	}
?>

	<!-- Vendor JS -->
	<script src="js/vendors.min.js"></script>
	<script src="js/pages/chat-popup.js"></script>
    <script src="../assets/icons/feather-icons/feather.min.js"></script>	

</body>
</html>

