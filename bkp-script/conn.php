<?php
$servername = "localhost";
$username = "phoenvac_comedyr";
$password = "-R#=n2EHJ(7U";
$database = "phoenvac_comedyrunners";
$conn = mysqli_connect($servername, $username, $password,$database);
if(!$conn)
{
	die("Connection failed: " . mysqli_connect_error());
}
?>