<?php
include_once('config.php');
if($_SERVER['REQUEST_METHOD']=="POST"){

if(isset($_POST['update_aff_course'])){
    
$course_id = rand(000000 , 999999);
$affiliate_title=cleaninput($_POST['affiliate_title']);
$price=cleaninput($_POST['price']);
$description=cleaninput($_POST['description']);
$url=cleaninput($_POST['url']);




    $sql= $conn->query("UPDATE affiliate_course SET affiliate_title='$affiliate_title', price='$price' , description='$description', url='$url' WHERE  course_id='$course_id'");
    
    header("location: manage_aff_course.php");
    

// }else{
//     if(isset($_POST['create_amz_course'])){
    
//         $course_id = rand(000000 , 999999);
//         $amazon_title=cleaninput($_POST['amazon_title']);
//         $prices=cleaninput($_POST['prices']);
//         $description=cleaninput($_POST['description']);
//         $url=cleaninput($_POST['url']);
        
//             $sql= $conn->query("UPDATE amazon SET course_id=$course_id, amazon_title='$amazon_title', prices='$prices' , description='$description', url='$url'");
            
//             header("location: manage_amz_course.php");

// }else{
//     if(isset($_POST['create_testimonies'])){


//         $tes_id = rand(000000 , 999999);
//         $target_dir = "testimonies/";
//         $target_file = $target_dir . basename($_FILES["tes_img"]["name"]);
//         $uploadOk = true;
//         $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
        
//         // Check if image file is a actual image or fake image
//         if(isset($_POST["create_testimonies"])) {
//         $check = getimagesize($_FILES["tes_img"]["tmp_name"]);
//         if($check !== false) {
//             // echo "File is an image - " . $check["mime"] . ".";
//             $uploadOk = true;
//         } else {
//             $_SESSION['mgs'] = '
//                 <div class="alert alert-danger alert-dismissible fade show" role="alert">
//                 <strong>File is not an image...</strong> 
//                 <button type="button" class="close" data-dismiss="alert" aria-label="Close">
//                 <span aria-hidden="true">&times;</span>
//                 </button>
//             </div>';
//             $uploadOk = false;
//         }
//         }
        
//         // Check file size
//         if ($_FILES["tes_img"]["size"] > 50000000) {
//         $_SESSION['mgs'] = '
//         <div class="alert alert-danger alert-dismissible fade show" role="alert">
//         <strong>Sorry, your file is too large...</strong> 
//         <button type="button" class="close" data-dismiss="alert" aria-label="Close">
//           <span aria-hidden="true">&times;</span>
//         </button>
//         </div>';
//         $uploadOk = false;
//         }
        
//         // Allow certain file formats
//         if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
//         && $imageFileType != "gif" ) {
//         $_SESSION['mgs'] = '
//         <div class="alert alert-danger alert-dismissible fade show" role="alert">
//         <strong>Sorry, only JPG, JPEG, PNG & GIF files are allowed..</strong> 
//         <button type="button" class="close" data-dismiss="alert" aria-label="Close">
//           <span aria-hidden="true">&times;</span>
//         </button>
//         </div>';
//         $uploadOk = false;
//         }
        
//         // Check if $uploadOk is set to 0 by an error
//         if ($uploadOk == false) {
//         $_SESSION['mgs'] = '
//         <div class="alert alert-danger alert-dismissible fade show" role="alert">
//         <strong>Sorry, your file was not uploaded.</strong> 
//         <button type="button" class="close" data-dismiss="alert" aria-label="Close">
//           <span aria-hidden="true">&times;</span>
//         </button>
//         </div>';
//         // if everything is ok, try to upload file
//         } else {
//         if (move_uploaded_file($_FILES["tes_img"]["tmp_name"], $target_file)) {
//             // echo "The file ". htmlspecialchars( basename( $_FILES["tes_img"]["name"])). " has been uploaded.";
//         } else {
//              $_SESSION['mgs'] = '
//             <div class="alert alert-danger alert-dismissible fade show" role="alert">
//             <strong>Sorry, there was an error uploading your file</strong> 
//             <button type="button" class="close" data-dismiss="alert" aria-label="Close">
//               <span aria-hidden="true">&times;</span>
//             </button>
//           </div>';
//         }
//         }
        
        
//         if($uploadOk === true){
        
//             $sql= $conn->query("UPDATE testimonies SET tes_id='$tes_id' , tes_img='$target_file' ");
            
//             header("location: testimonies.php");
            
//         }else{
//             $_SESSION['mgs'] = '
//             <div class="alert alert-danger alert-dismissible fade show" role="alert">
//             <strong>Sorry, there was an error Uploading this file</strong> 
//             <button type="button" class="close" data-dismiss="alert" aria-label="Close">
//               <span aria-hidden="true">&times;</span>
//             </button>
//           </div>';
//           header("location: testimonies.php");
        
          
//         }
//     }
// }
}
}
?>