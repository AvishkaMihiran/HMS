
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel Order System</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            background-image:url('{{ asset('images/background.jpg') }}');
            background-size: cover;
            background-position: center;
            height: 100vh;
        }

        .container {
            display: flex;
            flex-direction: row;
            justify-content: space-between;
            padding: 20px;
            height: 100%;
        }

        .sidebar {
            width: 255px;
            background-color: rgba(255, 255, 255, 0.9);
            padding: 20px;
            border-radius: 10px;
            display: flex;
            flex-direction: column;
        }

        .sidebar button, .sidebar input {
            display: block;
            width: 85%;
            margin-bottom: 10px;
            padding: 10px;
            background-color: #f8f9fa;
            border: 1px solid #ddd;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }

        .sidebar button:hover {
            background-color: #007bff;
            color: white;
        }

        .header {
            text-align: center;
            margin-bottom: 20px;
            position: relative;
        }

       
        .header h1 {
            font-size: 40px;
            color: white;
            margin-bottom: 20px;
            padding: 10px;
        
            background-size: cover;
            background-position: center;
            display: inline-block;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3);
        }

        .header .menu-buttons {
            display: flex;
            justify-content: space-between;
            max-width: 400px;
            margin: 0 auto;
        }

        .menu-buttons button {
            background-color: #007bff;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .menu-buttons button:hover {
            background-color: #0056b3;
        }

        .order-section {
            flex-grow: 1;
            margin: 20px;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            /* Removing background and frame */
            background: none;
            padding: 20px;
        }

        .send-order {
            text-align: center;
        }

        .send-order button {
            background-color: #28a745;
            color: white;
            padding: 15px 30px;
            font-size: 18px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .send-order button:hover {
            background-color: #218838;
        }

        .notification {
            position: absolute;
            top: 20px;
            right: 20px;
        }

        .icon {
            display: block;
            text-align: center;
        }

        .icon img {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            margin-bottom: 10px;
        }

        label {
            font-size: 16px;
        }
    </style>
</head>
<body>

    <div class="header">
        <!-- Framed HOTEL NAME with background image -->
        <h1>IMPERIAL CROWN</h1>
        <div class="menu-buttons">
            <button>Menu</button>
            <button>Log Out</button>
            <button>Notification</button>
        </div>
    </div>

    <div class="container">
        <!-- Sidebar -->
        <div class="sidebar">
            <div class="icon">
                <img src="images/hhh.jpg" alt="Waiter Icon">
            </div>
            <button>Take Order</button>
            <label>No of customers</label>
            <input type="text" placeholder="Enter number of customers">
            <label>Table No</label>
            <input type="text" placeholder="Enter table number">
            <label>Beverages</label>
            <input type="text" placeholder="Enter beverage">
            <label>Main Dish</label>
            <input type="text" placeholder="Enter main dish">
            <label>Sides</label>
            <input type="text" placeholder="Enter sides">
            <label>Appetizers</label>
            <input type="text" placeholder="Enter appetizer">
            <label>Desserts</label>
            <input type="text" placeholder="Enter dessert">
            <label>Soup</label>
            <input type="text" placeholder="Enter soup">
        </div>

        <!-- Order Section without a frame -->
        <div class="order-section">
            <!-- Placeholder for additional content -->
            <div class="send-order">
                <button>Send Order</button>
            </div>
        </div>
    </div>

</body>
</html>
