<?php
include 'db.php';
include 'header.php';

echo "<h2 style='color:#000000;'>Our Waffles</h2>";

$query = "SELECT * FROM products";
$result = $conn->query($query);

if (!$result) {
    die("Query failed: " . $conn->error);
}

if ($result->num_rows == 0) {
    echo "<p>No products found in the database.</p>";
} else {
    echo "<div class='product-list'>";

    while ($row = $result->fetch_assoc()) {
        echo "<div class='product'>
                <img src='data:image/jpeg;base64,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' alt='" . $row['name'] . "' width='150'>
                <h3>" . $row['name'] . "</h3>
                <p>Price: Rs. " . $row['price'] . "</p>
                <button class='add-to-cart' data-id='" . $row['id'] . "' 
                        data-name='" . $row['name'] . "' 
                        data-price='" . $row['price'] . "'>
                    Add to Cart
                </button>
              </div>";
    }

    echo "</div>";
    echo "<div id='toast-container'></div>";

}

include 'footer.php';
?>


<style>
    .product-list {
        display: flex;
        flex-wrap: wrap;
        justify-content: center; /* Center items horizontally */
        gap: 20px; /* Add spacing between products */
        padding: 20px;
    }

    .product {
        width: 250px; /* Set a fixed width */
        text-align: center;
        border: 1px solid #ddd;
        padding: 15px;
        border-radius: 8px;
        box-shadow: 2px 2px 10px rgba(0, 0, 0, 0.1);
        background: #fff;
        color: #000000;
    }

    .product img {
        max-width: 100%;
        height: auto;
        border-radius: 8px;
    }

    .product h3 {
        margin-top: 10px;
        font-size: 18px;
    }

    .product p {
        color: #555;
        font-size: 16px;
    }

    @media (max-width: 600px) {
        .product {
            width: 90%; /* Make products take full width on small screens */
        }
    }
    #toast-container {
  position: fixed;
  top: 50px;
  right: 20px;
  display: flex;
  flex-direction: column;
  align-items: flex-end;
}

.toast {
  background-color: #333;
  color: white;
  padding: 15px;
  margin-bottom: 10px;
  border-radius: 5px;
  opacity: 0;
  transition: opacity 0.3s ease-in-out;
}

.toast.show {
  opacity: 1;
}
.btn {
    display: inline-block;
    padding: 8px 12px;
    background-color: #ff6600;
    color: white;
    text-decoration: none;
    border-radius: 5px;
}

</style>
<script>
document.addEventListener("DOMContentLoaded", function () {
    const cart = JSON.parse(localStorage.getItem("cart")) || [];

    // Function to add item to cart
    function addToCart(event) {
        const button = event.target;
        const productId = button.getAttribute("data-id");
        const productName = button.getAttribute("data-name");
        const productPrice = parseFloat(button.getAttribute("data-price"));

        const existingItem = cart.find(item => item.id === productId);

        if (existingItem) {
            existingItem.quantity += 1;
        } else {
            cart.push({
                id: productId,
                name: productName,
                price: productPrice,
                quantity: 1
            });
        }

        localStorage.setItem("cart", JSON.stringify(cart));
        showToast(productName + " added to cart!")
        updateCartDisplay();
    }

    // Attach event listeners to buttons
    document.querySelectorAll(".add-to-cart").forEach(button => {
        button.addEventListener("click", addToCart);
    });

    function updateCartDisplay() {
        const cartCount = document.getElementById("cart-count");
        if (cartCount) {
            cartCount.textContent = cart.reduce((total, item) => total + item.quantity, 0);
        }
    }

    updateCartDisplay();
});

function showToast(message) {
  const toastContainer = document.getElementById('toast-container');
  const toast = document.createElement('div');
  toast.classList.add('toast');
  toast.textContent = message;
  toastContainer.appendChild(toast);

  setTimeout(() => {
    toast.classList.add('show');
  }, 10);

  setTimeout(() => {
    toast.classList.remove('show');
    setTimeout(() => {
      toast.remove();
    }, 300);
  }, 3000);
}

</script>