<?php
session_start();
include('db_connect.php');
include('header.php');

$user_id = $_SESSION['user_id'];

// Total calculate karo (wahi logic jo cart.php mein tha)
$sql = "SELECT SUM(products.price * cart.quantity) as grand_total 
        FROM cart 
        JOIN products ON cart.product_id = products.id 
        WHERE cart.user_id = '$user_id'";
$result = mysqli_query($conn, $sql);
$data = mysqli_fetch_assoc($result);
$grand_total = $data['grand_total'];
?>

<div class="container mt-5 text-center">
    <h2>Checkout</h2>
    <h3>Total Amount to Pay: Rs. <?php echo $grand_total; ?></h3>
    <form action="process_order.php" method="POST">
        <button type="submit" class="btn btn-primary btn-lg">Confirm Order</button>
    </form>
</div>

<?php include('footer.php'); ?>