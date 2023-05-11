<?php
include_once('config.php');
if($_SERVER['REQUEST_METHOD']=="POST"){
    if(isset($_POST['update_aff_course'])){
        $course_id= cleaninput($_POST['course_id']);
        $affiliate_title=cleaninput($_POST['affiliate_title']);
        $price=cleaninput($_POST['price']);
        $description=cleaninput($_POST['description']);
        $url=cleaninput($_POST['url']);
    
        $sql= $conn->query("UPDATE affiliate_course SET affiliate_title='$affiliate_title', price='$price' , description='$description', url='$url' WHERE  course_id='$course_id'");
        
        header("location: manage_aff_course.php");
}else{
    if(isset($_POST['update_amz_course'])){
        $course_id= cleaninput($_POST['course_id']);
        $amazon_title=cleaninput($_POST['amazon_title']);
        $prices=cleaninput($_POST['prices']);
        $description=cleaninput($_POST['description']);
        $url=cleaninput($_POST['url']);
    
        $sql= $conn->query("UPDATE amazon SET amazon_title='$amazon_title', prices='$prices' , description='$description', url='$url' WHERE  course_id='$course_id'");
        
        header("location: manage_amz_course.php");
}else{
    
}
}
}
?>