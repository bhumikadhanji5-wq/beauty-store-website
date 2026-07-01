<?php
// Database connection aur Header
include('db_connect.php');
include('header.php');
?>

<!-- Banner Section -->
<div class="container-fluid hero-banner text-center">
    <h1 class="display-4 fw-bold">Elevate Your Beauty</h1>
    <p class="fs-4">Premium products, unbeatable prices. Your radiance, our commitment!</p>
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

<style>
    /* Aesthetic Styling */
    .aesthetic-card {
        background-color: #F9F7F2; /* Cream/Off-white background */
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

<div class="container mt-5 mb-5">
   <h2 class="text-center aesthetic-heading mb-5">Our Signature Sets</h2>
    <div class="row">
        <!-- Kit 1 -->
        <div class="col-md-4">
            <div class="aesthetic-card h-100 shadow-sm">
                <img src="images/velvet_matte.jpg" class="img-fluid mb-3 rounded" style="max-height: 200px;">
                <h5 class="aesthetic-heading">The Signature Kit</h5>
                <p class="text-muted">A bold matte finish for your everyday iconic look.</p>
                <button class="btn btn-aesthetic">View Details</button>
            </div>
        </div>
        <!-- Kit 2 -->
        <div class="col-md-4">
            <div class="aesthetic-card h-100 shadow-sm">
                <img src="images/serum.jpg" class="img-fluid mb-3 rounded" style="max-height: 200px;">
                <h5 class="aesthetic-heading">Radiance Ritual</h5>
                <p class="text-muted">For a healthy, natural glow that lasts all day.</p>
                <button class="btn btn-aesthetic">View Details</button>
            </div>
        </div>
        <!-- Kit 3 -->
        <div class="col-md-4">
            <div class="aesthetic-card h-100 shadow-sm">
                <img src="images/face_wash.jpg" class="img-fluid mb-3 rounded" style="max-height: 200px;">
                <h5 class="aesthetic-heading">Weekend Reset</h5>
                <p class="text-muted">Gentle care for your skin after a long week.</p>
                <button class="btn btn-aesthetic">View Details</button>
            </div>
        </div>
    </div>
</div>

<?php include('footer.php'); ?>