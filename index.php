<?php
// Database connection aur Header
include('db_connect.php');
include('header.php');
?>

<!-- Full Background Hero Section -->
<section class="hero-section">
    <div class="container">
        <div class="row">
            <div class="col-md-6 hero-overlay">
                <h1 class="hero-title">Elevate Your Beauty</h1>
                <p class="hero-desc">Premium products, unbeatable prices. <br> Your radiance, our commitment!</p>
                
                <a href="shop.php" class="btn btn-primary">Shop Now</a>
            </div>
        </div>
    </div>
</section>


                
            </div>
        </div>
    </div>
</section>
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

<style>
    /* Aesthetic Styling */
    .aesthetic-card {
        background-color: #6d5a29; /* Cream/Off-white background */
        border: 1px solid #D2B48C; /* Light Tan/Brown border */
        padding: 25px;
        text-align: center;
        border-radius: 12px; /* Soft edges */
        transition: transform 0.3s ease;
    }
    .aesthetic-card:hover {
        transform: translateY(-5px);
    }
    .aesthetic-heading {
        color: #6F4E37; /* Deep Coffee Brown */
        font-family: 'Segoe UI', sans-serif;
        letter-spacing: 1px;
        font-weight: 600;
    }
    .btn-aesthetic {
        background-color: #6F4E37;
        color: #ffffff;
        border: none;
        padding: 8px 20px;
        border-radius: 5px;
    }
    .btn-aesthetic:hover {
        background-color: #5d4037;
        color: #ffffff;
    }
</style>



<?php include('footer.php'); ?>