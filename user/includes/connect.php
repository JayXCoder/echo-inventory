<?php
$con = mysqli_connect('localhost','root','','inventory');
if (empty($con)) {
 	echo mysqli_error();
 } 
 $data = mysqli_select_db($con,"inventory");
 if (empty($data)) {
 	echo mysqli_error();
 }
?>