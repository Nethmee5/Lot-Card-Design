<?php
	include "connection.php";
	if(isset($_POST['submit'])){
		$cname = $_POST['cname'];
		$caddress = $_POST['caddress'];
		$browine_name = $_POST['browine_name'];
		$mobile = $_POST['mobile'];
		$email = $_POST['email'];
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

		$q = " INSERT INTO `deliver_tb`(`cname`, `caddress`, `browine_name`, `mobile`, `email`, `qty`, `price`) VALUES ( '$cname', '$caddress', '$browine_name', '$mobile', '$email', '$qty', '$total' )";

		$query = mysqli_query($conn,$q);
		echo '<script type="text/javascript">window.top.location.href = "order.php"; </script>';
	}
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Place an Order</title>
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
					<li><a href="create.php" class="active">Order Online</a></li>
					<li><a href="../delivery areas.php">Dilivery Areas</a></li>
				</ul>
			</nav>
		</header>

		<div style="position: relative; top:25%; width: 50%; left: 25%;">
			<form action="create.php" method="POST"> 
				<div style="position: relative; left: 100px;" >
					<h1>Place New Order </h1><br>
					<label> Name </label><br>
					<input type="text" name="cname" class="form-control"> <br><br>

					<label> Address: </label><br>
					<input type="text" name="caddress" class="form-control"> <br><br>

					<label> Brownie Name: </label><br><br>
					<select name="browine_name" id="itemname"">
						<option>Select Brownies</option>
						<?php 
						$sql = mysqli_query($conn, "SELECT * FROM brownie");
						while ($row = $sql->fetch_assoc()){
						echo "<option value=\"".$row['browniename']."\">".$row['browniename']." (Rs.".$row['price']." per each)</option>";
						}
						?>
					</select><br>

					<label> Qty: </label><br>
					<input type="number" min="0" name="qty" id="qty" class="form-control" onkeyup="valuecalc()"> <br><br>

					<label> Price: </label><br>
					<h2 id="totalPrice">0.00</h2> <br><br>

					<label> Mobile: </label><br>
					<input type="text" name="mobile" class="form-control"> <br><br>

					<label> Email: </label><br>
					<input type="text" name="email" class="form-control"> <br><br>
				</div>
				<button class="btn" type="submit" name="submit"> Submit </button><br>
			</form>
			<br><br><br>
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