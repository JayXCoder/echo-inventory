<?php 
session_start();
if (empty($_SESSION['production']) OR empty($_SESSION['type'])) {
	header("Location: ../index.php");
}
?>

<?php
	include '../includes/connect.php';
    @session_start();
    $type = $_SESSION['type'];
    $username = $_SESSION['production'];
    $sql = "SELECT * FROM `users` WHERE `username`='$username' AND `type`='$type'";
    $query = mysqli_query($con, $sql);
    while ($row = mysqli_fetch_array($query));
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Application Form</title>
	<link rel="stylesheet" type="text/css" href="../assets/style.css">
</head>
<body>
	<div class="wrapper">
	<?php
		include "includes/header.php";
		include "includes/left.php";
	 ?>
		<div class="right"><br>
			<center>

		<h2>Application to Borrow LAN Cable</h2>
			<p><span class="error">* required field</span></p>
				
			<form action="lancable.php?name=<?php echo $username; ?>" method="POST">
				<input type="text" name="username" class="form" value="<?php echo $username; ?>" required="required" disabled="disabled"><br><br>
				<input type="text" name="type" class="form" placeholder="Enter Type" required="required"><br><br>
				<input type="text" name="saiz" class="form" placeholder="Enter Saiz" required="required"><br><br>
				<input type="number" name="quantity" class="form" placeholder="Enter Quantity" required="required"><br><br><br>
				<input type="submit" value="Add" class="btnlink" name="btn">
			</form>
				
			<?php
			extract($_POST);
			if (isset($btn) && !empty($type) && !empty($saiz) &&!empty($quantity)) 
			{
				require 'includes/connect.php';
				$sql = "INSERT INTO tlc(username, type, saiz, quantitylc) VALUES('$username', '$type', '$saiz', '$quantity')";
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