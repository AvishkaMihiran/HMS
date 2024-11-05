<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@700&family=Libre+Baskerville:wght@400;700&display=swap" rel="stylesheet">
    <title>Cook Dashboard</title>
    <style>
        /* Styles */
        body, html {
            height: 100%;
            margin: 0;
            font-family: 'Libre Baskerville', serif;
            background-image: url('{{ asset('images/food.jpg') }}');
            background-size: cover;
            background-position: center;
            color: #fff;
        }
        .content {
            flex-grow: 1;
            display: flex;
            flex-direction: column;
            align-items: center;
            text-align: center;
        }
        h1 {
            font-size: 24px;
            color: #FFD700;
            margin-bottom: 20px;
            font-family: 'Cinzel', serif;
        }
        .orders-table {
            width: 80%;
            margin: 20px auto;
            border-collapse: collapse;
        }
        .orders-table th, .orders-table td {
            padding: 10px;
            border: 1px solid #fff;
            text-align: center;
        }
        .complete-button {
            background: #ff0000;
            color: #fff;
            padding: 8px 12px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
    </style>
</head>
<body>
<x-app-layout></x-app-layout>
    <div class="content">
    
        <h1>Cook's Dashboard</h1>
<<<<<<< HEAD
        
        <p>View and manage incoming food orders.</p>
=======
        <table class="orders-table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>User ID</th>
                    <th>Item Name</th>
                    <th>Price</th>
                    <th>Quantity</th>
                    <th>Total</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($orders as $order)
                    <tr id="order-{{ $order->id }}">
                        <td>{{ $order->id }}</td>
                        <td>{{ $order->user_id }}</td>
                        <td>{{ $order->item_name }}</td>
                        <td>{{ $order->price }}</td>
                        <td>{{ $order->quantity }}</td>
                        <td>{{ $order->total }}</td>
                        <td>
                            <button class="complete-button" onclick="completeOrder({{ $order->id }})">
                                Complete Order
                            </button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
>>>>>>> a489ce267d23ca596ab97cda2a8912d3631f5510
    </div>

    <script>
        function completeOrder(orderId) {
            if (confirm('Are you sure you want to mark this order as completed?')) {
                fetch(`/order/${orderId}/complete`, {
                    method: 'DELETE',
                    headers: {
                        'X-CSRF-TOKEN': '{{ csrf_token() }}',
                        'Content-Type': 'application/json'
                    }
                })
                .then(response => response.json())
                .then(data => {
                    if (data.success) {
                        document.getElementById(`order-${orderId}`).remove();
                    } else {
                        alert('Failed to complete the order.');
                    }
                })
                .catch(error => console.error('Error:', error));
            }
        }
    </script>
</body>
</html>
