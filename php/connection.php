<?php
$host = 'localhost';
$user = 'root';
$password = '';
$db = 'taste';

$conn = mysqli_connect($host, $user, $password, $db);
if ($conn->connect_error) {
    die("Connection Failed: " . $conn->connect_error);
}

mysqli_select_db($conn, $db);
?>