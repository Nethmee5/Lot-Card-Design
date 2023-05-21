<?php
include "connection.php";
if (isset($_POST['ordertp'])) {
  session_start();
  $_SESSION['telephone'] =$_REQUEST['number'];
  $_SESSION['submitted'] = 'Yes';
  //session_destroy();
}
else{
  $_SESSION['submitted'] = 'No';
}


?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link type="text/css" rel="stylesheet" href="style.css">
    <link type="text/css" rel="stylesheet" href="../stylesnews.css">

     <title>Miss Brownies</title>
  </head>
  <body>
  <header>
        <a href="#home" class="logo"><img src="../images/image01.png"></a>

        <nav class="navigate">
            <ul>
                <li><a href="../indexnews.php">Home</a></li>
                <li><a href="../about.php">aboutUs</a></li>
                <li><a href="../product.php">Product</a></li>
                <li><a href="create.php">Order Online</a></li>
                <li><a href="../delivery areas.php">Dilivery Areas</a></li>
            </ul>
        </nav>
        <div id="menu"><i class="fas fa-bars"></i></div>
    </header>

<?php

//session_start();
if($_SESSION["submitted"] == 'Yes' ){

?>

<div style="position: relative; top:25%; width: 90%; left: 5%;">
    <table class="table">
    <thead>
      <tr style="color: black;">
        <th>Name</th>
        <th>Address</th>
        <th>Browine Name</th>
        <th>Mobile</th>
        <th>Email</th>
        <th>Qty</th>
        <th>Price</th>
        <th>Date</th>
        <th>ACTIONS</th>
      </tr>
    </thead>
    <tbody>
      <?php
        include "connection.php";
        $sql = "select * from `deliver_tb` where mobile = '".$_SESSION['telephone']."'";
        $result = $conn->query($sql);
        if(!$result){
          die("Invalid query!");
        }
        while($row=$result->fetch_assoc()){

          $date = mb_substr($row["date"], 0, 16);
          echo "
      <tr style=\"color: black;\">
        <td>$row[cname]</td>
        <td>$row[caddress]</td>
        <td>$row[browine_name]</td>
        <td>$row[mobile]</td>
        <td>$row[email]</td>
        <td>$row[qty]</td>
        <td>$row[price]</td>
        <td>$date</td>
                <td>
                  <a class='btnedit' href='edit.php?id=$row[id]'>Edit</a>
                  <a class='btndelete' href='delete.php?id=$row[id]'>Delete</a>
                </td>
      </tr>
      ";
        }
      ?>
    </tbody>
  </table>
      </div>


<?php
}
elseif ($_SESSION["submitted"] == 'No' ) {
 


?>
<div style="position: relative; top:25%; width: 50%; left: 25%;">
<h1 style="color: black;">Please Enter your Mobile number to see your orders</h1>

<form action="order.php" method="POST">
  <label for="fname">Mobile Number:</label><br>
  <input type="text" id="number" name="number" value="" placeholder="Enter here"><br><br>
  <input type="submit" value="Submit" name="ordertp" style="color: black;">
</form> 
</div>
 <?php } ?>   

  </body>
</html>