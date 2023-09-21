<?php
session_start();
require('../dashboard/majorsdb.php');
if ($_SERVER['REQUEST_METHOD']=='POST'){
$name= $_POST['name'];
echo '<br>';
$major_id= $_POST['major_id'];
echo '<br>';
$bio= $_POST['bio'];
$data=$db->insertData("doctors", ['name', 'bio', 'major_id'], ["$name", "$bio","$major_id"]);
if  ($data){
    $_SESSION['sucess']="Doctor add sucessfully";
    header("location:./adddoctors.php");
    die;
}

}
?>