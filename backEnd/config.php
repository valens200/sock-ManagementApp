<?php
session_start();
class Connect
{
    public $conn;
    function test($data){
        $data = htmlspecialchars($data);
        $data = trim($data);
        return $data;
    }
    function connect()
    {
        $this->conn = mysqli_connect("localhost","root", "kinggiovanni", "stock");
        if($this->conn->connect_error){
            echo $this->conn->error;
        }
    }
}
?>