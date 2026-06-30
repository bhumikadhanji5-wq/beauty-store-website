<?php
$host = "localhost";
$username = "root";
$password = "";
$dbname = "beauty_db";

$conn = mysqli_connect($host, $username, $password, $dbname, 3307);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>