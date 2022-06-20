<?php
session_start();
include_once "../../backEnd/config.php";
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Dashboard</title>
    <link rel="stylesheet" href="../styles/dashbord.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    />
    <script
      src="https://kit.fontawesome.com/954941076f.js"
      crossorigin="anonymous"
    ></script>
    <link
      rel="stylesheet"
      href="path/to/font-awesome/css/font-awesome.min.css"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
    />
    <link rel="stylesheet" href="../styles/dashbord.css" />
  </head>
  <body>
    
<?php include_once "../components/Navbar.php" ?>
    <section>
      <div class="main-Content">
        <div class="sidebar">
          <div class="para">
            <p><i class="fa-brands fa-first-order"></i> Dashboard</p>
            <p><i class="fa-brands fa-first-order"></i> Orders</p>
            <p><i class="fa-brands fa-first-order"></i> Upcoming stock</p>
            <p><i class="fa-brands fa-first-order"></i> Outgoing stock</p>
            <p><i class="fa-brands fa-first-order"></i> Accounting</p>
          </div>
          <div class="null"></div>
          <div class="down">
            <p><i class="fa-solid fa-gear"></i> Settings</p>
            <p><i class="fa-solid fa-helmet-safety"></i> Help</p>
            <p><i class="fa-solid fa-right-from-bracket"></i> Logout</p>
          </div>
        </div>
        <div class="bigSidebar">
          <div class="upper">
            <div class="box">
              <div class="text">
                <h5>Latest added product</h5>
                <h1>Clothes from chique</h1>
                <span>on 12 februay - 2nd March</span>
              </div>
              <div class="image">
                <img src="../components//jerive.jpg" alt="" />
              </div>
            </div>
            <div class="buttons">
              <div class="button button1">
                <button>Recently added products</button>
              </div>
              <div class="button button2">
                <button>View all products</button>
              </div>
              <div class="button buton3">
                <button id="product">
                  Add new Product <i class="fa-solid fa-plus"></i>
                </button>
              </div>
            </div>
          </div>
        <table border=1 style="border-collapse: collapse;">
          <tr>
            <th>No.<th>
            <th>title</th>
            <th>Price </th>
            <th>description<th>
            <th>provider</th>
          </tr>
          <?php
           $n = new Connect();
           $n->connect();
            $sql = mysqli_query($n->conn, "SELECT * FROM products");
            while($row = mysqli_fetch_assoc($sql)){
          ?>
          <tr>
            <td><?= $row['id']?></td>
            <td><?= $row['title'] ?></td>
            <td><?= $row['price'] ?> </td>
            <td><?= $row['description'] ?> </td>
            <td><?= $row['provider'] ?> </td>
          </tr>
          <?php } ?>
        </table>
          </div>
        </div>
      </div>
      <form
        action="../../backEnd/registerProduct.php"
        method="post"
        class="form"
        style="
          position: absolute;
          top: 25%;
          left: 40%;
          background: rgba(0, 0, 0, 0.712);
          height: 25rem;
          width: 25rem;
          color: white;
          display: none;
          gap: 10px;
          align-items: center;
          flex-direction: column;
          justify-content: center;
        "
      >
        <i
          class="fa-solid fa-xmark"
          style="position: absolute; top: 0; right: 0; cursor: pointer"
          id="close"
        ></i>
        <h1>Add new product</h1>
        <input type="text" name="title" placeholder="Title" />
        <input type="text" name="price" placeholder="Price" />
        <input type="text" name="description" placeholder="Description" />
        <input type="text" name="provider" placeholder="Provider" />
        <input type="submit" value="Add" />
      </form>
      <div class="mine">
        <div class="nave">
          <div class="pre">
            <p>prev</p>
          </div>
          <div class="number">
            <p>1</p>
          </div>
          <div class="number">
            <p>2</p>
          </div>
          <div class="number">
            <p>3</p>
          </div>
          <div class="number">
            <p>4</p>
          </div>
          <div class="number">
            <p>5</p>
          </div>
          <div class="number">
            <p>6</p>
          </div>
          <div class="Next">
            <p>Next</p>
          </div>
        </div>
      </div>
    </section>
    <script>
      var product = document.getElementById("product");
      const close = document.getElementById("close");
      const form = document.querySelector(".form");
      close.addEventListener("click", function () {
        form.style.display = "none";
      });
      product.addEventListener("click", function () {
        form.style.display = "flex";
      });
    </script>
  </body>
</html>
