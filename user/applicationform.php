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
				<form action="applicationform.php" method="POST">
				<select name="itemtype" class="form" required="required">
					<option value="">Choose Item</option>
					<option value="pc">PC</option>
					<option value="ulc">USB to LAN Converter</option>
					<option value="mnk">Mouse and Keyboard</option>
					<option value="mon">Monitor</option>
					<option value="dc">Display Converter</option>
					<option value="vhc">VGA and HDMI Cable</option>
					<option value="poc">Power Cable</option>
					<option value="lc">LAN Cable</option>
				</select><br><br>
					<input type="submit" value="Next" class="btnlink" name="btn">
			</form>
				
			<?php 
			extract($_POST);
			if (isset($btn) && !empty($itemtype))
			{
			require "includes/requestform.php";
			formchoice();
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