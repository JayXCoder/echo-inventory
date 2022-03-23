<?php 
session_start();
if (empty($_SESSION['admin']) OR empty($_SESSION['type'])) {
	header("Location: ../index.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Echo Inventory Dashboard</title>
	<link rel="stylesheet" type="text/css" href="../assets/style.css">
	<style type="text/css">
	.total{
		height: 120px;
		width: 170px;
		border: 1px solid #fff;
		margin-top: 25px;
		margin-left: 90px;
		float: left;
		text-align: center;
		padding-top: 20px;
	}
	</style>
</head>
<body>
	<div class="wrapper">
	<?php
		include "includes/header.php";
		include "includes/left.php";
	 ?>
		<div class="right">
			<div class="total">
				<b>Total PC</b><hr>
				<?php
				require_once "../includes/connect.php";

				$sql = "SELECT SUM(quantitypc) as sum_qty FROM `ttpc`";
				$query = mysqli_query($con,$sql);
				$row = mysqli_fetch_assoc($query);
				echo "<br><b style='color:#fff; font-family:Arial; font-size:35px;'>".($row['sum_qty'])."</b>"; 
				 ?>
			</div>

			<div class="total">
				<b>Total USB To Lan Converter</b><hr>
				<?php
				require_once "../includes/connect.php";
				$sql = "SELECT SUM(quantityulc) as sum_qty FROM `tulc`";
				$query = mysqli_query($con,$sql);
				$row = mysqli_fetch_assoc($query);
				echo "<br><b style='color:#fff; font-family:Arial; font-size:35px;'>".($row['sum_qty'])."</b>"; 
				 ?>
			</div>

			<div class="total">
				<b>Total Mouse and Keyboard</b><hr>
				<?php
				require_once "../includes/connect.php";
				$sql = "SELECT SUM(quantitymk) as sum_qty FROM `ttmk`";
				$query = mysqli_query($con,$sql);
				$row = mysqli_fetch_assoc($query);
				echo "<br><b style='color:#fff; font-family:Arial; font-size:35px;'>".($row['sum_qty'])."</b>"; 
				 ?>
			</div>
			<div class="total">
				<b>Total Monitor</b><hr>
				<?php
				require_once "../includes/connect.php";
				$sql = "SELECT SUM(quantitymon) as sum_qty FROM `tm`";
				$query = mysqli_query($con,$sql);
				$row = mysqli_fetch_assoc($query);
				echo "<br><b style='color:#fff; font-family:Arial; font-size:35px;'>".($row['sum_qty'])."</b>"; 
				 ?>
			</div>

			<div class="total">
				<b>Total Display Converter</b><hr>
				<?php
				require_once "../includes/connect.php";
				$sql = "SELECT SUM(quantitydc) as sum_qty FROM `tdc`";
				$query = mysqli_query($con,$sql);
				$row = mysqli_fetch_assoc($query);
				echo "<br><b style='color:#fff; font-family:Arial; font-size:35px;'>".($row['sum_qty'])."</b>"; 
				 ?>
			</div>

			<div class="total">
				<b>Total VGA/HDMI Cable</b><hr>
				<?php
				require_once "../includes/connect.php";
				$sql = "SELECT SUM(quantityvhd) as sum_qty FROM `tvhd`";
				$query = mysqli_query($con,$sql);
				$row = mysqli_fetch_assoc($query);
				echo "<br><b style='color:#fff; font-family:Arial; font-size:35px;'>".($row['sum_qty'])."</b>"; 
				 ?>
			</div><br><br>
			<div class="total">
				<b>Total Power Cable</b><hr>
				<?php
				require_once "../includes/connect.php";
				$sql = "SELECT SUM(quantitypc) as sum_qty FROM `tpc`";
				$query = mysqli_query($con,$sql);
				$row = mysqli_fetch_assoc($query);
				echo "<br><b style='color:#fff; font-family:Arial; font-size:35px;'>".($row['sum_qty'])."</b>"; 
				 ?>
			</div>

			<div class="total">
				<b>Total Lan Cable</b><hr>
				<?php
				require_once "../includes/connect.php";
				$sql = "SELECT SUM(quantitylc) as sum_qty FROM `tlc`";
				$query = mysqli_query($con,$sql);
				$row = mysqli_fetch_assoc($query);
				echo "<br><b style='color:#fff; font-family:Arial; font-size:35px;'>".($row['sum_qty'])."</b>"; 
				 ?>
			</div>
		</div>
		<?php 
		include "includes/footer.php";
		 ?>
	</div>
</body>
</html>