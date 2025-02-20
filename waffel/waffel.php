<?php
// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$database = "waffle_shop";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>

<!-- index.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Waffle Shop</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <h1>Waffle Shop</h1>
        <nav>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="about.php">About Us</a></li>
                <li><a href="testimonials.php">Testimonials</a></li>
                <li><a href="contact.php">Contact</a></li>
                <li><a href="cart.php">Cart</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <section class="hero">
            <h2>Delicious Waffles, Just a Click Away!</h2>
            <p>Order fresh, crispy waffles online with amazing flavors.</p>
            <a href="products.php" class="btn">Shop Now</a>
        </section>
    </main>
    <footer>
        <p>&copy; 2025 Waffle Shop. All rights reserved.</p>
    </footer>
</body>
</html>

<!-- about.php -->
<?php include 'header.php'; ?>
<main>
    <section>
        <h2>About Us</h2>
        <p>We are dedicated to bringing you the best waffles in town, made with high-quality ingredients.</p>
    </section>
</main>
<?php include 'footer.php'; ?>

<!-- contact.php -->
<?php include 'header.php'; ?>
<main>
    <section>
        <h2>Contact Us</h2>
        <form action="send_message.php" method="POST">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
            <label for="message">Message:</label>
            <textarea id="message" name="message" required></textarea>
            <button type="submit">Send</button>
        </form>
    </section>
</main>
<?php include 'footer.php'; ?>

<!-- testimonials.php -->
<?php include 'header.php'; ?>
<main>
    <section>
        <h2>Customer Testimonials</h2>
        <p>Our customers love our waffles! Read what they have to say.</p>
    </section>
</main>
<?php include 'footer.php'; ?>

<!-- cart.php -->
<?php include 'header.php'; ?>
<main>
    <section>
        <h2>Your Cart</h2>
        <p>No items in cart yet.</p>
    </section>
</main>
<?php include 'footer.php'; ?>

<!-- products.php -->
<?php include 'header.php'; ?>
<main>
    <section>
        <h2>Our Waffles</h2>
        <p>Browse our delicious waffles and add them to your cart!</p>
    </section>
</main>
<?php include 'footer.php'; ?>

<!-- styles.css -->
<style>
    body { font-family: Arial, sans-serif; background-color: #000; color: gold; }
    .hero { text-align: center; padding: 50px; }
    .btn { background: gold; color: black; padding: 10px; text-decoration: none; }
</style>