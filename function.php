<?php
//class to define all the sql queries
	

	function connectDatabase()
{
	$host = "localhost:3306";
	$user = "root";
	$pass = "";
	$DBname = "vijaycricketclub";
	$conn = mysqli_connect($host,$user,$pass,$DBname);
	if(!$conn){
	 die("Not connected".mysqli_connect_error);
	}
	return $conn;
}
