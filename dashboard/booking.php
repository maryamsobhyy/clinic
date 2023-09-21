<?php
$doctor_id=$_GET['id'];
session_start();
require('../dashboard/majorsdb.php');
if ($_SERVER['REQUEST_METHOD']=='POST'){
$name= $_POST['name'];
echo '<br>';
$email= $_POST['email'];
echo '<br>';
$phone= $_POST['phone'];
echo $name;
$book=($db->insertData("booking", ['name', 'email', 'phone','doctor_id'], ["$name", "$email","$phone","$doctor_id"]));
// header("location:../dashboard/view_bookings.php");
// die;
// echo $name;
// echo '<br>';
// echo $email;
// echo '<br>';
// echo $phone;
// echo '<br>';
// echo $doctor_id;
// echo '<br>';


}


?>