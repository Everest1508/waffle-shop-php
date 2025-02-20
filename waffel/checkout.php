<?php include 'header.php'; ?>
<style>
    /* Checkout Page Styling */
    main {
        max-width: 600px;
        margin: 40px auto;
        padding: 20px;
        background: #fff;
        border-radius: 10px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    h2 {
        text-align: center;
        color: #333;
        margin-bottom: 20px;
    }

    form {
        display: flex;
        flex-direction: column;
    }

    label {
        font-weight: bold;
        margin-bottom: 5px;
    }

    input, select, textarea {
        width: 100%;
        padding: 10px;
        margin-bottom: 15px;
        border: 1px solid #ccc;
        border-radius: 5px;
        font-size: 16px;
    }

    .btn {
        background: #28a745;
        color: white;
        padding: 10px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        font-size: 18px;
        transition: 0.3s;
    }

    .btn:hover {
        background: #218838;
    }

    .total-container {
        font-size: 18px;
        font-weight: bold;
        text-align: center;
        margin: 20px 0;
    }

    .error {
        color: red;
        text-align: center;
        font-weight: bold;
        margin-bottom: 10px;
    }
</style>

<main>
    <h2>Checkout</h2>
    <div id="error-message" class="error"></div>
    
    <form id="checkout-form">
        <label for="name">Full Name</label>
        <input type="text" id="name" placeholder="Name" required>

        <label for="email">Email</label>
        <input type="email" id="email" placeholder="Email" required>

        <label for="address">Shipping Address</label>
        <textarea id="address" placeholder="Address" required></textarea>

        <label for="payment">Payment Method</label>
        <select id="payment">
            <option value="COD">Cash on Delivery</option>
            <option value="Card">Credit/Debit Card</option>
        </select>

        <div class="total-container">Total: ₹<span id="total-amount">0</span></div>

        <button type="submit" class="btn">Place Order</button>
    </form>
</main>
<?php include 'footer.php'; ?>

<script>
document.addEventListener("DOMContentLoaded", function () {
    loadCartTotal();
});

function loadCartTotal() {
    let cart = JSON.parse(localStorage.getItem("cart")) || [];
    let totalAmount = cart.reduce((sum, item) => sum + item.price * item.quantity, 0);
    document.getElementById("total-amount").innerText = totalAmount;
}

document.getElementById("checkout-form").addEventListener("submit", function (e) {
    e.preventDefault();

    let cart = JSON.parse(localStorage.getItem("cart")) || [];
    if (cart.length === 0) {
        document.getElementById("error-message").innerText = "Your cart is empty!";
        return;
    }

    let name = document.getElementById("name").value.trim();
    let email = document.getElementById("email").value.trim();
    let address = document.getElementById("address").value.trim();
    let payment = document.getElementById("payment").value;
    let totalAmount = document.getElementById("total-amount").innerText;

    fetch("process_order.php", {
        method: "POST",
        headers: { "Content-Type": "application/json" },
        body: JSON.stringify({
            name, email, address, payment, totalAmount, cart
        }),
    })
    .then(response => response.json())
    .then(data => {
        if (data.success) {
            localStorage.removeItem("cart");
            window.location.href = "order_success.php?order_id=" + data.order_id;
        } else {
            document.getElementById("error-message").innerText = data.message;
        }
    })
    .catch(error => console.error("Error:", error));
});
</script>
