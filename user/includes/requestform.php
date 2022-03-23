<?php
function formchoice()
{
	switch ($itemtype) {
	  case "pc":
		header("Location: forms/pc.php");
		break;
	  case "ulc":
		header("Location: forms/usblanc.php");
		break;
	  case "mnk":
		header("Location: forms/mousenkeyboard.php");
		break;
	  case "mon":
		header("Location: forms/monitor.php");
		break;
	  case "dc":
		header("Location: forms/displayconverter.php");
		break;
	  case "vhc":
		header("Location: forms/displaycable.php");
		break;
	  case "poc":
		header("Location: forms/powercable.php");
		break;
	  case "lc":
		header("Location: forms/lancable.php");
	  default:
		header("Location: applicationform.php");
	}
}

?>
