<?php
$servername = "mysql";
$username = "user";
$password = "password";
$database = "waffle_shop";

$conn = new mysqli($servername, $username, $password, $database, 3306);

if ($conn->connect_error) {
    die("Database connection failed: " . $conn->connect_error);
}
?>
