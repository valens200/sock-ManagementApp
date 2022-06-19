<?php
class Connect
{
    public $conn;
    public $host;
    public $username;
    public $pass;
    public $database;
    function test($data){
        $data = htmlspecialchars($data);
        $data = trim($data);
        return $data;
    }
    function __construct($host, $username, $pass, $database)
    {
        $this->$host = $host;
        $this->username = $username;
        $this->pass = $pass;
        $this->database = $database;
    }
    function connect()
    {
        $this->conn = mysqli_connect($this->host, $this->username, $this->pass, $this->database);
        if($this->conn->connect_error){
            echo $this->conn->error;
        }
    }
}
$conn1 = new Connect("localhost", "root", "kinggiovanni", "stock");
?>