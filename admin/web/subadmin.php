<?php
include_once('header.php');
?>
  <!-- Left side column. contains the logo and sidebar -->
  <?php
   include_once('navbar.php'); 
  ?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
	  <div class="container-full">
		<!-- Content Header (Page header) -->
		<div class="content-header">
			<div class="d-flex align-items-center">
			<div class="col-12 mr-auto">
				  <div class="box">
					<div class="box-body">
						<div class="d-md-flex d-block align-items-center justify-content-between">
					  		<h4 class="box-title mb-md-0 mb-20">Create Sub-Admin</h4>
                <?php if(isset($_SESSION['mgs'])){ echo $_SESSION['mgs']; }?>
					       <!-- <a href="profile.php" class="my-3">Profile Page</a> -->
						</div>
					</div>
				  </div>
				</div>
				
			</div>
		</div>
         <center>
         <!-- <div class="container-fluid ">-->
            <div class="container"> 
            <div class="container h-p100">
		<div class="row align-items-center justify-content-md-center h-p100">
			
			<div class="col-12">
				<div class="row justify-content-center no-gutters">
					<div class="col-lg-5 col-md-5 col-12">
						<div class="bg-white rounded30 shadow-lg">
							<div class="content-top-agile p-20 pb-0">
								<h2 class="text-primary">Create Sub-Admin</h2>						
							</div>
							<div class="p-40">
								<form action="action.php" method="post">
									<div class="form-group">
										<div class="input-group mb-3">
											<div class="input-group-prepend">
												<span class="input-group-text bg-transparent"><i class="ti-user"></i></span>
											</div>
											<input type="text" class="form-control pl-15 bg-transparent" placeholder="Full Name" name="flname" required>
										</div>
									</div>
									<div class="form-group">
										<div class="input-group mb-3">
											<div class="input-group-prepend">
												<span class="input-group-text bg-transparent"><i class="ti-email"></i></span>
											</div>
											<input type="email" class="form-control pl-15 bg-transparent" placeholder="Email" name="email" required>
										</div>
									</div>
									<div class="form-group">
										<div class="input-group mb-3">
											<div class="input-group-prepend">
												<span class="input-group-text bg-transparent"><i class="ti-lock"></i></span>
											</div>
											<input type="password" class="form-control pl-15 bg-transparent" placeholder="Password" name="password" required>
										</div>
									</div>
									<div class="form-group">
										<div class="input-group mb-3">
											<div class="input-group-prepend">
												<span class="input-group-text bg-transparent"><i class="ti-lock"></i></span>
											</div>
											<input type="password" class="form-control pl-15 bg-transparent" placeholder="Retype Password" name="cpassword" required>
										</div>
									</div>
									  <div class="row">
									
										<!-- /.col -->
										<div class="col-12 text-center">
										  <button type="submit" name="register" class="btn btn-info  w-100 margin-top-10">SIGN IN</button>
										</div>
										<!-- /.co -->
									  </div>
								</form>	
							</div>
						</div>
                        <br />
					</div>
				</div>
			</div>			
		</div>
	</div>
</div>
<!-- </div> -->
		<!-- Main content -->
		
		<!-- /.content -->
	  </div>
  </div>
 
<?php
 include_once('footer.php')
?>

	</script>
	<!-- Vendor JS -->
	<script src="js/vendors.min.js"></script>
	<script src="js/pages/chat-popup.js"></script>
    <script src="../assets/icons/feather-icons/feather.min.js"></script>	<script src="../assets/vendor_components/ckeditor/ckeditor.js"></script>
	<script src="../assets/vendor_plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.js"></script>
	
	<!-- Joblly App -->
	<script src="js/template.js"></script>
		
	<script src="js/pages/editor.js"></script>
	
</body>
</html>

