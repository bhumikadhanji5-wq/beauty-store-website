<?php
session_start();
include('db_connect.php'); // Database connection

if(isset($_GET['id'])) {
    $id = $_GET['id']; // Jo ID link se aayegi
    
    // Delete query
    $sql = "DELETE FROM cart WHERE id = '$id'";
    mysqli_query($conn, $sql);
}

// Delete hone ke baad wapas cart pe bhej do
header("Location: cart.php");
exit();
?>