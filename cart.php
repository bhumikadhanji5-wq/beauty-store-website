<?php
session_start();
include('db_connect.php'); // Database connection file
include('header.php');     // Header file

// Check karo ki user login hai ya nahi
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}

$user_id = $_SESSION['user_id'];

// SQL Query: Join table to get product names and prices
$sql = "SELECT cart.*, products.name, products.price 
        FROM cart 
        JOIN products ON cart.product_id = products.id 
        WHERE cart.user_id = '$user_id'";

$result = mysqli_query($conn, $sql);
?>

<div class="container mt-5">
    <h2>Your Shopping Cart</h2>
    <table class="table table-bordered mt-4">
        <thead>
            <tr>
                <th>Product Name</th>
                <th>Price</th>
                <th>Quantity</th>
                <th>Total Price</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php 
            $grand_total = 0;
            if(mysqli_num_rows($result) > 0) {
                while($row = mysqli_fetch_assoc($result)): 
                    $total = $row['price'] * $row['quantity'];
                    $grand_total += $total;
            ?>
            <tr>
                <td><?php echo $row['name']; ?></td>
                <td>Rs. <?php echo $row['price']; ?></td>
                <td><?php echo $row['quantity']; ?></td>
                <td>Rs. <?php echo $total; ?></td>
                <td>
    <a href="remove_from_cart.php?id=<?php echo $row['id']; ?>" class="btn btn-danger btn-sm">Remove</a>
</td>
            </tr>
            <?php 
                endwhile; 
            } else {
                echo "<tr><td colspan='4' class='text-center'>Your cart is empty!</td></tr>";
            }
            ?>
        </tbody>
    </table>
    
    <?php if($grand_total > 0): ?>
    <div class="text-end">
        <h3>Grand Total: Rs. <?php echo $grand_total; ?></h3>
        <a href="checkout.php" class="btn btn-success mt-3">Proceed to Checkout</a>
    </div>
    <?php endif; ?>
</div>

<?php include('footer.php'); ?>