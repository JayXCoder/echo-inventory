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
				<a href="pc.php"><button class="btnlink">PC</button></a><br><br>
				<a href="monitor.php"><button class="btnlink">Monitor</button></a><br><br>
				<a href="lancable.php"><button class="btnlink">LAN Cable</button></a><br><br>
				<a href="mousenkeyboard.php"><button class="btnlink">Keyboard & Mouse</button></a><br><br>
				<a href="displaycable.php"><button class="btnlink">Display Cable</button></a><br><br>
				<a href="displayconverter.php"><button class="btnlink">Display Converter</button></a><br><br>
				<a href="powercable.php"><button class="btnlink">Power Cable</button></a><br><br>
				<a href="usblanc.php"><button class="btnlink">USB to LAN Converter</button></a><br><br>
			</center>
			
		</div>
		<?php 
		include "includes/footer.php";
		 ?>
	</div>
</body>
</html>