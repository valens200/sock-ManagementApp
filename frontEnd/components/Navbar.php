<!DOCTYPE html>
<?php
include_once "../../backEnd/config.php";

class Getuser extends Connect{
    public $user;
    function __construct($id){
        parent::connect();
        $result= mysqli_query($this->conn, "SELECT * FROM users WHERE id=".$id."");
        $this->user = mysqli_fetch_assoc($result);
    }
}
$current = new Getuser($_GET['user']);
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link rel="stylesheet" href="../styles/dashbord.css">
    <title>Document</title>
</head>
<body>
    <div>
        <div class="nav">
            <div class="left">  
                <img src="../images/logo.jpeg" alt="">
            </div>
            <div class="midle">
                <div class="input">
                    <input type="text" placeholder="Search for your store">

                </div>
                <div>

                </div>

            </div>
            <div class="right">
                <i class="fa-brands fa-square-font-awesome-stroke"></i>
                <i class="fa-solid fa-note-sticky"></i>
                <i class="fa-solid fa-bell"></i>
                <i class="fa-solid fa-chevron-down"></i>
                <div><?=$current->user['firstname']?></div>
            </div>

        </div>

    </div>
    
</body>
</html>