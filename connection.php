<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "apple_store_bangladesh";

if(!$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname))
{

	die("failed to connect!");
}
