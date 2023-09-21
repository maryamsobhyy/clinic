<?php
$id=$_GET['id'];
require('../dashboard/majorsdb.php');
session_start();
$doctor=($db->getData("doctors", "name,bio"));
if($doctor==true){
    $db->deleteData("doctors","id=$id");
    $_SESSION['error']="doctor deleted sucessfully";
    header("location:../dashboard/majors.php");
    die;
}
else{
    
    $_SESSION['error']="doctor not exist";
    header("location:../dashboard/majors.php");
    die;
}

?>