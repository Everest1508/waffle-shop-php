<?php
session_start();
include 'db.php';

$data = json_decode(file_get_contents("php://input"), true);

if (!$data || empty($data['cart'])) {
    echo json_encode(["success" => false, "message" => "Your cart is empty!"]);
    exit;
}

$name = $conn->real_escape_string($data['name']);
$email = $conn->real_escape_string($data['email']);
$address = $conn->real_escape_string($data['address']);
$payment = $conn->real_escape_string($data['payment']);
$totalAmount = (float) $data['totalAmount'];

// Insert order
$order_query = "INSERT INTO orders (name, email, address, payment_method, total_amount) VALUES ('$name', '$email', '$address', '$payment', '$totalAmount')";

if ($conn->query($order_query) === TRUE) {
    $order_id = $conn->insert_id;

    foreach ($data['cart'] as $item) {
        $product_id = (int) $item['id'];
        $quantity = (int) $item['quantity'];
        $price = (float) $item['price'];

        $conn->query("INSERT INTO order_items (order_id, product_id, quantity, price) VALUES ('$order_id', '$product_id', '$quantity', '$price')");
    }

    echo json_encode(["success" => true, "order_id" => $order_id]);
} else {
    echo json_encode(["success" => false, "message" => "Error placing order."]);
}
?>
