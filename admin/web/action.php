<?php
include_once('config.php');

if($_SERVER['REQUEST_METHOD']=="POST"){

if(isset($_POST['create_aff_course'])){
    
$course_id = rand(000000 , 999999);
$affiliate_title=cleaninput($_POST['affiliate_title']);
$price=cleaninput($_POST['price']);
$description=cleaninput($_POST['description']);
$url=cleaninput($_POST['url']);




    $sql= $conn->query("INSERT INTO affiliate_course SET course_id=$course_id, affiliate_title='$affiliate_title', price='$price' , description='$description', url='$url'");
    
    header("location: manage_aff_course.php");
    

}else{
    if(isset($_POST['create_amz_course'])){
    
        $course_id = rand(000000 , 999999);
        $amazon_title=cleaninput($_POST['amazon_title']);
        $prices=cleaninput($_POST['prices']);
        $description=cleaninput($_POST['description']);
        $url=cleaninput($_POST['url']);
        
            $sql= $conn->query("INSERT INTO amazon SET course_id=$course_id, amazon_title='$amazon_title', prices='$prices' , description='$description', url='$url'");
            
            header("location: manage_amz_course.php");

}else{
    if(isset($_POST['create_testimonies'])){


        $tes_id = rand(000000 , 999999);
        $target_dir = "testimonies/";
        $target_file = $target_dir . basename($_FILES["tes_img"]["name"]);
        $uploadOk = true;
        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
        
        // Check if image file is a actual image or fake image
        if(isset($_POST["create_testimonies"])) {
        $check = getimagesize($_FILES["tes_img"]["tmp_name"]);
        if($check !== false) {
            // echo "File is an image - " . $check["mime"] . ".";
            $uploadOk = true;
        } else {
            $_SESSION['mgs'] = '
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>File is not an image...</strong> 
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>';
            $uploadOk = false;
        }
        }
        
        // Check file size
        if ($_FILES["tes_img"]["size"] > 50000000) {
        $_SESSION['mgs'] = '
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Sorry, your file is too large...</strong> 
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        </div>';
        $uploadOk = false;
        }
        
        // Allow certain file formats
        if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
        && $imageFileType != "gif" ) {
        $_SESSION['mgs'] = '
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Sorry, only JPG, JPEG, PNG & GIF files are allowed..</strong> 
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        </div>';
        $uploadOk = false;
        }
        
        // Check if $uploadOk is set to 0 by an error
        if ($uploadOk == false) {
        $_SESSION['mgs'] = '
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Sorry, your file was not uploaded.</strong> 
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        </div>';
        // if everything is ok, try to upload file
        } else {
        if (move_uploaded_file($_FILES["tes_img"]["tmp_name"], $target_file)) {
            // echo "The file ". htmlspecialchars( basename( $_FILES["tes_img"]["name"])). " has been uploaded.";
        } else {
             $_SESSION['mgs'] = '
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Sorry, there was an error uploading your file</strong> 
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>';
        }
        }
        
        
        if($uploadOk === true){
        
            $sql= $conn->query("INSERT INTO testimonies SET tes_id='$tes_id' , tes_img='$target_file' ");
            
            header("location: testimonies.php");
            
        }else{
            $_SESSION['mgs'] = '
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Sorry, there was an error Uploading this file</strong> 
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>';
          header("location: testimonies.php");
        
          
        }
    }else{
      if(isset($_POST['register'])){
        $userid = md5(date("shi").rand(203994 , 485789));
        $code = cleaninput(md5(rand()));
        $flname = cleaninput($_POST['flname']);
       
       if(empty($_POST['email'])){
           $errEmail = "Email is required!!";
           $error = true;
       }elseif(!filter_var($_POST['email'],FILTER_VALIDATE_EMAIL)){
           $errEmail = "email is not valid";
           $error = true;
       }else{
           $email = cleaninput($_POST['email']);
           $sql = $conn->query("SELECT email FROM admin WHERE email ='$email' ");
       
           if($sql->num_rows>0){
               $errEmail = "Email is already taken!!";
               $error = true;
           }
       }
       
       if(empty($_POST ['password'])){
           $errPassword= "Password is required";
           $error = true;
       }elseif(strlen($_POST['password'])<6){
           $errpassword="password is too short!!";
           $error = true;
       }else{
           $password= cleaninput($_POST["password"]);
       }
       
       
       if(empty($_POST ['cpassword'])){
           $errCpassword= "Comfirm your password ";
           $error = true;
       }else{
           $cpassword= cleaninput($_POST["cpassword"]);
           if($password != $cpassword ){
               $errCpassword = "Password does not match";
               $error = true;
         
         
       }
           
       
           if ($error == false){
               
               $userid =date("ymdhms"); 
               $password = md5($password);
               $sql= $conn->query(" INSERT INTO admin SET userid='$userid', flname='$flname', email='$email', password='$password', code='$code'");
       
               header('Location:login.php');
       
       
               // if($sql){
               //     echo "<h1>successfull!</h1>";
               // }else{
               //     echo "<h1>fail!</h1>";
               // }
           }
       }
       
      }
    }
}
}
}
?>
http://localhost/Affiliate/admin\web\change_password.php?reset=
http://localhost/Affiliate/admin/web/change_password.php?reset=9c5f2d2e776ab10871a0fb4973626ada