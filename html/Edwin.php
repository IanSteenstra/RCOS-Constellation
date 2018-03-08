<?php
require_once('loginInfo.php');
//open connection
$conn = new mysqli($hostAddress, $uname, $pword, $database);
if($conn->connect_error) die($conn->connect_error);
//build query
$query = "SELECT * FROM Books";
//send query
$result = $conn->query($query);
if(!$result){
    // query has failed!
    echo "Error!";
    die($conn->error);
}
while($row = $result->fetch_assoc()) {
	echo "Title: " . $row["Title"]. " - Name: " . $row["Author"]. " " . $row["ID"]. "<br>";
}
?>