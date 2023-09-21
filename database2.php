<?php

class db{
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
        public function getData($table, $columns = "*", $condition = true)
    {
        $query = "SELECT $columns FROM $table WHERE $condition";
        $data = $this->conn->query($query);
        return $data->fetchAll(PDO::FETCH_ASSOC);
    }  


}
$db2=new db;


?>