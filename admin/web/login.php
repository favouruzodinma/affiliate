<?php
include 'config.php';
    if(isset($_POST['login'])){ 
     $email = cleaninput($_POST['email']);
  
     $password = md5(cleaninput($_POST['password']));
     
     $sql= $conn->query("SELECT * FROM admin WHERE  email= '$email' AND password = '$password'");

     if($sql->num_rows>0){
        $row = $sql->fetch_assoc ();
        $_SESSION['login']= true;
        $_SESSION['userid'] = $row['userid'];
        $_SESSION['email'] = $row['email'];
        $_SESSION['password'] = $row['password'];
      //  $_SESSION['type'] = $row['type'];

        header('Location:dashboard.php');
      }else{

       
        $_SESSION['mges'] = '
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Invalid Email or Password submitted!!</strong> 
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>';
        header("Location:login.php");
       }
  
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
									<?php echo isset($_SESSION['mges'])?$_SESSION['mges']:""?>						
								</div>
									<div class="form-group">
										<div class="input-group mb-3">
											<div class="input-group-prepend">
												<span class="input-group-text bg-transparent"><i class="ti-user"></i></span>
											</div>
											<input type="text" class="form-control pl-15 bg-transparent" name="email" placeholder="Email" required>
										</div>
									</div>
									<div class="form-group">
										<div class="input-group mb-3">
											<div class="input-group-prepend">
												<span class="input-group-text  bg-transparent"><i class="ti-lock"></i></span>
											</div>
											<input type="password" class="form-control pl-15 bg-transparent" name="password" placeholder="Password" required>
										</div>
									</div>
									  <div class="row">
										<div class="col-6">
										  <div class="checkbox">
											<input type="checkbox" id="basic_checkbox_1" >
											<label for="basic_checkbox_1">Remember Me</label>
										  </div>
										</div>
										<!-- /.col -->
										<div class="col-6">
										 <div class="fog-pwd text-right">
											<a href="forgettenpwd.php" class="hover-warning"><i class="ion ion-locked"></i> Forgot pwd?</a><br>
										  </div>
										</div>
										<!-- /.col -->
										<div class="col-12 text-center">
										  <button type="submit" name="login" class="btn btn-primary mt-10">SIGN IN</button>
										</div>
										<!-- /.col -->
									  </div>
								</form>	
								<!-- <div class="text-center">
									<p class="mt-15 mb-0">Don't have an account? <a href="register.php" class="text-warning ml-5">Sign Up</a></p>
								</div>	 -->
							</div>						
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
<?php
	if(isset($_SESSION['mges'])){
		unset($_SESSION['mges']);
	}
?>

	<!-- Vendor JS -->
	<script src="js/vendors.min.js"></script>
	<script src="js/pages/chat-popup.js"></script>
    <script src="../assets/icons/feather-icons/feather.min.js"></script>	

</body>
</html>
