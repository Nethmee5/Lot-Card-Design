<?php
  include "connection.php";
  $id="";
  $cname="";
  $caddress="";
  $browine_name="";
  $mobile="";
  $email="";
  $qty="";
  $price="";

  $error="";
  $success="";

  if($_SERVER["REQUEST_METHOD"]=='GET'){
    if(!isset($_GET['id'])){
      header("location: order.php");
      exit;
    }
    $id = $_GET['id'];
    $sql = "select * from `deliver_tb` where id=$id";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    while(!$row){
      header("location: order.php");
      exit;
    }
    $cname=$row["cname"];
    $caddress=$row["caddress"];
    $browine_name=$row["browine_name"];
    $mobile=$row["mobile"];
    $email=$row["email"];
    $qty=$row["qty"];
    $price=$row["price"];

  }
  else{
    $id = $_POST["id"];
    $cname=$_POST["cname"];
    $caddress=$_POST["caddress"];
    $browine_name=$_POST["browine_name"];
    $mobile=$_POST["mobile"];
    $email=$_POST["email"];
    $qty = intval($_POST['qty']);
    $price = 0;
  if ($browine_name == 'CASHEW BROWNIES') { $price = 240; }
  if ($browine_name == 'BROWNIE WITH CHOCOCHIPS') { $price = 250; }
  if ($browine_name == 'FUDGY NUTELLA BROWNIES') { $price = 225; }
  if ($browine_name == 'KIT-KAT BROWNIES') { $price = 230; }
  if ($browine_name == 'OREO BROWNIES') { $price = 270; }
  if ($browine_name == 'BROWNIE WITH STRAWBERRY') { $price = 280; }
  if ($browine_name == 'OREO BROWNIES') { $price = 270; }
  if ($browine_name == 'CARAMAL WHITE CHOCO BROWNIES') { $price = 300; }
  if ($browine_name == 'BROWNIE WITH SMARTIES') { $price = 260; }

  $total = $price * $qty;

    $sql = "update `deliver_tb` set cname='$cname', caddress='$caddress', browine_name='$browine_name', mobile='$mobile', email='$email', qty='$qty', price='$total' where id='$id'";
    $result = $conn->query($sql);
    echo '<script type="text/javascript">window.top.location.href = "order.php"; </script>';
    
  }
  
?>
<!DOCTYPE html>
<html>
<head>
 <title>CRUD</title>

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link type="text/css" rel="stylesheet" href="style.css">
  <link type="text/css" rel="stylesheet" href="../stylesnews.css">
</head>
<body>
    <header>
      <a href="#home" class="logo"><img src="../images/image01.png"></a>
      <nav class="navigate">
        <ul>
          <li><a href="../indexnews.php">Home</a></li>
          <li><a href="../about.php">aboutUs</a></li>
          <li><a href="order.php">Order Details</a></li>
          <li><a href="create.php">Order Online</a></li>
          <li><a href="../delivery areas.php">Dilivery Areas</a></li>
        </ul>
      </nav>
    </header>
 <div style="position: relative; top:25%; width: 50%; left: 25%;">
 
 <form action="edit.php" method="POST">  
      <h1>  Update New Order </h1> 

      <div style="position: relative; left: 100px;">

        <input type="hidden" name="id" value="<?php echo $id; ?>" class="form-control"> <br>

        <label> Name: </label><br>
        <input type="text" name="cname" value="<?php echo $cname; ?>" class="form-control"> <br>

        <label> Address: </label><br>
        <input type="text" name="caddress" value="<?php echo $caddress; ?>" class="form-control"> <br>

        <label>Selected Brownie Name: </label><br><br>
        <h3><?php echo $browine_name; ?></h3><br>
        <label>Change Browine: </label><br>
        <select name="browine_name" id="itemname" class="form-control">
            <option>Select Brownies</option>
            <?php 
            $sql = mysqli_query($conn, "SELECT * FROM brownie");
            while ($row = $sql->fetch_assoc()){
            echo "<option value=\"".$row['browniename']."\" val=\"".$row['price']."\">".$row['browniename']." (Rs.".$row['price']." per each)</option>";
            }
            ?>
          </select><br>

        <label> Qty: </label><br>
        <input type="number" min="0" name="qty" id="qty" class="form-control" placeholder = "<?php echo $qty; ?>" onkeyup="valuecalc()"> <br>

        <label> Price: </label><br><br>
        <h2 id="totalPrice"><?php echo $price; ?> Rupees</h2> <br><br>

        <label> Mobile: </label><br>
        <input type="text" name="mobile" value="<?php echo $mobile; ?>" class="form-control"> <br>

        <label> Email: </label><br>
        <input type="text" name="email" value="<?php echo $email; ?>" class="form-control"> <br>

        <button class="btn btn-success" type="submit" name="submit"> Submit </button><br>
       

      </div>
 </form>
 </div>
</body>
<script type="text/javascript">
    
function valuecalc() {

  item = document.getElementById("itemname").value;
  qty = document.getElementById("qty").value;

  if (item == 'CASHEW BROWNIES') { price = 240; }
  if (item == 'BROWNIE WITH CHOCOCHIPS') { price = 250; }
  if (item == 'FUDGY NUTELLA BROWNIES') { price = 225; }
  if (item == 'KIT-KAT BROWNIES') { price = 230; }
  if (item == 'OREO BROWNIES') { price = 270; }
  if (item == 'BROWNIE WITH STRAWBERRY') { price = 280; }
  if (item == 'OREO BROWNIES') { price = 270; }
  if (item == 'CARAMAL WHITE CHOCO BROWNIES') { price = 300; }
  if (item == 'BROWNIE WITH SMARTIES') { price = 260; }

  //var price = item.val;

  total = document.getElementById("totalPrice");
  totalammount = qty * price
  total.innerHTML = totalammount + " Rupees";

      
    }
  </script>
</html>