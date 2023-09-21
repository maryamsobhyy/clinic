<?php
class validations {
    public $conn;
    
    function __construct()
    {
        try{
        $this->conn =new PDO("mysql:host=localhost;dbname=clinic","root","");
        $this->conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        }
        catch (PDOException $e){
            echo $e->getMessage();
            die;
        }}
    public function checkmethod ($method){
        if ($_SERVER['REQUEST_METHOD']=="POST"){
            return true;
        }
        else {
            return false;
        }

    }
    public function namecheck ($column){
        if (strlen($column)>0){
            return true;
        }
        else {
            $_SESSION['error']="Please enter all data";
            header("location:./login.php");
            die;
        }

    }
    public function minname ($column){
        if (strlen($column)<3){
            $_SESSION['error']="please enter name more than 3 letters ";
            header("location:./login.php");
            die;
        }
        else {
           return true;
        }
    }
  
}
        

  

$valid=new validations;


?>