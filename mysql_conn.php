<?php
$dbServerName = "xxxxxx";
$dbUsername = "zeynep";
$dbPassword = "xxxxx";
$dbName = "test";

// create connection
$conn = new mysqli($dbServerName, $dbUsername, $dbPassword, $dbName);

// check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
//echo "Connected successfully";
$conn -> set_charset("utf8");
?>