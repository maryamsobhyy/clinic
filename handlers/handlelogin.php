<?php
session_start();
require ('../dashboard/majorsdb.php');
if($_SERVER['REQUEST_METHOD']=='POST'){
    $email=$_POST['email'];
    $password=$_POST['password'];
    var_dump($data=($db->getData("users", "email,password","email='$email'")));
    if ($data){
        if($data[0]['password']=$password){
        header("location:../main.php");
        die;

           

        }
        else{
            $_SESSION['error']='Password incorret,please enter it again';
            header("location:../login.php");
            die;
        }
    }
       
        
       
        

    
   
               
                            // $_SESSION['sucess']='Data inserted sucessfully,REGISTRATION DONE';
                            //  header("location:../register.php");
                            // die;
                        }

else{
    // $_SESSION['error']="Method not available";
    // header("location:../register.php");
    // die;

 }