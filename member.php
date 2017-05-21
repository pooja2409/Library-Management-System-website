<?php
session_start();

if($_SESSION['Username']){
	
	header("Location:indexuser.php?msg=successfully_logged_in");
//echo "Welcome, ".$_SESSION['Username']."!<br><a href='logout.php'>LOGOUT</a>";

}
else
	die("you must be logged in!");


?>