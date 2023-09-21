<?php 
$id=$_GET['id'];
require('../dashboard/majorsdb.php');
session_start();
$major=($db->getData("majors", "title"));
if($major==true){
    $db->deleteData("majors","id=$id");
    $_SESSION['error']="data deleted sucessfully";
    header("location:../dashboard/majors.php");
    die;
}
else{
    
    $_SESSION['error']="data not exist";
    header("location:../dashboard/majors.php");
    die;
}
