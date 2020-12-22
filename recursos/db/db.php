<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "id14901727_orangeflash";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>