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
        }
      
}
public function insertData($table, $columns, $data)
    {
        foreach ($columns as $column) {
            $c[] = '`' . $column . '`';
        }
        $col = implode(', ', $c);
        $d = array_map(function ($x) {
            return gettype($x) == 'string' ?  "'" . $x . "'" : $x;
        }, $data);
        $info = implode(', ', $d);
        $query = "INSERT INTO $table ($col) VALUES ($info)";
        $sql = $this->conn->prepare($query);
        return $sql->execute();
    }
    public function getData($table, $columns = "*", $condition = true)
    {
        $query = "SELECT $columns FROM $table WHERE $condition";
        $data = $this->conn->query($query);
        return $data->fetchAll();
    }
    public function updateData($table, $data, $condition)
    {
        foreach ($data as $key => $val) {
            $d[] = "`$key` = '$val'";
        }
        $info = implode(', ', $d);
        $query = "UPDATE $table SET $info WHERE $condition";
        $sql = $this->conn->prepare($query);
        return $sql->execute();
    }

    public  function deleteData($table, $condition = true)
    {
        $query = "DELETE FROM $table WHERE $condition";
        $sql = $this->conn->prepare($query);
        return $sql->execute();
    }
   
}
$db=new db;

// // $user->deleteData("users");
// // var_dump($user->updateData("users", ['name' => "youssef", "email" => "y@y.y"], "id = 1"));
// // print_r($user->insertData("users", ['name', 'email', 'password'], ["mohammed", 'm@ma.m', 123456]));
// print_r($user->getData("users", "name,email", "id = 1"));





?>