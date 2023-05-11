<?php
include_once('header.php');
if(isset($_GET['id'])){
  $id= $_GET['id'];
  if($_GET['status']=='delete'){
      //? delete user account
      $sql=$conn->query("DELETE FROM admin WHERE userid='$id'");
      header('location:../../index.php') ;
} }
?>
  <!-- Left side column. contains the logo and sidebar -->
  <?php
   include_once('navbar.php'); 
   if(isset($_POST['updatePass'])){
    $password=md5(cleaninput($_POST['password']));
    $newpassword=md5(cleaninput($_POST['newpassword']));
    $cnewpassword=md5(cleaninput($_POST['cnewpassword']));
    $email = $_SESSION['email'];
    $userid = $_SESSION['userid'];


    $sql = $conn->query("SELECT * FROM admin WHERE email='$email' AND password='$password'");
      if($sql->num_rows>0){
        if($newpassword === $cnewpassword){
            $sql = $conn->query("UPDATE admin SET password='$newpassword' WHERE email='$email' AND password='$password'");
            $_SESSION['mgs'] = '
            <div class="alert alert-success alert-dismissible fade show" role="alert" timer: 2000,>
            <strong>You Have Successfully  Updated your Password!!</strong> 
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>';
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
}

if(isset($_POST['updateProfile'])){
  $userid = $_SESSION['userid'];
  $flname=cleaninput($_POST['flname']);
  $email=cleaninput($_POST['email']);
  $phone=cleaninput($_POST['phone']);

  $sql= $conn->query("UPDATE admin SET flname='$flname', email='$email' , phone='$phone' WHERE  userid='$userid'");
  $_SESSION['mgs'] = '
  <div class="alert alert-success alert-dismissible fade show" role="alert" timer: 2000,>
  <strong>You Have Successfully  Updated your Profile!!</strong> 
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
  </div>';
}
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
					  		<h4 class="box-title mb-md-0 mb-20">Account Settings</h4>
                <?php if(isset($_SESSION['mgs'])){ echo $_SESSION['mgs']; }?>
					       <a href="profile.php" class="my-3">Profile Page</a>
						</div>
					</div>
				  </div>
				</div>
				
			</div>
		</div>
         <center>
         <!-- <div class="container-fluid ">-->
            <div class="container"> 
        <div class="card " style="width: 27rem;">
        <div class="card-body">
            <h5 class="card-title"><small class="text-danger">NB:Leave everything , if you dont want to change it!!!</small></h5>
            <div class="card-text">
              <?php 
              $userid = $_SESSION['userid'];
              $sql = $conn->query("SELECT * FROM admin  WHERE userid='$userid'  ");
              if($sql->num_rows>0){
              while($row=$sql->fetch_assoc()){  
              ?>
            <form method="POST" action="" class="">
            <div class="form-group">
                        <input type="hidden" name="userid" value="<?php  echo $row['userid'] ?>">
                        <label class="control-label" for="inputEmail">First Name</label>
                        <input type="text" class="form-control" name="flname" value="<?php echo $row['flname'] ?>">
                    </div>
                    <div class="form-group">
                        <label class="control-label text-left" for="inputEmail">Email</label>
                        <input type="email" class="form-control"  name="email" value="<?php  echo $row['email'] ?>">
                    </div>
                    <div class="form-group">
                        <label class="control-label text-left" for="inputEmail">Phone Number</label>
                        <input type="text" class="form-control"  name="phone" value="<?php  echo $row['phone'] ?>">
                    </div>
                    <div class="modal-footer ">
                <button type="submit" name="updateProfile" class="btn btn-outline-primary">Save Changes</button>
            </div>
        </form>
        <?php }}?>
        </div>
            <a href="#" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample" class="btn btn-primary mb-15 ">Click Here to Change Password</a>

            <div class="collapse my-5" id="collapseExample">
            <div class="card card-body">
            <form action="#" method="post">
                 <div class="form-group">
										<div class="input-group mb-3">
											<div class="input-group-prepend">
												<span class="input-group-text  bg-transparent"><i class="ti-lock"></i></span>
											</div>
											<input type="password" class="form-control pl-15 bg-transparent" name="password" placeholder="Old Password" required>
										</div>
									</div>
                  <div class="form-group">
										<div class="input-group mb-3">
											<div class="input-group-prepend">
												<span class="input-group-text  bg-transparent"><i class="ti-lock"></i></span>
											</div>
											<input type="password" class="form-control pl-15 bg-transparent" name="newpassword" placeholder=" New Password" required>
										</div>
									</div>
									<div class="form-group">
										<div class="input-group mb-3">
											<div class="input-group-prepend">
												<span class="input-group-text  bg-transparent"><i class="ti-lock"></i></span>
											</div>
											<input type="password" class="form-control pl-15 bg-transparent" name="cnewpassword" placeholder="Confirm New Password" required>
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
										<div class="col-12 text-center">
										  <button type="submit" name="updatePass" class="btn btn-outline-success mt-10">Save Changes</button>
										</div>
										<!-- /.col -->
									  </div>
								</form>	
            </div>
            </div>
        </div>
        </div>             
        </div>
       <!--  </div> -->
         </center>
         <?php 
         $sql = $conn->query("SELECT * FROM admin  WHERE userid='$userid'");
         if($sql->num_rows>0){
         while($row=$sql->fetch_assoc()){   
         ?>
         <div class="row">
          <div class="col-md-9">

          </div>
          <div class="col-md-3">
            <div class="col-12 text-center align-right">
								<a href="javascript:void(0)"  data-toggle="modal" data-target="#delAccount<?php echo $row ['userid']; ?>" class="btn btn-danger">Delete Account</a>
						</div>
            <!-- delete account btn  -->
            <div class="modal fade" id="delAccount<?php echo $row ['userid']; ?>" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
									<div class="modal-dialog modal-dialog-centered modal-md">
										<div class="modal-content ">
										
										<div class="modal-body">
											<p class="text-center" style="font-size:35px">Are you sure?</p>
											<p class="text-center">You wont be able to recover file...</p>
										</div>
										<div class="modal-footer text-center">
											<button type="button" class="btn btn-outline-dark" data-dismiss="modal">Cancel</button>
											<a href="setting.php?id=<?php echo $row ['userid']; ?>&status=delete" type="button" name="delAff" class="btn btn-primary">Yes delete it</a>
										</div>
										</div>
									</div>
									</div>
          </div>
         </div>
         <?php }} ?>
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

