<?php include __DIR__ . '/db.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Waffle Shop - Home</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
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

    <main>
        <!-- Hero Section -->
        <section class="hero">
            <div class="hero-text">
                <h2>Delicious Waffles, Just a Click Away!</h2>
                <p>Order fresh, crispy waffles online with amazing flavors.</p>
                <a href="products.php" class="btn">Shop Now</a>
            </div>
            <div class="hero-image">
                <img src="images/waffel-banner.jpg" alt="Delicious Waffles">
            </div>
        </section>

        <!-- Featured Products Section -->
        <section class="featured">
            <h2>Our Bestsellers</h2>
            <div class="product-grid">
                <div class="product">
                    <img src="images/choco-waffle.jpg" alt="Chocolate Waffle">
                    <h3>Chocolate Waffle</h3>
                    <p>₹150</p>
                    <a href="products.php" class="btn">Add to Cart</a>
                </div>
                <div class="product">
                    <img src="images/strawberry-waffle.jpg" alt="Strawberry Waffle">
                    <h3>Strawberry Waffle</h3>
                    <p>₹160</p>
                    <a href="products.php" class="btn">Add to Cart</a>
                </div>
                <div class="product">
                    <img src="images/honey-waffle.jpg" alt="Honey Waffle">
                    <h3>Honey Butter Waffle</h3>
                    <p>₹140</p>
                    <a href="products.php" class="btn">Add to Cart</a>
                </div>
            </div>
        </section>

        <!-- Categories Section -->
        <section class="categories">
            <h2>Choose Your Favorite</h2>
            <div class="category-grid">
                <div class="category">
                    <img src="images/waffle-classic.jpg" alt="Classic Waffles">
                    <h3>Classic Waffles</h3>
                </div>
                <div class="category">
                    <img src="images\waffle-desert.jpg" alt="Dessert Waffles">
                    <h3>Dessert Waffles</h3>
                </div>
                <div class="category">
                    <img src="images/waffle-savoury.jpg" alt="Savoury Waffles">
                    <h3>Savoury Waffles</h3>
                </div>
            </div>
        </section>

    </main>

    <footer>
    <div class="footer-container">
        <!-- About Section -->
        <div class="footer-section about">
            <h3>About Waffle Shop</h3>
            <p>We serve the most delicious waffles made from high-quality ingredients. Order online and enjoy!</p>
            <p><strong>Open Hours:</strong> Mon-Sun: 8 AM - 10 PM</p>
        </div>

        <!-- Contact Section -->
        <div class="footer-section contact">
            <h3>Contact Us</h3>
            <p><i class="fas fa-map-marker-alt"></i> 123 Waffle Street, Mumbai, India</p>
            <p><i class="fas fa-phone-alt"></i> +91 98765 43210</p>
            <p><i class="fas fa-envelope"></i> support@waffleshop.com</p>
        </div>

        <!-- Quick Links -->
        <div class="footer-section links">
            <h3>Quick Links</h3>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="products.php">Menu</a></li>
                <li><a href="about.php">About Us</a></li>
                <li><a href="contact.php">Contact</a></li>
                <li><a href="cart.php">My Cart</a></li>
                <li><a href="policy.php">Privacy Policy</a></li>
                <li><a href="terms.php">Terms & Conditions</a></li>
            </ul>
        </div>

        <!-- Newsletter Subscription -->
        <div class="footer-section newsletter">
            <h3>Subscribe to Our Newsletter</h3>
            <p>Get the latest updates and offers directly in your inbox.</p>
            <form action="subscribe.php" method="POST">
                <input type="email" name="email" placeholder="Enter your email" required>
                <button type="submit">Subscribe</button>
            </form>
        </div>

        <!-- Google Maps -->
        <div class="footer-section map">
            <h3>Find Us</h3>
            <iframe 
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3770.4566979489946!2d72.8773923750036!3d19.07598368213788!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7cf47b3e4f1a1%3A0x7c7b71e4b6d8d9e7!2sMumbai!5e0!3m2!1sen!2sin!4v1707581479014!5m2!1sen!2sin" 
                width="100%" height="150" style="border:0;" allowfullscreen="" loading="lazy">
            </iframe>
        </div>

        <!-- Social Media Links -->
        <div class="footer-section social">
            <h3>Follow Us</h3>
            <a href="https://facebook.com" target="_blank"><i class="fab fa-facebook"></i></a>
            <a href="https://instagram.com" target="_blank"><i class="fab fa-instagram"></i></a>
            <a href="https://twitter.com" target="_blank"><i class="fab fa-twitter"></i></a>
            <a href="https://youtube.com" target="_blank"><i class="fab fa-youtube"></i></a>
        </div>
    </div>

    <!-- Copyright -->
    <div class="footer-bottom">
        <p>&copy; 2025 Waffle Shop. All rights reserved. | Designed by <a href="newgentech.net.in">NewGen Tech Pvt.Ltd</a></p>
    </div>
</footer>

</body>
</html>

