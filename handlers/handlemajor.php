<?php
session_start();
require('../dashboard/majorsdb.php');
if ($_SERVER['REQUEST_METHOD']=="POST"){
    $major=$_POST['major'];
    if(strlen($major)>5){
        ($db->insertData("majors", ['title'], [$major]));
        $_SESSION['sucess'] ="Major Add sucessfully";
        header("location:../dashboard/majors.php");
        die;


    }
    else{
        $_SESSION['error'] ="please enter a valid major";
        header("location:../dashboard/majors.php");
        die;
    }
}


?>