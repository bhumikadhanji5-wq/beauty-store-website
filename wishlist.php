<?php
session_start();
include 'header.php'; // Isme tumhara naya header icon wala code aayega
?>

<div class="container mt-5" style="min-height: 500px;">
    <h2 class="text-center mb-5" style="color: #5D4037;">My Wishlist</h2>
    
    <div class="row">
        <!-- Agar wishlist empty hai -->
        <div class="col-12 text-center">
            <p class="text-muted">Your wishlist is currently empty. <br> 
            <a href="index.php" class="btn btn-aesthetic mt-3">Start Shopping</a></p>
        </div>
        
        <!-- Jab products add ho jaye, tum yahan loop use kar sakte ho -->
    </div>
</div>

<?php
include 'footer.php'; // Agar tumne footer banaya hai
?>