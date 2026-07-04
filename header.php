<?php
// Session aur Database connection
session_start();
include('db_connect.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beauty Store</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
</head>
<body>

<div class="announcement-bar">
    <div class="container d-flex justify-content-center gap-4">
        <span><i class="fas fa-truck"></i> Free Shipping</span>
        <span><i class="fas fa-tag"></i> Code: BEAUTY10</span>
        <span><i class="fas fa-undo"></i> Easy Returns</span>
    </div>
</div>


<nav class="navbar navbar-expand-lg navbar-light bg-light">
    ...
</nav>   

<nav class="navbar navbar-expand-lg navbar-light bg-light shadow-sm mb-4">
    <div class="container">
        <a class="navbar-brand" href="index.php"><b>Beauty Store</b></a>
        
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        
        <div class="collapse navbar-collapse" id="navbarNav">
            <!-- Search Bar -->
<form class="d-flex mx-auto search-form" action="search.php" method="GET">
    <input class="form-control" type="search" name="query" placeholder="Search for products..." aria-label="Search">
    <button class="btn" type="submit"><i class="fas fa-search"></i></button>
</form>
        
            <ul class="navbar-nav ms-auto">
    <li class="nav-item">
        <a class="nav-link" href="wishlist.php"><i class="far fa-heart"></i> Wishlist</a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="cart.php"><i class="fas fa-shopping-bag"></i> Cart</a>
    </li>

    <?php if (isset($_SESSION['user_id'])): ?>
        <li class="nav-item">
            <a class="nav-link" href="logout.php"><i class="fas fa-sign-out-alt"></i> Logout</a>
        </li>
    <?php else: ?>
        <li class="nav-item">
            <a class="nav-link" href="login.php"><i class="far fa-user"></i> Login / Register</a>
        </li>
    <?php endif; ?>
</ul>
        </div>
    </div>
</nav>