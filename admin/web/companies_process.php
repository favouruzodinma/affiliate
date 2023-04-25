<?php
include_once('config.php');
if($_SERVER['REQUEST_METHOD']=="POST"){

if(isset($_POST['create_comp'])){


$userid = date("his").rand(000000 , 999999);
$comp_name=cleaninput($_POST['comp_name']);
$email=cleaninput($_POST['email']);
$username=cleaninput($_POST['username']);
$phone=cleaninput($_POST['phone']);
$country=cleaninput($_POST['country']);
$state=cleaninput($_POST['state']);
$city=cleaninput($_POST['city']);


$target_dir = "logos/";
$target_file = $target_dir . basename($_FILES["logo"]["name"]);
$uploadOk = true;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

// Check if image file is a actual image or fake image
if(isset($_POST["create_comp"])) {
$check = getimagesize($_FILES["logo"]["tmp_name"]);
if($check !== false) {
    // echo "File is an image - " . $check["mime"] . ".";
    $uploadOk = true;
} else {
    $_SESSION['mesge'] = '
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
if ($_FILES["logo"]["size"] > 50000000) {
$_SESSION['mesgg'] = '
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
$_SESSION['mesgt'] = '
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
$_SESSION['messt'] = '
<div class="alert alert-danger alert-dismissible fade show" role="alert">
<strong>Sorry, your file was not uploaded.</strong> 
<button type="button" class="close" data-dismiss="alert" aria-label="Close">
  <span aria-hidden="true">&times;</span>
</button>
</div>';
// if everything is ok, try to upload file
} else {
if (move_uploaded_file($_FILES["logo"]["tmp_name"], $target_file)) {
    // echo "The file ". htmlspecialchars( basename( $_FILES["logo"]["name"])). " has been uploaded.";
} else {
     $_SESSION['mess'] = '
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
    <strong>Sorry, there was an error uploading your file</strong> 
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>';
}
}


if($uploadOk === true){

    $sql= $conn->query("INSERT INTO company SET userid='$userid' , comp_name='$comp_name' , email='$email', username='$username', logo='$target_file' , phone='$phone' , country='$country', state='$state' , city='$city'");
    
    header("location: manage_company.php");
    
}else{
    $_SESSION['messa'] = '
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
    <strong>Sorry, there was an error Uploading this color</strong> 
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>';
  header("location: create_color.php");

  
}
}
}
?>