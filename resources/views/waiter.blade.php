<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Waiter Ordering Interface</title>
    <style>
        /* Your existing CSS styles */
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background-image: url('{{ asset('images/Hotel2.png') }}');
            background-size: cover; /* Cover the entire viewport */
            background-position: center; /* Center the image */
            background-repeat: no-repeat; /* Prevent repeating the image */
        }

        .overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(255, 255, 255, 0.5); /* Semi-transparent white overlay */
            z-index: 1; /* Place overlay above the background */
        }

        /* Header */
        header {
            background-color: #3a3a70; /* Royal blue */
            color: gold; /* Gold color */
            padding: 15px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
        }

        header .logo {
            font-size: 28px;
            font-weight: bold;
        }

        header .waiter-info {
            font-size: 16px;
        }

        /* Layout */
        .container {
            display: flex;
            flex-wrap: nowrap;
            padding: 20px;
        }

        /* Sidebar for table number and number of customers */
        .sidebar {
            background-color: #4e4e6f; /* Darker shade for sidebar */
            color: white;
            width: 25%;
            padding: 20px;
            box-sizing: border-box;
            border-radius: 8px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
        }

        .sidebar h3 {
            margin-top: 0;
        }

        .sidebar label {
            display: block;
            margin-bottom: 5px;
        }

        .sidebar select, .sidebar button {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: none;
            border-radius: 5px;
        }

        .sidebar select {
            background-color: #d4d4d4; /* Light gray for dropdowns */
        }

        .sidebar button {
            background-color: #b59739; /* Gold color */
            color: white;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .remove-button {
            margin-top: 10px; /* Adjust the spacing as needed */
        }

        /* Main order section */
        .main {
            width: 50%;
            padding: 20px;
            box-sizing: border-box;
        }

        .order-item {
            background-color: #f0f0f0; /* Light background color for selected items */
            border-radius: 5px; /* Rounded corners */
            padding: 10px; /* Padding for spacing */
            margin-bottom: 10px; /* Spacing between items */
        }

        /* Visual menu grid */
        .menu-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(150px, 1fr));
            gap: 15px;
            margin-top: 10px;

            background-color: rgba(255, 255, 255, 0.8); /* Light background for the menu grid */
            padding: 15px; /* Add some padding */
            border-radius: 8px; /* Optional: rounded corners */
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2); /* Optional: shadow effect */
        }

        .highlight {
            background-color: #f0f0f0; /* Light background color */
            color: #333; /* Text color */
            padding: 10px; /* Some padding for better spacing */
            border-radius: 5px; /* Rounded corners */
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2); /* Subtle shadow for depth */
            transition: background-color 0.3s; /* Smooth transition for hover effect */
        }

        .highlight:hover {
            background-color: #e0e0e0; /* Darker background on hover */
        }

        .menu-item {
            background-color: white;
            border: 1px solid #ddd;
            border-radius: 5px;
            text-align: center;
            cursor: pointer;
            padding: 10px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s;
        }

        .menu-item:hover {
            transform: translateY(-3px); /* Slight lift effect */
            background-color: #f0f0f0; /* Change background on hover */
        }

        .menu-item img {
            width: 100%;
            height: auto;
            border-bottom: 1px solid #ddd;
            border-radius: 5px 5px 0 0; /* Rounded top corners */
        }

        .menu-item p {
            margin: 5px 0;
            color: #333;
        }

        /* Right sidebar for order summary */
        .summary {
            width: 25%;
            padding: 20px;
            box-sizing: border-box;
            background-color: #4e4e6f; /* Darker shade for sidebar */
            border-radius: 8px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
        }

        .summary h3 {
            margin-top: 0;
            color: white;
        }

        .summary p {
            font-size: 18px;
            color: white;
            margin-bottom: 15px;
        }

        .summary button {
            display: block;
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            background-color: #b59739; /* Gold color */
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .summary button:hover {
            background-color: #a58e34; /* Darker gold on hover */
        }

        footer {
            text-align: center;
            padding: 15px;
            color: white;
            position: fixed;
            bottom: 0;
            width: 100%;
        }

        footer button {
            padding: 10px 15px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            margin: 5px;
        }
    </style>
</head>
<body>
<header>
    <div class="logo">IMPERIAL CROWN</div>
    <div class="waiter-info">
        Waiter: John Doe
        <input type="file" id="waiter-photo" accept="image/*" style="margin-left: 10px;" onchange="displayImage(event)"/>
        <img id="waiter-photo-display" src="" alt="Waiter Photo" style="width: 50px; height: 50px; border-radius: 50%; margin-left: 10px; display: none;"/>
    </div>
</header>

<div class="container">
    <!-- Sidebar for table number and number of customers -->
    <div class="sidebar">
        <h3>Order Details</h3>
        <label for="table-number">Table Number</label>
        <select id="table-number">
            <option value="1">Table 1</option>
            <option value="2">Table 2</option>
            <option value="3">Table 3</option>
            <option value="4">Table 4</option>
        </select>

        <label for="num-customers">Number of Customers</label>
        <select id="num-customers">
            <!-- Generate options for 1 to 20 customers -->
            <script>
                for (let i = 1; i <= 20; i++) {
                    document.write(`<option value="${i}">${i} Customer${i > 1 ? 's' : ''}</option>`);
                }
            </script>
        </select>

        <!-- Buttons to switch between menu categories -->
       <!-- Buttons to switch between menu categories -->
            <button onclick="showCategory('starters')">Starters</button>
            <button onclick="showCategory('kebab')">Kebab</button>
            <button onclick="showCategory('soup')">Soup</button>
            <button onclick="showCategory('sandwich')">Sandwich</button>
            <button onclick="showCategory('fresh juice and shakes')">Fresh Juice and Shakes</button>
            <button onclick="showCategory('salad')">Salad</button>
	        <button onclick="showCategory('fried rice')">Fried Rice</button>
            <button onclick="showCategory('kottu')">Kottu</button>
            <button onclick="showCategory('noodles')">Noodles</button>
            <button onclick="showCategory('pasta')">Pasta</button>
            <button onclick="showCategory('chopsuey rice or noodles')">Chopsuey Rice Or Noodles</button>
            <button onclick="showCategory('seafood')">SeaFood</button>
	        <button onclick="showCategory('chicken')">Chicken</button>
	        <button onclick="showCategory('egg omlet')">Egg Omlet</button>
	        <button onclick="showCategory('rice and curry')">Rice and Curry</button>
	        <button onclick="showCategory('desert')">Desert</button>
    </div>

    <!-- Main section for menu and order -->
    <div class="main">
        <h2 class="highlight">Menu</h2>
        <div id="menu" class="menu-grid">
            
        </div>
    </div>

    <!-- Right sidebar for order summary -->
    <div class="summary">
        <h3>Order Summary</h3>
        <div id="order-summary"></div>
        <button onclick="placeOrder()">Place Order</button>
    </div>
</div>

<footer>
    <button onclick="window.print()">Print Order</button>
    <button>Log Out</button>
</footer>

<script>
    let order = {};

function addToOrder(itemName, itemPrice) {
    // Check if the item already exists in the order
    if (order[itemName]) {
        // Increment the existing item's quantity by 1
        order[itemName].quantity += 1;
    } else {
        // Add new item to the order with initial quantity of 1
        order[itemName] = {
            price: itemPrice,
            quantity: 1
        };
    }
    updateOrderSummary(); // Call this function to refresh the displayed order summary
}

// Example function to display the current order summary
function updateOrderSummary() {
    let summary = "";
    for (const item in order) {
        summary += `${item}: ${order[item].quantity} x $${order[item].price} = $${order[item].quantity * order[item].price}\n`;
    }
    alert("Order Summary:\n" + summary); // Display order summary as an alert (or update your UI as needed)
}


    function updateOrderSummary() {
        const summaryDiv = document.getElementById("order-summary");
        summaryDiv.innerHTML = ''; // Clear the summary

        for (const itemName in order) {
            const item = order[itemName];
            const itemDiv = document.createElement("div");
            itemDiv.className = "order-item";
            itemDiv.innerText = `${itemName} - Quantity: ${item.quantity} - Total: ${item.price * item.quantity} LKR`;
            summaryDiv.appendChild(itemDiv);
        }
    }

    function placeOrder() {
        if (Object.keys(order).length === 0) {
            alert("Your order is empty!");
            return;
        }

        // Clear the order and update the summary
        order = {};
        updateOrderSummary();
        alert("Your order has been placed!");
    }

    function displayImage(event) {
        const img = document.getElementById("waiter-photo-display");
        img.src = URL.createObjectURL(event.target.files[0]);
        img.style.display = "block"; // Show the image after it's loaded
    }

    // Function to show menu category based on button clicked
    function showCategory(category) {
        const menuItems = document.getElementById("menu");
        // Clear the current items
        menuItems.innerHTML = '';

        // Example of adding items based on the category
        if (category === 'starters') {
            menuItems.innerHTML = `
                <div class="menu-item" data-category="starters" onclick="addToOrder('Potato Wedges', 600)">
                    <p>Potato Wedges - 600 LKR</p>
                </div>
                <div class="menu-item" data-category="starters" onclick="addToOrder('Spring Rolls', 250)">
                    <p>Spring Rolls - 250 LKR</p>
                </div>
                <div class="menu-item" data-category="starters" onclick="addToOrder('Stuffed Mushrooms', 300)">
                    <p>Stuffed Mushrooms - 300 LKR</p>
                </div>
                <div class="menu-item" data-category="starters" onclick="addToOrder('Garlic Bread', 200)">
                    <p>Garlic Bread - 200 LKR</p>
                </div>
            `;
        }

        if (category === 'kebab') {
            menuItems.innerHTML = `
                <div class="menu-item" data-category="kebab" onclick="addToOrder('Sausage Kebab', 450)">
                    <p>Sausage Kebab - 450 LKR</p>
                </div>
                <div class="menu-item" data-category="kebab" onclick="addToOrder('Prawns or Cuttlefish Kebab', 450)">
                    <p>Prawns or Cuttlefish Kebab - 450 LKR</p>
                </div>
                <div class="menu-item" data-category="kebab" onclick="addToOrder('Fish Kebab', 500)">
                    <p>Fish Kebab - 500 LKR</p>
                </div>
                <div class="menu-item" data-category="kebab" onclick="addToOrder('Chicken Kebab', 500)">
                    <p>Chicken Kebab - 500 LKR</p>
                </div>
                <div class="menu-item" data-category="kebab" onclick="addToOrder('Mix Kebab', 700)">
                    <p>Mix Kebab - 700 LKR</p>
                </div>
            `;
        }

        if (category === 'soup') {
            menuItems.innerHTML = `
                <div class="menu-item" data-category="soup" onclick="addToOrder('Cream of Vegetable', 500)">
                    <p>Cream of Vegetable - 500 LKR</p>
                </div>
                <div class="menu-item" data-category="soup" onclick="addToOrder('Egg Drop', 630)">
                    <p>Egg Drop - 630 LKR</p>
                </div>
                <div class="menu-item" data-category="soup" onclick="addToOrder('Cream of Chicken', 690)">
                    <p>Cream of Chicken - 690 LKR</p>
                </div>
                <div class="menu-item" data-category="soup" onclick="addToOrder('Thai Potato Chicken', 750)">
                    <p>Thai Potato Chicken - 750 LKR</p>
                </div>
                <div class="menu-item" data-category="soup" onclick="addToOrder('Creamy Lemon Prawns', 790)">
                    <p>Creamy Lemon Prawns - 790 LKR</p>
                </div>
                <div class="menu-item" data-category="soup" onclick="addToOrder('Sri Lanka Style Crab Pepar', 840)">
                    <p>Sri Lanka Style Crab Pepar - 840 LKR</p>
                </div>
                <div class="menu-item" data-category="soup" onclick="addToOrder('Tom Yum Soup', 870)">
                    <p>Tom Yum Soup - 870 LKR</p>
                </div>
                <div class="menu-item" data-category="soup" onclick="addToOrder('PEARL WOK Special Seafood Soup', 980)">
                    <p>PEARL WOK Special Seafood Soup - 980 LKR</p>
                </div>
            `;
        }

        if (category === 'sandwich') {
            menuItems.innerHTML = `
                <div class="menu-item" data-category="sandwich" onclick="addToOrder('Egg Sandwich', 500)">
                    <p>Egg Sandwich - 500 LKR</p>
                </div>
                <div class="menu-item" data-category="sandwich" onclick="addToOrder('Chicken Sandwich', 650)">
                    <p>Chicken Sandwich - 650 LKR</p>
                </div>
                <div class="menu-item" data-category="sandwich" onclick="addToOrder('Grill Chicken Sandwich', 800)">
                    <p>Grill Chicken Sandwich - 800 LKR</p>
                </div>
                <div class="menu-item" data-category="sandwich" onclick="addToOrder('Club Sandwich', 900)">
                    <p>Club Sandwich - 900 LKR</p>
                </div>
            `;
        }

        if (category === 'fresh juice and shakes') {
            menuItems.innerHTML = `
                <div class="menu-item" data-category="fresh juice and shakes" onclick="addToOrder('Watermelon Juice', 300)">
                    <p>Watermelon Juice - 300 LKR</p>
                </div>
                <div class="menu-item" data-category="fresh juice and shakes" onclick="addToOrder('Papaya Juice', 350)">
                    <p>Papaya Juice - 350 LKR</p>
                </div>
                <div class="menu-item" data-category="fresh juice and shakes" onclick="addToOrder('Mango Juice', 350)">
                    <p>Mango Juice - 350 LKR</p>
                </div>
                <div class="menu-item" data-category="fresh juice and shakes" onclick="addToOrder('Lime juice', 350)">
                    <p>Lime juice - 350 LKR</p>
                </div>
                <div class="menu-item" data-category="fresh juice and shakes" onclick="addToOrder('Avacado Juice', 400)">
                    <p>Avacado Juice - 400 LKR</p>
                </div>
                <div class="menu-item" data-category="fresh juice and shakes" onclick="addToOrder('Pineapple Juice', 450)">
                    <p>Pineapple Juice - 450 LKR</p>
                </div>
                <div class="menu-item" data-category="fresh juice and shakes" onclick="addToOrder('Banana Milkshake', 650)">
                    <p>Banana Milkshake - 650 LKR</p>
                </div>
                <div class="menu-item" data-category="fresh juice and shakes" onclick="addToOrder('Strawberry Milkshake', 700)">
                    <p>Strawberry Milkshake - 700 LKR</p>
                </div>
                <div class="menu-item" data-category="fresh juice and shakes" onclick="addToOrder('Chocolate Milkshake', 800)">
                    <p>Chocolate Milkshake - 800 LKR</p>
                </div>
            `;
        }
        
    }
showCategory('starters');
</script>
</body>
</html>
