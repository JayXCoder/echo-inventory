<?php 
session_start();
if (empty($_SESSION['production']) OR empty($_SESSION['type'])) {
	header("Location: ../index.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>User Dashboard</title>
	<link rel="stylesheet" type="text/css" href="../assets/style.css">
</head>
<body>
	<div class="wrapper">
	<?php
		include "includes/header.php";
		include "includes/left.php";
	 ?>
		<div class="right">
			<div style="padding-left:20px;padding-top:20px;">
			Welcome, <b>User</b><br><br>
			In your Dashboard you can borrow the following items,<br><br>
			<ol>
				<li>PC</li><br>
				<li>USB To LAN Convertor</li><br>
				<li>Mouse and Keyboard</li><br>
				<li>Monitor</li><br>
				<li>Display Converter</li><br>
				<li>VGA/HDMI Cable</li><br>
				<li>Power Cable</li><br>
				<li>LAN Cable</li><br>
			</ol>
		</div>
		</div>
		<?php 
		include "includes/footer.php";
		 ?>
	</div>
</body>
</html>