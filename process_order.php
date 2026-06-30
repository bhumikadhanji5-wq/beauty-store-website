<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

session_start();
include('db_connect.php');

if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}

$user_id = $_SESSION['user_id'];

// 1. Total nikal kar orders table mein daalo
$sql_total = "SELECT SUM(products.price * cart.quantity) as grand_total 
              FROM cart 
              JOIN products ON cart.product_id = products.id 
              WHERE cart.user_id = '$user_id'";

$res = mysqli_query($conn, $sql_total);
$row = mysqli_fetch_assoc($res);
$total = $row['grand_total'];

// Check karo ki total empty toh nahi
if ($total > 0) {
    // Insert order
    $insert_order = "INSERT INTO orders (user_id, total_amount) VALUES ('$user_id', '$total')";
    
    if (mysqli_query($conn, $insert_order)) {
        // 2. Cart khali kar do (Clear the cart)
        mysqli_query($conn, "DELETE FROM cart WHERE user_id = '$user_id'");
        
        echo "<script>alert('Order Placed Successfully!'); window.location='index.php';</script>";
    } else {
        echo "Error: " . mysqli_error($conn);
    }
} else {
    echo "Cart is empty!";
}
?>