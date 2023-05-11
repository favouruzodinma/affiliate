<?php
include_once('header.php');
?>
  <!-- Left side column. contains the logo and sidebar -->
  <?php
   include_once('navbar.php') 
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
					  		<h4 class="box-title mb-md-0 mb-20">Profile Page</h4>
							  <a href="setting.php" class="my-3">Edit Profile</a>
						</div>
					</div>
				  </div>
				</div>
				
			</div>
		</div>
		    <div class="container">
	         	<div class="box box-widget widget-user">
					<!-- Add the bg color to the header using any of the bg-* classes -->
					<div class="widget-user-header bg-black" style="background: url('../images/gallery/full/10.jpg') center center;">
					  <h6 class="widget-user-desc">Findo Affiliate Marketing</h6>
					</div>
					<?php 
					$userid = $_SESSION['userid'];
					$sql = $conn->query("SELECT * FROM admin  WHERE userid='$userid' ");
					if($sql->num_rows>0){
					while($row=$sql->fetch_assoc()){  
					?>
					<input type="hidden" name="userid" value="<?php echo $row ['userid'];?>">
					<div class="widget-user-image">
					  <img class="rounded-circle" src="../images/avatar/avatar-13.png" alt="Profile Avatar">
					</div>
					<div class="box-footer">
					  <div class="row">
						<div class="col-sm-4">
						  <div class="description-block">
							<h5 class="description-header text-primary">Full Name</h5>
							<h3 class="widget-user-username"><?php  echo $row['flname'] ?></h3>

						  </div>
						  <!-- /.description-block -->
						</div>
						<!-- /.col -->
						<div class="col-sm-4 br-1 bl-1">
						  <div class="description-block">
							<h5 class="description-header text-primary">Email</h5>
							<h3 class="widget-user-username"><?php  echo $row['email'] ?></h3>
						  </div>
						  <!-- /.description-block -->
						</div>
						<!-- /.col -->
						<div class="col-sm-4">
						  <div class="description-block">
							<h5 class="description-header text-primary">Phone No</h5>
							<h3 class="widget-user-username"><?php  echo $row['phone'] ?></h3>
						  </div>
						  <!-- /.description-block -->
						</div>
						<!-- /.col -->
						<?php }}?>
					  </div>
					  <!-- /.row -->
					</div>
				  </div>
			  </div>
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

