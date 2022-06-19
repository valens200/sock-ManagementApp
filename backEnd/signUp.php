<?php
include_once "config.php";
class Signup extends Connect
{
    public $email;
    public $password;
    public $firstname;
    public $lastname;
    public $telephone;
    function __construct($firstname, $lastname, $telephone, $email, $pass)
    {
        $this->email = parent::test($email);
        $this->password = parent::test($pass);
        $this->firstname = parent::test($firstname);
        $this->lastname = parent::test($lastname);
        $this->telephone = parent::test($telephone);
    }
    function check()
    {
        parent::connect();
        $exist = mysqli_query($this->conn, "SELECT * FROM users WHERE email='$this->email'");
        if($exist->num_rows > 0) { 
            return "already have an account";
        }
        $sql = "INSERT INTO users(email,password,firstname,lastname,telephone) VALUES('$this->email','$this->password', '$this->firstname', '$this->lastname', '$this->telephone')";
        $row = mysqli_query($this->conn, $sql);
        if(!$row) return "something went wrong";
        header("location: ../frontEnd/pages/dashboard.php");
    }
}
$user = new Signup($_POST['firstname'], $_POST['lastname'], $_POST['telephone'], $_POST['email'], $_POST['password']);
echo($user->check());
?>