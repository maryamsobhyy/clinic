<?php
 require('../dashboard/majorsdb.php');
$id=$_GET['id'];
$name=$_POST['name'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$booking=$db->insertData("booking", ['name', 'email', 'phone','doctor_id'], [$name, $email, $phone,$id]);
if ($booking){
    echo "booking confirmation";
}

  
?>