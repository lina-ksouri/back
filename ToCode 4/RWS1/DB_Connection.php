<?php
// Enter your Host, username, password, database below.
$conn = mysqli_connect("localhost","root","YES","user");
	if (mysqli_connect_errno()){
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
		die();
		}
?>
