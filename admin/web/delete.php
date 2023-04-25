<?php
include_once('config.php');

if(isset($_GET['id'])){
    //  echo $_GET['id'].' Status:'.$GET['status'];
    $course_id= $_GET['id'];
    
    if($_GET['status']=='delete'){
        // delete user account
        $sql=$conn->query("DELETE FROM affilite_course WHERE course_id='$id'");
        header('Location: manage_aff_course.php?status=delete'); 
       
    
    }else{
        $amz_id= $_GET['id'];

        if($_GET['status']=='delete'){
            // delete user account
            $sql=$conn->query("DELETE FROM amazon WHERE course_id='$id'");
            header('Location: manage_amz_course.php?status=delete'); 
    } else{
        $tes_id= $_GET['id'];

        if($_GET['status']=='delete'){
            // delete user account
            $sql=$conn->query("DELETE FROM testimonies WHERE tes_id='$id'");
            header('Location: testimonies.php?status=delete'); 
    }}
}
}