<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IMPERIAL CROWN - Food Menu</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-image: url('{{ asset('images/jeewa/back.jpg') }}');
            background-size: cover;
            margin: 0;
            padding: 0;
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
            color: #FFD700;
            text-align: center;
        }
        .menu-items {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            justify-content: center;
        }
        .menu-item {
            width: calc(25% - 20px);
            text-align: center;
            background-color: white;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }
        .menu-item img {
            width: 100%;
            height: 200px;
            object-fit: cover;
        }
        .menu-item h3 {
            margin: 10px 0;
            color: #343a40;
        }
    </style>
</head>
<body>

<header>
    <h1>IMPERIAL CROWN - Food Menu</h1>
</header>

<div class="container">

    <!-- Fried Rice Category -->
    <div class="menu-category">
        <h2>Fried Rice</h2>
        <div class="menu-items">
            <div class="menu-item">
                <img src="images/jeewa/chif.png" alt="Chicken Fried Rice">
                <h3>Chicken Fried Rice</h3>
            </div>
            <div class="menu-item">
                <img src="images/jeewa/vf.png" alt="Vegetable Fried Rice">
                <h3>Vegetable Fried Rice</h3>
            </div>
            <div class="menu-item">
                <img src="images/jeewa/ef.jpg" alt="Egg Fried Rice">
                <h3>Egg Fried Rice</h3>
            </div>
            <div class="menu-item">
                <img src="images/jeewa/ssf.jpg" alt="Sea Food Fried Rice">
                <h3>Sea Food Fried Rice</h3>
            </div>
            <div class="menu-item">
                <img src="images/jeewa/mif.jpg" alt="Mix Fried Rice">
                <h3>Mix Fried Rice</h3>
            </div>
            <div class="menu-item">
                <img src="images/jeewa/ng.jpg" alt="Nasi Goreng">
                <h3>Nasi Goreng</h3>
            </div>
            <div class="menu-item">
                <img src="images/jeewa/tr.jpg" alt="Thai Rice Chicken">
                <h3>Thai Rice Chicken</h3>
            </div>
        </div>
    </div>

    <!-- Koththu Category -->
    <div class="menu-category">
        <h2>Koththu</h2>
        <div class="menu-items">
            <div class="menu-item">
                <img src="images/jeewa/vegkottu.png" alt="Vegetable Koththu">
                <h3>Vegetable Koththu</h3>
            </div>
            <div class="menu-item">
                <img src="images/jeewa/chikk.jpg" alt="Chicken Koththu">
                <h3>Chicken Koththu</h3>
            </div>
            <div class="menu-item">
                <img src="images/jeewa/eggkk.jpg" alt="Egg Koththu">
                <h3>Egg Koththu</h3>
            </div>
            <div class="menu-item">
                <img src="images/jeewa/sk.jpeg" alt="Sea Food Koththu">
                <h3>Sea Food Koththu</h3>
            </div>
        </div>
    </div>

    <!-- Noodles Category -->
    <div class="menu-category">
        <h2>Noodles</h2>
        <div class="menu-items">
            <div class="menu-item">
                <img src="images/jeewa/cn.jpg" alt="Chicken Noodles">
                <h3>Chicken Noodles</h3>
            </div>
            <div class="menu-item">
                <img src="images/jeewa/vn.jpg" alt="Vegetable Noodles">
                <h3>Vegetable Noodles</h3>
            </div>
            <div class="menu-item">
                <img src="images/jeewa/en.jpg" alt="Egg Noodles">
                <h3>Egg Noodles</h3>
            </div>
            <div class="menu-item">
                <img src="images/jeewa/sn.png" alt="Sea Food Noodles">
                <h3>Sea Food Noodles</h3>
            </div>
        </div>
    </div>

    <!-- Sandwich Category -->
    <div class="menu-category">
        <h2>Sandwich</h2>
        <div class="menu-items">
            <div class="menu-item">
                <img src="images/jeewa/es.jpg" alt="Egg Sandwich">
                <h3>Egg Sandwich</h3>
            </div>
            <div class="menu-item">
                <img src="images/jeewa/cs.png" alt="Chicken Sandwich">
                <h3>Chicken Sandwich</h3>
            </div>
            <div class="menu-item">
                <img src="images/jeewa/gs.jpg" alt="Grill Chicken Sandwich">
                <h3>Grill Chicken Sandwich</h3>
            </div>
            <div class="menu-item">
                <img src="images/jeewa/css.jpg" alt="Club Sandwich">
                <h3>Club Sandwich</h3>
            </div>
        </div>
    </div>

    <!-- Fresh Juice and Shakes Category -->
    <div class="menu-category">
        <h2>Fresh Juice and Shakes</h2>
        <div class="menu-items">
            <div class="menu-item">
                <img src="images/jeewa/wj.jpg" alt="Watermelon Juice">
                <h3>Watermelon Juice</h3>
            </div>
            <div class="menu-item">
                <img src="images/jeewa/pj.jpg" alt="Papaya Juice">
                <h3>Papaya Juice</h3>
            </div>
            <div class="menu-item">
                <img src="images/jeewa/mj.jpeg" alt="Mango Juice">
                <h3>Mango Juice</h3>
            </div>
            <div class="menu-item">
                <img src="images/jeewa/lj.jpeg" alt="Lime Juice">
                <h3>Lime Juice</h3>
            </div>
        </div>
    </div>

</div>
</body>
</html>
