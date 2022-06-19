<?php
include_once "config.php";
class Login extends Connect
{
    public $email;
    public $password;
    function __construct($email, $pass)
    {
        $this->email = parent::test($email);
        $this->password = parent::test($pass);
    }
    function check()
    {
        parent::connect();
        $sql = "SELECT * FROM users WHERE email = '$this->email' AND password = '$this->password'";
        $row = mysqli_query($this->conn, $sql);
        if ($row->num_rows == 0) {
            return "No user found";
        }
        $row = mysqli_fetch_assoc($row);    
        $_SESSION['id'] = $row['id'];
        header("location: ../frontEnd/pages/dashboard.php");
    }
}
$user = new Login($_POST['email'], $_POST['password']);
$user->check();
// echo($user->check());
?>