<?php
session_start();
if (!empty($_SESSION['admin'])&&!empty($_SESSION['type'])) {
	header("Location: admin/");
}
elseif (!empty($_SESSION['it'])&&!empty($_SESSION['type'])) {
	header("Location: admin/");
}
elseif (!empty($_SESSION['production'])&&!empty($_SESSION['type'])) {
	header("Location: user/");
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Echo Inventory - Login</title>
	<style type="text/css">
	body
	{
		background-color: black;
	}
		.wrapper
		{
			height: 500px;
			width: 55.4%;
			min-width:11.8em;
			background-color: white;
			border: 1px solid black;
			margin: 0 auto;
			margin-top: 150px;
			opacity: 0.5px;
		}
		.left
		{
			height: 170px;
			width: 57.1%;
			min-width:7.59em;
			border-right: 1px solid #C2C5BA;
			float: left;
			font-family: Georgia;
			font-size: 30px;
			text-align: center;
			padding-top: 80px;
		}
		.right
		{
			height: 250px;
			width: 42.7%;
			min-width: 12em;
			float: left;
			text-align: center;
			font-family: Arial;
		}
		hr
		{
			border-bottom: 1px solid black;
			border-top: 1px solid black;
		}
		.input
		{
			height: 30px;
			width: 80%;
			padding-left: 20px;
			border-radius: 15PX;
			box-shadow: 3PX 3PX 3PX #333;
		}
		.btn
		{
			height: 35px;
			width: 50%;
			border: 0;
			background-color: #191970;
			margin: 0;
			color: white;
			font-weight: bold;
			cursor: pointer;
			border-radius: 15PX;
			box-shadow: 3PX 3PX 3PX #333;
		}
	
		.centerlogo
		{
  		display: block;
  		margin-left: auto;
  		margin-right: auto;
		height: 200px;
		width: 400px;
		}
	</style>
</head>
<body> 
<div class="wrapper">
	<br>
	<img src='assets/img/ECHOBB_logo.png' alt='Echo Logo' class="centerlogo" />
	<div class="left">
		Echo Inventory System<br><br> ( Echo Broadband )
	</div>
	<div class="right">
		<h3>Login Here</h3><hr>
		<form action="index.php" method="post">
			<input type="text" class="input" name="username" placeholder="Enter Username"><br><br>
			<input type="password" class="input" name="password" placeholder="Enter Password"><br><br>
			<input type="submit" class="btn" name="btn" value="Login"><br>
		</form>
<?php
		extract($_POST);
		if (isset($btn) && !empty($username) && !empty($password)) {
			require 'includes/users.php';
		 	login();
		 } 
		 ?>
	</div>
</div>
	<div class="footer">
	<center>
		<h4 style="color:white;"> &copy; <?php echo date("Y"); ?> By JayXCoder</h4>
	</center>
</div>
</body>
</html>