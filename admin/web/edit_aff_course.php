<?php
include_once('header.php')
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
					  		<h4 class="box-title mb-md-0 mb-20 mr-30">Edit Affiliate Course</h4>
							<a href="manage_aff_course.php"  class="btn popup-with-form btn-primary"> <i class="fa fa-arrow-left"></i> Back</a>
						</div>
					</div>
				  </div>
				</div>
				
			</div>
		</div>

		<!-- Main content -->
        <div class="container-fluid">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">
			<div class="modal-body">
				<!-- /.box-header -->
                <?php
                $course_id=$_GET['id'];
                $sql = $conn->query("SELECT * FROM affiliate_course WHERE course_id='$course_id'");
                if($sql->num_rows>0){
                while($row=$sql->fetch_assoc()){     
                ?> 
						<div class="box-body">
						<form method="POST" action="update.php">
							<div class="form-group">
									<input type="hidden" value="<?php echo $row['course_id'] ?>">
										<label class="control-label" for="inputEmail">Edit Affiliate title</label>
										<input type="text" class="form-control" name="affiliate_title" value="<?php echo $row['affiliate_title'] ?>" required="">
									</div>
									<div class="form-group">
										<label class="control-label" for="inputEmail">Edit Course Price</label>
										<input type="number" class="form-control"  name="price" value="<?php echo $row['price'] ?>" required="">
									</div>
									<div class="form-group">
										<label class="control-label" for="inputEmail">Edit Course Url</label>
										<input type="url" class="form-control" name="url" value="<?php echo $row['url'] ?>" required="">
									</div>
								<label class="control-label" for="inputEmail">Edit Affiliate Description</label>
								<textarea class="textarea" id="editor1" name="description" value=""
										style="width: 100%; height: 100px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"><?php echo $row['description'] ?></textarea>
										<div class="modal-footer">
								<button type="submit" name="update_aff_course" class="btn btn-primary">Update Course</button>
							</div>
						</form>
					</div>
                    <?php }} ?>
			</div>
			
			</div>
		</div>
		<!-- /.content -->
	  </div>
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

