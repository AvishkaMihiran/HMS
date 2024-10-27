<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IMPERIAL CROWN - Menu Order</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-image: url('{{ asset('images/jeewa/back.jpg') }}');
            background-size: cover;
            background-repeat: no-repeat;
        }
        header {
            background-color: #343a40;
            color: white;
            text-align: center;
            padding: 20px;
        }
        .container {
            width: 90%;
            margin: 20px auto;
            display: flex;
            flex-direction: column;
            gap: 20px;
        }
        .menu-category {
            width: 100%;
        }
        .menu-category h2 {
            border-bottom: 2px solid #343a40;
            padding-bottom: 5px;
            color: #FFD700;
        }
        .menu-items {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
        }
        .menu-item {
            width: calc(25% - 20px);
            display: flex;
            flex-direction: column;
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            position: relative;
        }
        .menu-item img {
            width: 100%;
            height: 200px;
            object-fit: cover;
        }
        .menu-details {
            padding: 15px;
            text-align: center;
        }
        .menu-details h3 {
            margin: 0;
            color: #343a40;
        }
        .menu-details p {
            margin: 5px 0;
            color: #555;
        }
        .menu-details input[type="number"] {
            width: 50px;
            padding: 5px;
            margin: 10px 0;
        }
        .menu-details .price {
            color: #28a745;
            font-size: 18px;
        }
        .add-to-cart-button {
            background-color: #FF8C00;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            margin-top: 10px;
            width: 100%;
        }
        .add-to-cart-button:hover {
            background-color: #FF7F50;
        }
        .cart {
            margin-top: 20px;
            padding: 15px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }
        .cart h2 {
            margin: 0 0 10px 0;
        }
        .cart-items {
            list-style: none;
            padding: 0;
        }
        .cart-items li {
            display: flex;
            justify-content: space-between;
            margin: 5px 0;
        }
        .remove-button {
            background-color: #dc3545;
            color: white;
            border: none;
            padding: 5px 10px;
            border-radius: 5px;
            cursor: pointer;
        }
        .remove-button:hover {
            background-color: #c82333;
        }
        .total-price {
            font-weight: bold;
            margin-top: 10px;
        }
        .order-now-button {
            background-color: #28a745;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            margin-top: 10px;
            width: 100%;
            display: none; /* Initially hidden */
        }
        .order-now-button:hover {
            background-color: #218838;
        }
    </style>
</head>
<body>

<header>
    <h1>IMPERIAL CROWN - Menu Order</h1>
</header>

