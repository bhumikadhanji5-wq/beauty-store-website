<?php
session_start();
include('db_connect.php');

// Agar user login nahi hai, toh login page par bhejo
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}

$user_id = $_SESSION['user_id'];
$product_id = $_GET['pid'];

// Database mein insert karo
$sql = "INSERT INTO cart (user_id, product_id, quantity) VALUES ('$user_id', '$product_id', 1)";
mysqli_query($conn, $sql) or die(mysqli_error($conn));

header("Location: cart.php"); // Add hone ke baad cart page pe bhej do
?>