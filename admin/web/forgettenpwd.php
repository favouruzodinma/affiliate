<?php
include 'config.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;


//Load Composer's autoloader
require 'vendor/autoload.php';

    if(isset($_POST['resetPass'])){ 
     $email = cleaninput($_POST['email']);
     $code = cleaninput(md5(rand()));
 if(mysqli_num_rows(mysqli_query($conn, "SELECT * FROM admin WHERE  email= '$email'")) >0){

    $query = mysqli_query( $conn, "UPDATE admin SET code='$code' WHERE email='$email'");
    if ($query) {
    echo "<div style='display: none';>";

    $mail = new PHPMailer(true);

    try {
        //Server settings
        $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
        $mail->isSMTP();                                            //Send using SMTP
        $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
        $mail->Username   = 'favourhenry05@gmail.com';                     //SMTP username
        $mail->Password   = 'godaboveall100';                               //SMTP password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
        $mail->Port       = 465;                                    //TCP port  to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
    
        //Recipients
        $mail->setFrom('Findo Affiliate');
        $mail->addAddress($email);

        //Content
        $mail->isHTML(true);                                  //Set email format to HTML
        $mail->Subject = 'no reply';
        $mail->Body    = 'Here is your password reset Link <b><a href="http://localhost/Affiliate/admin/web/change-password.php?reset='.$code.'">http://localhost/Affiliate/admin/web/change-password.php?reset='.$code.'</a></b>';
    
        $mail->send();
        echo 'Message has been sent';
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }

    echo "</div>";  
    $_SESSION['mgs'] = "
    <div class='alert alert-info alert-dismissible fade show' role='alert'>
    <strong> We've sent a reset link to your email-$email</strong> 
    <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
      <span aria-hidden='true'>&times;</span>
    </button>
  </div>"; 
  }
 }else{ 
        $_SESSION['mgs'] = "
        <div class='alert alert-danger alert-dismissible fade show' role='alert'>
        <strong>$email - This email is invalid..</strong> 
        <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
          <span aria-hidden='true'>&times;</span>
        </button>
      </div>";
        header("Location:forgettenpwd.php");
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

    <title>Findo - Reset Password </title>
  
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
                  <h3>Reset Password</h3>
									<?php echo isset($_SESSION['mgs'])?$_SESSION['mgs']:""?>						
								</div>
									<div class="form-group">
										<div class="input-group mb-3">
											<div class="input-group-prepend">
												<span class="input-group-text  bg-transparent"><i class="ti-email"></i></span>
											</div>
											<input type="email" class="form-control pl-15 bg-transparent" name="email" placeholder="Input Your Email" required>
										</div>
									</div>
									  <div class="row">
										<!-- /.col -->
										<div class="col-12 text-center">
										  <button type="submit" name="resetPass" class="btn btn-primary mt-10">Send Reset Link</button>
										</div>
										<!-- /.col -->
									  </div>
								</form>	
								<div class="text-center">
									<p class="mt-15 mb-0">Don't Think this is my account? <a href="login.php" class="text-warning ml-5">Sign in</a></p>
								</div>	
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
