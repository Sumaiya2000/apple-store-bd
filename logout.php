<?php

session_start();
include("connection.php");
if(isset($_SESSION['email']))
{	
	$q="delete from temp_cus";
	mysqli_query($con,$q);
	unset($_SESSION['email']);

}

header("Location: login.php");
die;
?>