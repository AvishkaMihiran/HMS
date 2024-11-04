<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IMPERIAL CROWN - Menu</title>
    <style>
        /* Reset default styles */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        /* Basic styling for body and layout */
        body {
            font-family: Arial, sans-serif;
            background-image: url('{{ asset('images/jeewa/back.jpg') }}');
            background-size: cover;
            background-repeat: no-repeat;
            color: #333;
        }
        
        /* Header styling */
        header {
            background-color: #343a40;
            color: #fff;
            padding: 20px;
            text-align: center;
        }
        
        /* Container for the content */
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }
        
        /* Menu categories styling */
        .menu-category {
            margin-bottom: 40px;
        }
        
        .menu-category h2 {
            color: #FFD700;
            border-bottom: 2px solid #FFD700;
            padding-bottom: 10px;
            margin-bottom: 20px;
        }
        
        /* Styling for menu items in each category */
        .menu-items {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
        }
        
        .menu-item {
            width: calc(25% - 20px);
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            text-align: center;
            transition: transform 0.3s ease;
        }
        
        /* Hover effect for menu items */
        .menu-item:hover {
            transform: translateY(-5px);
        }
        
        /* Image styling inside menu items */
        .menu-item img {
            width: 100%;
            height: 200px;
            object-fit: cover;
        }
        
        /* Menu item details */
        .menu-details {
            padding: 15px;
        }
        
        .menu-details h3 {
            color: #343a40;
            font-size: 18px;
            margin-bottom: 5px;
        }
        
        .menu-details .price {
            color: #28a745;
            font-size: 16px;
            font-weight: bold;
        }
    </style>
</head>
<body>

<header>
    <h1>IMPERIAL CROWN - Menu</h1>
</header>

