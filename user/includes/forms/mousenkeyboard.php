<?php 
session_start();
if (empty($_SESSION['production']) OR empty($_SESSION['type'])) {
	header("Location: ../../index.php");
}
?>

<?php
function usernameextract()
{
	include '../connect.php';
    @session_start();
    $type = $_SESSION['type'];
    $username = $_SESSION['production'];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Application Form</title>
	<link rel="stylesheet" type="text/css" href="../../../assets/style.css">
</head>
<body>
	<div class="wrapper">
	<?php
		include "includes/header.php";
		include "includes/left.php";
	 ?>
		<div class="right"><br>
			<center>

		<h2>Application to Borrow Mouse and Keyboard</h2>
			<p><span class="error">* required field</span></p>
				
			<form action="mousenkeyboard.php" method="POST">
				<input type="text" name="brand" class="form" placeholder="Enter Combo Brand" required="required"><br><br>
				<input type="number" name="quantity" class="form" placeholder="Enter Quantity" required="required"><br><br><br>
				<input type="submit" value="Add" class="btnlink" name="btn">
			</form>
				
			<?php 
			usernameextract();
			extract($_POST);
			if (isset($btn) && !empty($brand) &&!empty($quantity)) 
			{
				require '../connect.php';
				$sql = "INSERT INTO ttmk(username, brand, quantitymk) VALUES($username, $brand, $quantity)";
				$query = mysqli_query($con,$sql);
			}
			 ?>
			
			</center>
			
		</div>
		<?php 
		include "includes/footer.php";
		 ?>
	</div>
</body>
</html>