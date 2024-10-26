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
        }
        .menu-category {
            margin-bottom: 40px;
        }
        .menu-category h2 {
            border-bottom: 2px solid #343a40;
            padding-bottom: 5px;
            color: #FFD700;
        }
        .menu-item {
            display: flex;
            align-items: center;
            background-color: white;
            padding: 15px;
            margin: 10px 0;
            border-radius: 10px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }
        .menu-item img {
            width: 100px;
            height: 100px;
            border-radius: 10px;
            margin-right: 20px;
            object-fit: cover;
        }
        .menu-details {
            flex-grow: 1;
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
        }
        .menu-details .price {
            color: #28a745;
            font-size: 18px;
        }
        .order-button {
            background-color: #28a745;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
        }
        .order-button:hover {
            background-color: #218838;
        }
    </style>
</head>
<body>

<header>
    <h1>IMPERIAL CROWN - Menu Order</h1>
</header>

<div class="container">
    <!-- Salad Category -->
    <div class="menu-category">
        <h2>Salad</h2>
        <div class="menu-item">
            <img src="images/jeewa/vegsalad.jpg" alt="Salad">
            <div class="menu-details">
                <h3>Vegitable Salad</h3>
                <p class="price">500 LKR</p>
                <label for="quantity-salad">Quantity: </label>
                <input type="number" id="quantity-salad" min="1" value="1">
                <button class="order-button">Order Now</button>
            </div>
        </div>

        <div class="menu-item">
            <img src="images/jeewa/boilveg.png" alt="Salad">
            <div class="menu-details">
                <h3>Boil Vegitable</h3>
                <p class="price">600 LKR</p>
                <label for="quantity-salad">Quantity: </label>
                <input type="number" id="quantity-salad" min="1" value="1">
                <button class="order-button">Order Now</button>
            </div>
        </div>
        <!-- Add more salad items here -->
    </div>

    <!-- Fried Rice Category -->
    <div class="menu-category">
        <h2>vegitable Fried Rice</h2>
        <div class="menu-item">
            <img src="images/jeewa/vegrice.png" alt="Fried Rice">
            <div class="menu-details">
                <h3>Chicken Fried Rice</h3>
                <p class="price">750 LKR</p>
                <label for="quantity-fried-rice">Quantity: </label>
                <input type="number" id="quantity-fried-rice" min="1" value="1">
                <button class="order-button">Order Now</button>
            </div>
        </div>

        <h2>Chicken Fried Rice</h2>
        <div class="menu-item">
            <img src="images/jeewa/chickrice.png" alt="Fried Rice">
            <div class="menu-details">
                <h3>Chicken Fried Rice</h3>
                <p class="price">900 LKR</p>
                <label for="quantity-fried-rice">Quantity: </label>
                <input type="number" id="quantity-fried-rice" min="1" value="1">
                <button class="order-button">Order Now</button>
            </div>
        </div>
        <!-- Add more fried rice items here -->
    </div>

    <!-- Koththu Category -->
    <div class="menu-category">
        <h2>Koththu</h2>
        <div class="menu-item">
            <img src="koththu.jpg" alt="Koththu">
            <div class="menu-details">
                <h3>Chicken Koththu</h3>
                <p class="price">$9.99</p>
                <label for="quantity-koththu">Quantity: </label>
                <input type="number" id="quantity-koththu" min="1" value="1">
                <button class="order-button">Order Now</button>
            </div>
        </div>
        <!-- Add more koththu items here -->
    </div>

    <!-- Noodles Category -->
    <div class="menu-category">
        <h2>Noodles</h2>
        <div class="menu-item">
            <img src="noodles.jpg" alt="Noodles">
            <div class="menu-details">
                <h3>Chicken Noodles</h3>
                <p class="price">$8.99</p>
                <label for="quantity-noodles">Quantity: </label>
                <input type="number" id="quantity-noodles" min="1" value="1">
                <button class="order-button">Order Now</button>
            </div>
        </div>
        <!-- Add more noodles items here -->
    </div>

    <!-- Seafood Category -->
    <div class="menu-category">
        <h2>Seafood</h2>
        <div class="menu-item">
            <img src="seafood.jpg" alt="Seafood">
            <div class="menu-details">
                <h3>Grilled Prawns</h3>
                <p class="price">$14.99</p>
                <label for="quantity-seafood">Quantity: </label>
                <input type="number" id="quantity-seafood" min="1" value="1">
                <button class="order-button">Order Now</button>
            </div>
        </div>
        <!-- Add more seafood items here -->
    </div>

    <!-- Rice and Curry Category -->
    <div class="menu-category">
        <h2>Rice and Curry</h2>
        <div class="menu-item">
            <img src="rice_curry.jpg" alt="Rice and Curry">
            <div class="menu-details">
                <h3>Chicken Rice and Curry</h3>
                <p class="price">$7.99</p>
                <label for="quantity-rice-curry">Quantity: </label>
                <input type="number" id="quantity-rice-curry" min="1" value="1">
                <button class="order-button">Order Now</button>
            </div>
        </div>
        <!-- Add more rice and curry items here -->
    </div>

    <!-- Fresh Juice Category -->
    <div class="menu-category">
        <h2>Fresh Juice</h2>
        <div class="menu-item">
            <img src="fresh_juice.jpg" alt="Fresh Juice">
            <div class="menu-details">
                <h3>Orange Juice</h3>
                <p class="price">$3.99</p>
                <label for="quantity-juice">Quantity: </label>
                <input type="number" id="quantity-juice" min="1" value="1">
                <button class="order-button">Order Now</button>
            </div>
        </div>
        <!-- Add more fresh juice items here -->
    </div>
</div>

</body>
</html>
