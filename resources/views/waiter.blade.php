<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Luxurious Modern Ordering Interface</title>
    <style>
        /* Reset CSS */
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        /* Body Styling */
        body {
            font-family: 'Helvetica Neue', Arial, sans-serif;
            background-color: #f4f4f8;
            color: #333;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        /* Header Styling */
        header {
            background-color: #1f1f1f;
            color: #f5c518;
            padding: 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            box-shadow: 0px 4px 15px rgba(0, 0, 0, 0.3);
        }

        .logo {
            font-size: 28px;
            font-weight: bold;
            letter-spacing: 1.5px;
        }

        .waiter-info {
            display: flex;
            align-items: center;
            font-size: 16px;
            color: #fff;
        }

        #waiter-photo-display {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            margin-left: 10px;
        }

        /* Container Styling */
        .container {
            display: flex;
            gap: 20px;
            padding: 20px;
            flex: 1;
        }

        .sidebar, .main, .summary {
            background-color: #ffffff;
            border-radius: 15px;
            padding: 20px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
        }

        /* Sidebar Styling */
        .sidebar {
            width: 20%;
            color: #444;
        }

        .sidebar h3 {
            color: #333;
            margin-bottom: 20px;
            font-weight: bold;
            border-bottom: 2px solid #f5c518;
            padding-bottom: 10px;
        }

        .sidebar select, .sidebar button {
            width: 100%;
            padding: 12px;
            font-size: 16px;
            margin-bottom: 15px;
            border: 1px solid #ddd;
            border-radius: 10px;
            transition: all 0.3s ease;
        }

        .sidebar button {
            background-color: #f5c518;
            color: #1f1f1f;
            font-weight: bold;
            cursor: pointer;
        }

        .sidebar button:hover {
            background-color: #e6b31d;
        }

        /* Main Content Styling */
        .main {
            flex: 1;
        }

        .main h3 {
            font-weight: bold;
            color: #333;
            border-bottom: 2px solid #f5c518;
            padding-bottom: 10px;
        }

        .menu-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(150px, 1fr));
            gap: 20px;
            margin-top: 20px;
        }

        .menu-item {
            background-color: #f9f9f9;
            border-radius: 15px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            text-align: center;
            cursor: pointer;
            transition: transform 0.3s;
        }

        .menu-item:hover {
            transform: scale(1.05);
        }

        .menu-item img {
            width: 100%;
            border-bottom: 1px solid #ddd;
        }

        .menu-item p {
            padding: 10px;
            font-weight: bold;
            color: #444;
        }

        /* Order Summary Styling */
        .summary {
            width: 25%;
            color: #444;
            position: relative;
        }

        .summary h3 {
            font-weight: bold;
            color: #333;
            margin-bottom: 20px;
            border-bottom: 2px solid #f5c518;
            padding-bottom: 10px;
        }

        .order-item {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px 0;
            border-bottom: 1px solid #ddd;
        }

        .remove-button {
            background-color: #ff4d4d;
            color: #fff;
            border: none;
            padding: 5px 10px;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .remove-button:hover {
            background-color: #e04040;
        }

        .total {
            font-size: 22px;
            font-weight: bold;
            text-align: center;
            color: #f5c518;
            margin-top: 20px;
        }

        /* Order and Clear Buttons */
        .action-buttons {
            display: flex;
            gap: 10px;
            justify-content: center;
            margin-top: 20px;
        }

        .action-button {
            padding: 10px 20px;
            font-size: 16px;
            border: none;
            border-radius: 10px;
            cursor: pointer;
            font-weight: bold;
            transition: background-color 0.3s;
        }

        .order-button {
            background-color: #1f1f1f;
            color: #f5c518;
        }

        .order-button:hover {
            background-color: #333333;
        }

        .clear-button {
            background-color: #ff4d4d;
            color: #fff;
        }

        .clear-button:hover {
            background-color: #e04040;
        }

        footer {
            text-align: center;
            padding: 15px;
            color: #1f1f1f;
            background-color: #f5c518;
            font-weight: bold;
            box-shadow: 0px -4px 15px rgba(0, 0, 0, 0.3);
        }
    </style>
</head>
<body>

<header>
    <div class="logo">IMPERIAL CROWN</div>
    <div class="waiter-info">
        Waiter: Samntha Wijewardana
     
    </div>
</header>

<div class="container">
    <!-- Sidebar -->
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
            <script>
                for (let i = 1; i <= 20; i++) {
                    document.write(`<option value="${i}">${i} Customer${i > 1 ? 's' : ''}</option>`);
                }
            </script>
        </select>
        <button onclick="showCategory('starters')">Starters</button>
        <button onclick="showCategory('kebab')">Kebab</button>
        <button onclick="showCategory('soup')">Soup</button>
    </div>

    <!-- Main Content -->
    <div class="main">
        <h3>Menu</h3>
        <div class="menu-grid" id="menu-grid">
            <!-- Menu items will be populated here -->
        </div>
    </div>

    <!-- Order Summary -->
    <div class="summary">
        <h3>Order Summary</h3>
        <div id="order-summary">
            <p>No items selected</p>
        </div>
        <div class="total">Total: <span id="total-price">0</span> LKR</div>
        <div class="action-buttons">
            <button class="action-button order-button" onclick="placeOrder()">Order Now</button>
            <button class="action-button clear-button" onclick="clearOrder()">Clear Order</button>
        </div>
    </div>
</div>

<footer>&copy; 2024 Imperial Crown Restaurant</footer>

<script>
    const menuItems = {
        starters: [{ name: 'Spring Rolls', price: 500 }],
        kebab: [{ name: 'Chicken Kebab', price: 900 }],
        soup: [{ name: 'Tom Yum Soup', price: 700 }],
    };
    let order = [];

    function showCategory(category) {
        const menuGrid = document.getElementById('menu-grid');
        menuGrid.innerHTML = '';
        menuItems[category].forEach((item, index) => {
            const itemElement = document.createElement('div');
            itemElement.className = 'menu-item';
            itemElement.innerHTML = `<p>${item.name} - ${item.price} LKR</p>`;
            itemElement.onclick = () => addToOrder(item);
            menuGrid.appendChild(itemElement);
        });
    }

    function addToOrder(item) {
        order.push(item);
        updateOrderSummary();
    }

    function updateOrderSummary() {
        const orderSummary = document.getElementById('order-summary');
        orderSummary.innerHTML = '';
        let total = 0;
        order.forEach((item, index) => {
            const itemElement = document.createElement('div');
            itemElement.className = 'order-item';
            itemElement.innerHTML = `${item.name} - ${item.price} LKR <button class="remove-button" onclick="removeFromOrder(${index})">Remove</button>`;
            orderSummary.appendChild(itemElement);
            total += item.price;
        });
        document.getElementById('total-price').textContent = total;
    }

    function removeFromOrder(index) {
        order.splice(index, 1);
        updateOrderSummary();
    }

    function clearOrder() {
        order = [];
        updateOrderSummary();
    }

    const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');


    function placeOrder() {
    const tableNumber = document.getElementById('table-number').value;
    const numCustomers = document.getElementById('num-customers').value;

    // Assuming you have a way to get the current waiter user ID (you can fetch it dynamically)
    const waiterUserId = 1; // Replace this with the actual waiter user ID dynamically if needed

    const orderData = {
        table_number: tableNumber,
        num_customers: numCustomers,
        order_items: order.map(item => ({ name: item.name, price: item.price })),
        waiter_user_id: waiterUserId,
    };

    fetch('/api/orders', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
            'X-CSRF-TOKEN': '{{ csrf_token() }}' // Add CSRF token if you are using Laravel's CSRF protection
        },
        body: JSON.stringify(orderData)
    })
    .then(response => response.json())
    .then(data => {
        if (data.success) {
            alert(`Order placed successfully! Order ID: ${data.order.id}`);
            clearOrder(); // Clear order after placing it
        } else {
            alert('Failed to place order: ' + data.message);
        }
    })
    .catch(error => {
        console.error('Error:', error);
        alert('An error occurred while placing the order.');
    });
}





    function displayImage(event) {
        const image = document.getElementById('waiter-photo-display');
        image.src = URL.createObjectURL(event.target.files[0]);
        image.style.display = 'block';
    }

    window.onload = () => showCategory('starters');
</script>

</body>
</html>
