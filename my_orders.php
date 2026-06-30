<?php
session_start();
include('db_connect.php');

// Agar user login nahi hai, toh login page par bhejo
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}

$user_id = $_SESSION['user_id'];
?>

<!DOCTYPE html>
<html>
<head>
    <title>My Orders</title>
    <style>
        table { width: 80%; margin: 50px auto; border-collapse: collapse; }
        th, td { border: 1px solid #ddd; padding: 12px; text-align: center; }
        th { background-color: #f4f4f4; }
        h2 { text-align: center; margin-top: 50px; }
    </style>
</head>
<body>

<h2>My Orders</h2>

<table>
    <tr>
        <th>Order ID</th>
        <th>Total Amount</th>
        <th>Status</th>
        <th>Order Date</th>
    </tr>

    <?php
    // Sirf uss user ke orders nikalo jiska session ID match kare
    $query = "SELECT * FROM orders WHERE user_id = '$user_id' ORDER BY id DESC";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>
                    <td>" . $row['id'] . "</td>
                    <td>₹" . $row['total_amount'] . "</td>
                    <td>" . $row['status'] . "</td>
                    <td>" . $row['order_date'] . "</td>
                  </tr>";
        }
    } else {
        echo "<tr><td colspan='4'>No orders found yet!</td></tr>";
    }
    ?>
</table>

</body>
</html>