<div class="container">
    <!-- Fried Rice Category -->
    <div class="menu-category">
        <h2>Fried Rice</h2>
        <div class="menu-items">
            <div class="menu-item">
                <img src="images/jeewa/chif.png" alt="Chicken Fried Rice">
                <div class="menu-details">
                    <h3>Chicken Fried Rice</h3>
                    <p class="price">2000 LKR</p>
                </div>
            </div>
            <div class="menu-item">
                <img src="images/jeewa/vf.png" alt="Vegetable Fried Rice">
                <div class="menu-details">
                    <h3>Vegetable Fried Rice</h3>
                    <p class="price">1850 LKR</p>
                </div>
            </div>
            <div class="menu-item">
                <img src="images/jeewa/ef.jpg" alt="Egg Fried Rice">
                <div class="menu-details">
                    <h3>Egg Fried Rice</h3>
                    <p class="price">1900 LKR</p>
                </div>
            </div>
            <div class="menu-item">
                <img src="images/jeewa/ssf.jpg" alt="Sea Food Fried Rice">
                <div class="menu-details">
                    <h3>Sea Food Fried Rice</h3>
                    <p class="price">2500 LKR</p>
                </div>
            </div>

            <div class="menu-item">
            <img src="images/jeewa/mif.jpg" alt="mix Fried Rice">
                <div class="menu-details">
                    <h3>Mix Fried Rice</h3>
                    <p class="price">2650 LKR</p>
                </div>
            </div>

            <div class="menu-item">
            <img src="images/jeewa/ng.jpg" alt="Nasi Goreng">
                <div class="menu-details">
                    <h3>Nasi Goreng</h3>
                    <p class="price">3500 LKR</p>
                </div>
            </div>

            <div class="menu-item">
            <img src="images/jeewa/tr.jpg" alt="Nasi Goreng">
                <div class="menu-details">
                    <h3>Thai Rice Chicken</h3>
                    <p class="price">2500 LKR</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Koththu Category -->
    <div class="menu-category">
        <h2>Koththu</h2>
        <div class="menu-items">
            <div class="menu-item">
                <img src="images/jeewa/vegkottu.png" alt="Vegetable Koththu">
                <div class="menu-details">
                    <h3>Vegetable Koththu</h3>
                    <p class="price">1500 LKR</p>
                </div>
            </div>
            <div class="menu-item">
                <img src="images/jeewa/chikk.jpg" alt="Chicken Koththu">
                <div class="menu-details">
                    <h3>Chicken Koththu</h3>
                    <p class="price">1950 LKR</p>
                </div>
            </div>
            <div class="menu-item">
                <img src="images/jeewa/eggkk.jpg" alt="Egg Koththu">
                <div class="menu-details">
                    <h3>Egg Koththu</h3>
                    <p class="price">1650 LKR</p>
                </div>
            </div>
            <div class="menu-item">
            <img src="images/jeewa/sk.jpeg" alt="Chicken Koththu">
                <div class="menu-details">
                    <h3>Sea food Koththu</h3>
                    <p class="price">2500 LKR</p>
                </div>
            </div>
        </div>
    </div>

    
    <!-- Noodles Category -->
    <div class="menu-category">
        <h2>Noodles</h2>
        <div class="menu-items">
            <div class="menu-item">
                <img src="images/jeewa/cn.jpg" alt="Chicken Noodles">
                <div class="menu-details">
                    <h3>Chicken Noodles</h3>
                    <p class="price">1050 LKR</p>
                </div>
            </div>
            <div class="menu-item">
                <img src="images/jeewa/vn.jpg" alt="Vegetable Noodles">
                <div class="menu-details">
                    <h3>Vegetable Noodles</h3>
                    <p class="price">850 LKR</p>
                </div>
            </div>

            <div class="menu-item">
            <img src="images/jeewa/en.jpg" alt="Egg Noodles">
                <div class="menu-details">
                    <h3>Egg Noodles</h3>
                    <p class="price">950 LKR</p>
                </div>
            </div>

            <div class="menu-item">
            <img src="images/jeewa/sn.png" alt="Egg Noodles">
                <div class="menu-details">
                    <h3>Sea food  Noodles</h3>
                    <p class="price">950 LKR</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Sandwich Category -->
    <div class="menu-category">
        <h2>Sandwich</h2>
        <div class="menu-items">
            <div class="menu-item">
                <img src="images/jeewa/es.jpg" alt="Egg Sandwich">
                <div class="menu-details">
                    <h3>Egg Sandwich</h3>
                    <p class="price">500 LKR</p>
                </div>
            </div>
            <div class="menu-item">
                <img src="images/jeewa/cs.png" alt="Chicken Sandwich">
                <div class="menu-details">
                    <h3>Chicken Sandwich</h3>
                    <p class="price">850 LKR</p>
                </div>
            </div>
            <div class="menu-item">
            <img src="images/jeewa/gs.jpg" alt="Egg Noodles">
                <div class="menu-details">
                    <h3>Grill Chicken  Sandwich</h3>
                    <p class="price">950 LKR</p>
                </div>
            </div>

            <div class="menu-item">
            <img src="images/jeewa/css.jpg" alt="Egg Noodles">
                <div class="menu-details">
                    <h3>Club  Sandwich</h3>
                    <p class="price">1050 LKR</p>
                </div>
            </div>

        </div>
    </div>

    <!-- Fresh Juice Category -->
    <div class="menu-category">
        <h2>Fresh Juice and Shakes</h2>
        <div class="menu-items">
            <div class="menu-item">
                <img src="images/jeewa/wj.jpg" alt="Watermelon Juice">
                <div class="menu-details">
                    <h3>Watermelon Juice</h3>
                    <p class="price">850 LKR</p>
                </div>
            </div>
            <div class="menu-item">
                <img src="images/jeewa/pj.jpg" alt="Papaya Juice">
                <div class="menu-details">
                    <h3>Papaya Juice</h3>
                    <p class="price">900 LKR</p>
                </div>
            </div>

            <div class="menu-item">
                <img src="images/jeewa/mj.jpeg" alt="Egg Noodles">
                <div class="menu-details">
                    <h3>Mango Juice</h3>
                    <p class="price">950 LKR</p>
                </div>
            </div>

            <div class="menu-item">
                <img src="images/jeewa/lj.jpeg" alt="Egg Noodles">
                <div class="menu-details">
                    <h3>Lime Juice</h3>
                    <p class="price">950 LKR</p>
                </div>
            </div>

            
        </div>
    </div>
</div>

</body>
</html>
