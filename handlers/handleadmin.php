<?php
session_start();
 require ("../validations2.php");
 require ("../database2.php");
if($valid->checkmethod("post")){
    $email=$_POST['email'];
    $password3=$_POST['password'];
            $data=$db2->getData("users","*","role='admin'");
            $email2=($data[0]['email']);
            if(count($data)==1){
                if ($email2==$email){
                    header("location:../dashboard/dashboard.php");
                    die;
                }
                else{
                    $_SESSION['error']="You are not a  admin";
                    header("location:../loginadmin.php");
                    die;
                }
                
            }
            else{
                $_SESSION['error']="You are not a  admin";
                header("location:../loginadmin.php");
                die;

            }

                
                

            }

?>