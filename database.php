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
}
$db=new db;


?>