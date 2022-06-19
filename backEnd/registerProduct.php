<?php
include_once "config.php";
class RegisterProduct extends Connect
{
    public $title;
    public $price;
    public $description;
    public $provider;
    function __construct($title, $price, $description, $provider)
    {
        $this->title = parent::test($title);
        $this->price = parent::test($price);
        $this->description = parent::test($description);
        $this->provider = parent::test($provider);
    }
    function check()
    {
        parent::connect();
        $sql = "INSERT INTO products(title,price,description,provider) VALUES('$this->title','$this->price', '$this->description', '$this->provider')";
        $row = mysqli_query($this->conn, $sql);
        if (!$row) {
            return "something went wrong";
        }
        header("location: ../frontEnd/pages/dashboard.php?user=".$_SESSION['id']."");
    }
}
if ($_POST['title'] === "" || $_POST['price'] === "" || $_POST['description'] === "" || $_POST['provider'] === "") {
    echo "Please fill all the fields";
}
else {

    $product = new RegisterProduct($_POST['title'], $_POST['price'], $_POST['description'], $_POST['provider']);
    echo($product->check());
}
?>