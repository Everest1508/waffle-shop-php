<?php include 'header.php'; ?>
<style>
    /* Cart Page Styling */
    main {
        max-width: 900px;
        margin: 40px auto;
        padding: 20px;
        background: #fff;
        border-radius: 10px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        color: #000000;
    }
    
    h2 {
        text-align: center;
        color: #333;
        margin-bottom: 20px;
    }

    table {
        width: 100%;
        border-collapse: collapse;
        margin-bottom: 20px;
    }

    th, td {
        padding: 12px;
        text-align: center;
        border-bottom: 1px solid #ddd;
    }

    th {
        background: #007bff;
        color: white;
        font-weight: bold;
    }

    tr:hover {
        background-color: #f1f1f1;
    }

    input[type="number"] {
        width: 50px;
        padding: 5px;
        text-align: center;
        border: 1px solid #ccc;
        border-radius: 5px;
    }

    .btn {
        background: #28a745;
        color: white;
        padding: 8px 12px;
        text-decoration: none;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        transition: 0.3s;
    }

    .btn:hover {
        background: #218838;
    }

    .remove-btn {
        background: #dc3545;
    }

    .remove-btn:hover {
        background: #c82333;
    }

    .checkout-btn {
        display: block;
        width: 100%;
        text-align: center;
        font-size: 18px;
        padding: 10px;
        background: #ffc107;
        color: black;
        font-weight: bold;
    }

    .checkout-btn:hover {
        background: #e0a800;
    }

    .empty-cart {
        text-align: center;
        font-size: 16px;
        color: #888;
    }
</style>

<main>
    <section>
        <h2>Your Cart</h2>
        
        <table id="cart-table">
            <thead>
                <tr>
                    <th>Product</th>
                    <th>Quantity</th>
                    <th>Price</th>
                    <th>Total</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody id="cart-body">
                <tr><td colspan="5" class="empty-cart">Loading cart...</td></tr>
            </tbody>
            <tfoot>
                <tr>
                    <td colspan="3"><strong>Total:</strong></td>
                    <td id="cart-total">₹0</td>
                    <td></td>
                </tr>
            </tfoot>
        </table>

        <a href="checkout.php" class="btn checkout-btn" id="checkout-btn" style="display: none;">Proceed to Checkout</a>
    </section>
</main>
<?php include 'footer.php'; ?>

<script>
document.addEventListener("DOMContentLoaded", function () {
    loadCart();
});

function loadCart() {
    let cart = JSON.parse(localStorage.getItem("cart")) || [];
    let cartBody = document.getElementById("cart-body");
    let cartTotal = document.getElementById("cart-total");
    let checkoutBtn = document.getElementById("checkout-btn");

    cartBody.innerHTML = "";
    let totalPrice = 0;

    if (cart.length === 0) {
        cartBody.innerHTML = `<tr><td colspan="5" class="empty-cart">No items in cart yet.</td></tr>`;
        checkoutBtn.style.display = "none";
        return;
    }

    cart.forEach((item, index) => {
        let subtotal = item.price * item.quantity;
        totalPrice += subtotal;

        cartBody.innerHTML += `
            <tr>
                <td>${item.name}</td>
                <td>
                    <input type="number" value="${item.quantity}" min="1" onchange="updateQuantity(${index}, this.value)">
                </td>
                <td>₹${item.price}</td>
                <td>₹${subtotal}</td>
                <td><button class="btn remove-btn" onclick="removeItem(${index})">Remove</button></td>
            </tr>
        `;
    });

    cartTotal.innerText = `₹${totalPrice}`;
    checkoutBtn.style.display = "block";
}

function updateQuantity(index, quantity) {
    let cart = JSON.parse(localStorage.getItem("cart")) || [];
    if (quantity < 1) return;
    
    cart[index].quantity = parseInt(quantity);
    localStorage.setItem("cart", JSON.stringify(cart));
    loadCart();  // Reload cart display
}

function removeItem(index) {
    let cart = JSON.parse(localStorage.getItem("cart")) || [];
    cart.splice(index, 1);  // Remove item
    localStorage.setItem("cart", JSON.stringify(cart));
    loadCart();  // Reload cart display
}
</script>
