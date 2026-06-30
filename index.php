<?php
// Database connection aur Header
include('db_connect.php');
include('header.php');
?>

<!-- Banner Section -->
<div class="container-fluid hero-banner text-center">
    <h1 class="display-4 fw-bold">Beauty Store se Sajie</h1>
    <p class="fs-4">Best products, best prices. Aapki sundarta, hamari zimmedari!</p>
    <a href="#products-section" class="btn btn-primary btn-lg">Shop Now</a>
</div>
</div>

    </div>
</div>

<!-- Category Section (Circular Images) -->
<div class="container my-5 text-center">
    <div class="row justify-content-center">
        <!-- Foundation -->
        <div class="col-md-2 col-4 mb-4">
            <img src="images/foundation.jpg" class="category-img" alt="Foundation">
            <p class="mt-2 fw-bold">Foundation</p>
        </div>
        <!-- Eyeliner -->
        <div class="col-md-2 col-4 mb-4">
            <img src="images/eyeliner.jpg" class="category-img" alt="Eyeliner">
            <p class="mt-2 fw-bold">Eyeliner</p>
        </div>
        <!-- Eye Shadow -->
        <div class="col-md-2 col-4 mb-4">
            <img src="images/eyeshadow.jpg" class="category-img" alt="Eye Shadow">
            <p class="mt-2 fw-bold">Eye Shadow</p>
        </div>
        <!-- Lipstick -->
        <div class="col-md-2 col-4 mb-4">
            <img src="images/lipstick.jpg" class="category-img" alt="Lipstick">
            <p class="mt-2 fw-bold">Lipstick</p>
        </div>
        <!-- Skincare -->
        <div class="col-md-2 col-4 mb-4">
            <img src="images/skincare.jpg" class="category-img" alt="Skincare">
            <p class="mt-2 fw-bold">Skincare</p>
        </div>
    </div>
</div>

<!-- Products Section -->
<div class="container mt-5" id="products-section">
    <h2 class="text-center mb-4">Featured Products</h2>
    <div class="row">
        <?php
        $sql = "SELECT * FROM products";
        $result = mysqli_query($conn, $sql);
        if (mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)) {
                echo '
                <div class="col-md-4 mb-4">
                    <div class="card h-100">
                        <div class="card-body">
                            <h5 class="card-title">'.$row["name"].'</h5>
                            <p class="card-text">'.$row["description"].'</p>
                            <h6 class="text-primary">Rs. '.$row["price"].'</h6>
                            <a href="add_to_cart.php?pid='.$row["id"].'" class="btn btn-outline-primary">Add to Cart</a>
                        </div>
                    </div>
                </div>';
            }
        } else {
            echo "<p class='text-center'>No products found yet.</p>";
        }
        ?>
    </div>
</div>

<?php include('footer.php'); ?>