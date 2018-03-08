<?php
session_start();
	$hostAddress = 'localhost';
	$database = 'test';
	$uname = 'root';
	$pword = 'Skyguitar1';
//open connection
$conn = new mysqli($hostAddress, $uname, $pword, $database); 

if($conn->connect_error) die($conn->connect_error);
?>