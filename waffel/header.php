<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Waffle Shop</title>
    <link rel="stylesheet" href="styles.css">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
</head>
<body>

<header>
    <div class="logo">
        <h1>Waffle Shop</h1>
    </div>

    <nav>
        <ul class="nav-links">
            <li><a href="index.php">Home</a></li>
            <li><a href="about.php">About Us</a></li>
            <li><a href="products.php">Waffles</a></li>
            <li><a href="testimonials.php">Testimonials</a></li>
            <li><a href="contact.php">Contact</a></li>
            <li><a href="cart.php">
                <i class="fas fa-shopping-cart"></i> Cart <span id="cart-count">0</span>
            </a></li>
        </ul>
    </nav>

    <div class="search-bar">
        <input type="text" placeholder="Search Waffles...">
        <button><i class="fas fa-search"></i></button>
    </div>

    <div class="menu-toggle">
        <i class="fas fa-bars"></i>
    </div>
</header>

<script>
    // Responsive Navbar Toggle
    document.querySelector(".menu-toggle").addEventListener("click", function() {
        document.querySelector(".nav-links").classList.toggle("active");
    });
</script>
