<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Waiter Ordering Interface</title>
    <style>
      

body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background-image: url('{{ asset('images/background.jpg') }}');
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

        .sidebar button:hover {
            background-color: #a58e34; /* Darker gold on hover */
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

        .order-item input {
            width: 40px;
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
            background-color: #f9f9f9;
            border-radius: 8px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
        }

        .summary h3 {
            margin-top: 0;
        }

        .summary p {
            font-size: 18px;
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
            background-color: #333;
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
            <button onclick="showCategory('beverages')">Beverages</button>
            <button onclick="showCategory('main-dish')">Main Dish</button>
            <button onclick="showCategory('sides')">Sides</button>
            <button onclick="showCategory('appetizers')">Appetizers</button>
            <button onclick="showCategory('desserts')">Desserts</button>
            <button onclick="showCategory('soup')">Soup</button>
        </div>

        <!-- Main section for menu selection and order details -->
        <div class="main">
            <h3 class="highlight">Menu</h3>
            <div class="menu-grid" id="menu-grid">
                <!-- Dynamically populated with menu items -->
            </div>

            <h3 class="highlight">Selected Items</h3>
            <div id="order-items">
                <!-- Dynamically populated based on customer selection -->
            </div>
            <textarea rows="4" style="width: 100%; padding: 10px; border-radius: 5px; border: 1px solid #ddd;" placeholder="Special Instructions"></textarea>
        </div>

        <!-- Right sidebar for summary -->
        <div class="summary">
            <h3>Order Summary</h3>
            <p>Table: <span id="table-summary">1</span></p>
            <p>Customers: <span id="customers-summary">1</span></p>
            <p>Total Items: <span id="total-items">0</span></p>
            <p>Total Price: $<span id="total-price">0.00</span></p>
            <button>Send to Kitchen</button>
            <button>Hold Order</button>
            <button>Cancel Order</button>
        </div>
    </div>

    <footer>
        <button>View Order History</button>
        <button>Table Overview</button>
        
    </footer>

<script>
    // Existing code...

    // Function to display uploaded image
    function displayImage(event) {
        const file = event.target.files[0];
        const imgElement = document.getElementById('waiter-photo-display');
        const reader = new FileReader();

        reader.onload = function(e) {
            imgElement.src = e.target.result; // Set the source of the image
            imgElement.style.display = 'inline'; // Show the image
        }

        if (file) {
            reader.readAsDataURL(file); // Read the file as a data URL
        }
    }

    // Existing code...
</script>

    <script>
        // Menu items data for each category with image, name, and price
        const menuCategories = {
            'beverages': [
                { name: 'Coke', price: 1.99, image: 'coke.jpg' },
                { name: 'Juice', price: 2.99, image: 'juice.jpg' }
            ],
            'main-dish': [
                { name: 'Grilled Chicken', price: 12.99, image: 'grilled_chicken.jpg' },
                { name: 'Rice', price: 8.99, image: 'rice.jpg' }
            ],
            'sides': [
                { name: 'Fries', price: 3.99, image: 'fries.jpg' },
                { name: 'Salad', price: 4.99, image: 'salad.jpg' }
            ],
            'appetizers': [
                { name: 'Spring Rolls', price: 5.99, image: 'spring_rolls.jpg' },
                { name: 'Garlic Bread', price: 4.99, image: 'garlic_bread.jpg' }
            ],
            'desserts': [
                { name: 'Ice Cream', price: 3.99, image: 'ice_cream.jpg' },
                { name: 'Cake', price: 4.99, image: 'cake.jpg' }
            ],
            'soup': [
                { name: 'Tomato Soup', price: 6.99, image: 'tomato_soup.jpg' },
                { name: 'Chicken Soup', price: 7.99, image: 'chicken_soup.jpg' }
            ]
        };

        let order = [];
        let totalItems = 0;
        let totalPrice = 0.00;

        // Function to show menu items based on the selected category
        function showCategory(category) {
            const menuGrid = document.getElementById('menu-grid');
            menuGrid.innerHTML = ''; // Clear existing items

            const items = menuCategories[category];
            items.forEach(item => {
                const div = document.createElement('div');
                div.classList.add('menu-item');
                div.innerHTML = `
                    <img src="${item.image}" alt="${item.name}">
                    <p>${item.name}</p>
                    <p>$${item.price.toFixed(2)}</p>
                `;
                div.onclick = () => addItem(item);
                menuGrid.appendChild(div);
            });
        }

        // Function to add an item to the order
        function addItem(item) {
            const orderItemsDiv = document.getElementById('order-items');
            order.push(item);
            totalItems++;
            totalPrice += item.price;

            const div = document.createElement('div');
            div.classList.add('order-item');
            div.innerHTML = `
                <span>${item.name}</span>
                <span>
                    <input type="number" value="1" min="1" onchange="updatePrice(this, ${item.price})"> x $${item.price.toFixed(2)}
                    <button onclick="removeItem(this, ${item.price})">Remove</button>
                </span>
            `;
            orderItemsDiv.appendChild(div);

            updateSummary();
        }

        // Function to update price based on quantity change
        function updatePrice(element, price) {
            const quantity = element.value;
            totalPrice += price * (quantity - 1); // Adjust for new quantity
            updateSummary();
        }

        // Function to remove items
        function removeItem(button, price) {
            const orderItemDiv = button.parentElement.parentElement;
            orderItemDiv.remove();
            totalItems--;
            totalPrice -= price;
            updateSummary();
        }

        // Function to update the summary (total items, price, etc.)
        function updateSummary() {
            document.getElementById('total-items').textContent = totalItems;
            document.getElementById('total-price').textContent = totalPrice.toFixed(2);
            document.getElementById('table-summary').textContent = document.getElementById('table-number').value;
            document.getElementById('customers-summary').textContent = document.getElementById('num-customers').value;
        }

        // Initialize with the Beverages category by default
        showCategory('beverages');
    </script>
</body>
</html>


