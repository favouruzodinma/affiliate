<?php
include_once('header.php');
include_once('navbar.php');
?>
 
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
	  <div class="container-full">
	  <div class="content-header">
			<div class="d-flex align-items-center">
			<div class="col-12 mr-auto">
				  <div class="box">
					<div class="box-body">
						<div class="d-md-flex d-block align-items-center justify-content-between">
							<?php $userid=$_SESSION['userid'];
							$sql= $conn->query(" SELECT * FROM admin WHERE userid='$userid'");
							if($sql->num_rows>0){
								while($row=$sql->fetch_assoc()){?>
					  		<h4 class="box-title mb-md-0 mb-20"><span class="text-primary">Welcome</span> <?php echo $row['flname']; ?>&#128526&#128526&#128526</h4>
							  <p class="mb-0 text-fade pr-10 pt-5"><?php echo "Today is " .  date(" D, d M Y") . "<br>";?>
								</p>
									<?php }} ?>
						</div>
					</div>
				  </div>
				</div>
				
			</div>
		</div>
		<!-- Main content -->
		<section class="content">
			<div class="row">
				<div class="col-xl-12 col-12">
					<div class="row">
						<div class="col-lg-4 col-12">
							<div class="box">
								<div class="box-body py-4">
									<div class="d-flex justify-content-between align-items-center">
										<div>
											<h5 class="text-bold "><a href="manage_aff_course.php" class="text-dark">Affiliate Courses</a></h5>
											<h2 class="font-weight-500 mb-0"><?php echo $conn->query("SELECT * FROM affiliate_course") ->num_rows; ?></h2>
										</div>
										
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-12">
							<div class="box">
								<div class="box-body py-4">
									<div class="d-flex justify-content-between align-items-center">
										<div>
											<h5 class="text-bold"><a href="manage_amz_course.php" class="text-dark">Amazon Courses</a></h5>
											<h2 class="font-weight-500 mb-0"><?php echo $conn->query("SELECT * FROM amazon") ->num_rows; ?></h2>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-12">
							<div class="box">
								<div class="box-body py-4">
									<div class="d-flex justify-content-between align-items-center">
										<div>
											<h5 class="text-bold"><a href="testimonies.php" class="text-dark">Testimonies</a></h5>
											<h2 class="font-weight-500 mb-0"><?php echo $conn->query("SELECT * FROM testimonies") ->num_rows; ?></h2>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>	
				<div class="col-lg-4 col-12">
							<div class="box logout-box">
								<div class="box-body py-4">
									<div class="d-flex justify-content-between align-items-center">
										<div>
											<h5 class="text-bold"><a href="logout.php" class="text-dark">Logout</a></h5>
										</div>
										<a href="logout.php"><i class="fa fa-sign-out "><span class="path1"></span><span class="path2"></span><span class="path3"></span></i></a>
									</div>
								</div>
							</div>
						</div>			
			</div>
		</section>
		<!-- /.content -->
	  </div>
  </div>
  <!-- /.content-wrapper -->
 <?php
  include_once ('footer.php');
 ?>

  <!-- Add the sidebar's background. This div must be placed immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
  
</div>
<!-- ./wrapper -->
	
		
	<!-- Page Content overlay -->
	
	
	<?php
	include_once('scripts.php');
	?>
	
</body>
</html>