<div class="container">

    <!-- Fried Rice Category -->
    <div class="menu-category">
        <h2>Fried Rice</h2>
        <div class="menu-items">
            <div class="menu-item" data-name="Chicken Fried Rice" data-price="950">
                <img src="images/jeewa/chif.png" alt="Chicken Fried Rice">
                <div class="menu-details">
                    <h3>Chicken Fried Rice</h3>
                    <p class="price">950 LKR</p>
                    <label for="quantity-chicken-fried-rice">Quantity:</label>
                    <input type="number" id="quantity-chicken-fried-rice" min="1" value="1">
                    <button class="add-to-cart-button">Add to Cart</button>
                </div>
            </div>

            <div class="menu-item" data-name="Vegetable Fried Rice" data-price="750">
                <img src="images/jeewa/vf.png" alt="Vegetable Fried Rice">
                <div class="menu-details">
                    <h3>Vegetable Fried Rice</h3>
                    <p class="price">750 LKR</p>
                    <label for="quantity-veg-fried-rice">Quantity:</label>
                    <input type="number" id="quantity-veg-fried-rice" min="1" value="1">
                    <button class="add-to-cart-button">Add to Cart</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Koththu Category -->
    <div class="menu-category">
        <h2>Koththu</h2>
        <div class="menu-items">
            <div class="menu-item" data-name="Vegetable Koththu" data-price="750">
                <img src="images/jeewa/vegkottu.png" alt="Vegetable Koththu">
                <div class="menu-details">
                    <h3>Vegetable Koththu</h3>
                    <p class="price">750 LKR</p>
                    <label for="quantity-veg-koththu">Quantity:</label>
                    <input type="number" id="quantity-veg-koththu" min="1" value="1">
                    <button class="add-to-cart-button">Add to Cart</button>
                </div>
            </div>

            <div class="menu-item" data-name="Chicken Koththu" data-price="950">
                <img src="images/jeewa/chikk.jpg" alt="Chicken Koththu">
                <div class="menu-details">
                    <h3>Chicken Koththu</h3>
                    <p class="price">950 LKR</p>
                    <label for="quantity-chicken-koththu">Quantity:</label>
                    <input type="number" id="quantity-chicken-koththu" min="1" value="1">
                    <button class="add-to-cart-button">Add to Cart</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Noodles Category -->
    <div class="menu-category">
        <h2>Noodles</h2>
        <div class="menu-items">
            <div class="menu-item" data-name="Chicken Noodles" data-price="1050">
                <img src="images/jeewa/cn.jpg" alt="Chicken Noodles">
                <div class="menu-details">
                    <h3>Chicken Noodles</h3>
                    <p class="price">1050 LKR</p>
                    <label for="quantity-chicken-noodles">Quantity:</label>
                    <input type="number" id="quantity-chicken-noodles" min="1" value="1">
                    <button class="add-to-cart-button">Add to Cart</button>
                </div>
            </div>

            <div class="menu-item" data-name="Vegetable Noodles" data-price="850">
                <img src="images/jeewa/vn.jpg" alt="Vegetable Noodles">
                <div class="menu-details">
                    <h3>Vegetable Noodles</h3>
                    <p class="price">850 LKR</p>
                    <label for="quantity-veg-noodles">Quantity:</label>
                    <input type="number" id="quantity-veg-noodles" min="1" value="1">
                    <button class="add-to-cart-button">Add to Cart</button>
                </div>
            </div>

            <div class="menu-item" data-name="Egg Noodles" data-price="950">
                <img src="images/jeewa/en.jpg" alt="Egg Noodles">
                <div class="menu-details">
                    <h3>Egg Noodles</h3>
                    <p class="price">950 LKR</p>
                    <label for="quantity-egg-noodles">Quantity:</label>
                    <input type="number" id="quantity-egg-noodles" min="1" value="1">
                    <button class="add-to-cart-button">Add to Cart</button>
                </div>
            </div>
        </div>
    </div>

    <div class="cart">
        <h2>Your Cart</h2>
        <ul class="cart-items"></ul>
        <div class="total-price">Total Price: <span id="total-price">0</span> LKR</div>
        <button class="order-now-button" id="order-now-button">Order Now</button>
    </div>
</div>

<script>
    const cart = [];
    const totalPriceDisplay = document.getElementById('total-price');
    const orderNowButton = document.getElementById('order-now-button');
    const cartItemsContainer = document.querySelector('.cart-items');

    document.querySelectorAll('.add-to-cart-button').forEach(button => {
        button.addEventListener('click', () => {
            const menuItem = button.closest('.menu-item');
            const itemName = menuItem.getAttribute('data-name');
            const itemPrice = parseFloat(menuItem.getAttribute('data-price'));
            const itemQuantity = parseInt(menuItem.querySelector('input[type="number"]').value);

            const cartItem = {
                name: itemName,
                price: itemPrice,
                quantity: itemQuantity,
                total: itemPrice * itemQuantity
            };

            cart.push(cartItem);
            updateCart();
        });
    });

    function updateCart() {
        cartItemsContainer.innerHTML = '';
        let total = 0;

        cart.forEach((item, index) => {
            const li = document.createElement('li');
            li.textContent = `${item.name} - ${item.quantity} x ${item.price} LKR = ${item.total} LKR`;
            
            const removeButton = document.createElement('button');
            removeButton.textContent = 'Remove';
            removeButton.className = 'remove-button';
            removeButton.addEventListener('click', () => {
                cart.splice(index, 1);
                updateCart();
            });

            li.appendChild(removeButton);
            cartItemsContainer.appendChild(li);
            total += item.total;
        });

        totalPriceDisplay.textContent = total.toFixed(2);
        orderNowButton.style.display = total > 0 ? 'block' : 'none';
    }

    orderNowButton.addEventListener('click', () => {
        alert('Order placed successfully!');
        cart.length = 0; // Clear the cart
        updateCart(); // Refresh the cart display
    });
</script>

</body>
</html>
