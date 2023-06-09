<?php
include_once('header.php');

if(isset($_GET['id'])){
    $id= $_GET['id'];
    if($_GET['status']=='delete'){
        //? delete user account
        $sql=$conn->query("DELETE FROM testimonies WHERE tes_id='$id'");
        // header('Location: testimonies.php'); 
} }
 
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
					  		<h4 class="box-title mb-md-0 mb-20">Manage Testimonies</h4>
							<a href="#" data-toggle="modal" data-target="#staticBackdrop" class="btn popup-with-form btn-primary"><i class="fa fa-plus-circle"></i>Upload Testimonies</a>
						</div>
					</div>
				  </div>
				</div>
				
			</div>
		</div>

		<!-- Main content -->
		<section class="content">
		  <div class="row">
			<div class="col-12">          
			<div class="col-12">
				  <div class="box">
					<div class="box-body">
					<div class="table-responsive">
							  <table id="example2" class="table mb-0 w-p100">
                                <?php echo isset($_SESSION['mgs'])?$_SESSION['mgs']:""?>
								<thead>
									<tr>
										<th>----</th>
										<th>Testimonies Images</th>
										<th>Action</th>
									</tr>
								</thead>
								<?php
								$sql = $conn->query("SELECT * FROM testimonies");
								if($sql->num_rows>0){ 
											$num=1;
								while($row=$sql->fetch_assoc()){     
								?>  
								<tbody>
									<tr>
										<td><?php echo $num++;?></td>
										<td>
										<div class="d-flex align-items-center">											
										<div class="mr-25 rounded text-center b-1">
											<img src="<?php echo $row['tes_img']; ?>" style="height:90%; width:100px"  class="img-thumbnail" alt="">
										</div>
										</div>
										</td>
										<td>
                                        <a class="btn btn-danger dropdown-toggle" href="javascript:void(0)" data-toggle="modal" data-target="#delTestimonies<?php echo $row ['tes_id']; ?>">
                                            Delete
                                        </a>
                                        <!-- <a   class="btn btn-danger btn-circle btn-flat" >
                                            <i class="fa fa-trash"></i>
                                        </a> -->
										</td>
									</tr>	
									<!-- testimonies delete modal -->
									<div class="modal fade" id="delTestimonies<?php echo $row ['tes_id']; ?>" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
									<div class="modal-dialog modal-md">
										<div class="modal-content ">
										
										<div class="modal-body">
											<p class="text-center" style="font-size:35px">Are you sure?</p>
											<p class="text-center">You wont be able to recover file...</p>
										</div>
										<div class="modal-footer text-center">
											<button type="button" class="btn btn-outline-dark" data-dismiss="modal">Cancel</button>
											<a href="testimonies.php?id=<?php echo $row ['tes_id']; ?>&status=delete" type="button" name="delTes" class="btn btn-primary">Yes</a>
										</div>
										</div>
									</div>
									</div>	
								</tbody>			  
								<?php }}else { ?>
								<tr>
									<td colspan='6' class="text-bold">
										<span style="color:red;"> No result found!!</span>
									</td>
								</tr>
								<?php } ?>

							</table>
							</div>              
					</div>
				  </div>
				</div>

			</div>
			<!-- /.col-->
		  </div>
		  <!-- ./row -->
		</section>
		<!-- /.content -->
	  </div>
  </div>
  <!-- /.content-wrapper -->
  <div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-md">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel"><h4 class="box-title">Upload New Testimonies<br>
				  </h4></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
				<!-- /.box-header -->
				<div class="box-body">
				  <form method="POST" action="action.php"  enctype="multipart/form-data">
					  <div class="form-group">
							<label class="control-label" for="inputEmail">Upload testimonies</label>
							<input type="file" class="form-control"  name="tes_img" placeholder="Amazon Market" required="">
						</div>
						
						<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
						<button type="submit" name="create_testimonies" class="btn btn-primary">Create</button>
					</div>
				  </form>
			  </div>
      </div>
     
    </div>
  </div>
</div>

  <!-- Control Sidebar -->
 
<?php
 include_once('footer.php')
?>

	<!-- Vendor JS -->
	<script src="js/vendors.min.js"></script>
	<script src="js/pages/chat-popup.js"></script>
    <script src="../assets/icons/feather-icons/feather.min.js"></script>	<script src="../assets/vendor_components/ckeditor/ckeditor.js"></script>
	<script src="../assets/vendor_plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.js"></script>
    <script src="../assets/icons/feather-icons/feather.min.js"></script>	<script src="../assets/vendor_components/sweetalert/sweetalert.min.js"></script>
    <script src="../assets/vendor_components/sweetalert/jquery.sweet-alert.custom.js"></script>
	<!-- Joblly App -->
	<script src="js/template.js"></script>
		
	<script src="js/pages/editor.js"></script>
	
</body>
</html>

