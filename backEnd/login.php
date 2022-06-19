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
        $sql = "SELECT * FROM users WHERE email = '$this->email' AND password = '$this->password";
        $row = mysqli_query(parent::$conn, $sql);
        if ($row->num_rows == 0) {
            return "No user found";
        }
        return $row;
    }
}
$user = new Login($_POST['email'], $_POST['password']);
$user->check();
?>