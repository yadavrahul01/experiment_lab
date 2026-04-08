<?php
$servername = "localhost";
$username = "root";
$password = "yadavmysql123@@";
$database = "ecommerce_db";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>