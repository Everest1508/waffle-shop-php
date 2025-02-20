<?php
include 'db.php';
session_start();

if (!isset($_GET['order_id'])) {
    echo "Invalid Order!";
    exit;
}

$order_id = intval($_GET['order_id']);

// Fetch order details
$order_query = "SELECT * FROM orders WHERE id = $order_id";
$order_result = $conn->query($order_query);

if ($order_result->num_rows == 0) {
    echo "Order not found!";
    exit;
}

$order = $order_result->fetch_assoc();

// Fetch ordered items
$items_query = "SELECT oi.*, p.name 
                FROM order_items oi 
                JOIN products p ON oi.product_id = p.id 
                WHERE oi.order_id = $order_id";
$items_result = $conn->query($items_query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Success - Waffle Shop</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f8f8f8;
            color: #000; /* Black text */
        }
        header {
            background-color: #fff;
            padding: 15px;
            text-align: center;
            border-bottom: 2px solid #000;
        }
        main {
            width: 90%;
            max-width: 600px;
            margin: 30px auto;
            background: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .order-success {
            text-align: center;
        }
        h2 {
            color: #000;
        }
        p {
            font-size: 16px;
            margin-bottom: 10px;
        }
        ul {
            list-style: none;
            padding: 0;
        }
        ul li {
            background: #f0f0f0;
            padding: 10px;
            margin: 5px 0;
            border-radius: 5px;
            text-align: left;
        }
        .btn {
            display: inline-block;
            padding: 10px 15px;
            background: #000;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
            margin-top: 15px;
        }
        .btn:hover {
            background: #444;
        }
        footer {
            text-align: center;
            padding: 15px;
            margin-top: 20px;
            background: #fff;
            border-top: 2px solid #000;
        }
    </style>
</head>
<body>

<header>
    <h1>Waffle Shop</h1>
</header>

<main>
    <section class="order-success">
        <h2>🎉 Order Placed Successfully!</h2>
        <p>Thank you, <strong><?php echo htmlspecialchars($order['name']); ?></strong>! Your order has been placed.</p>
        <p><strong>Order ID:</strong> <?php echo $order_id; ?></p>
        <p><strong>Total Amount:</strong> ₹<?php echo number_format($order['total_amount'], 2); ?></p>

        <h3>Ordered Items:</h3>
        <ul>
            <?php while ($item = $items_result->fetch_assoc()) { ?>
                <li>
                    <strong><?php echo htmlspecialchars($item['name']); ?></strong> 
                    - ₹<?php echo $item['price']; ?> x <?php echo $item['quantity']; ?>
                </li>
            <?php } ?>
        </ul>

        <a href="index.php" class="btn">Return to Home</a>
    </section>
</main>

<footer>
    <p>&copy; 2025 Waffle Shop. All rights reserved.</p>
</footer>

</body>
</html>

