<?php
//creating mysql db using php
$link = mysqli_connect("localhost", "root", "Brian1234");
//check connection
if ($link === false){
	die("Error: Could not connect".mysqli_connect_error());
}
	//Attempt to create database query execution
	$sql = "CREATE DATABASE brian";
	if(mysqli_query($link, $sql)){
echo "Database created successfully";
	}else{
echo "Error: Could not be able to execute $sql. ".
mysqli_error($link);	
}

//close connection
mysqli_close($link);

?>