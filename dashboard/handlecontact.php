<?php
session_start();
require ('../database.php');
if ($_SERVER['REQUEST_METHOD']=='POST'){
    $name=$_POST['name'];
    $phone=$_POST['phone'];
    $email=$_POST['email'];
    $subject=$_POST['subject'];
    $message=$_POST['message'];
    if (strlen($name)>0){
        if (strlen($phone)>0){
            if (strlen($email)>0){
                if (strlen($message)>0){
                    ($db->insertData("contacts", ['name', 'email', 'phone','subject','message'], [$name, $email, $phone,$subject,$message]));
                            $_SESSION['sucess']='Thank you for your contact with us';
                             header("location:../contact.php");

                }
                else{
                    $_SESSION['error']="please enter your message ";
                    header("location:../contact.php");
                    die;

                }

            }

        }
        else{
            $_SESSION['error']="please enter your phone ";
            header("location:../contact.php");
            die;

        }

    }
    else{
        $_SESSION['error']="please enter your name ";
        header("location:../contact.php");
        die;
    }
}
?>