<?php
class Connect
{
    public $conn;
    function test($data){
        if($data === "") echo "all data are required"; 
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