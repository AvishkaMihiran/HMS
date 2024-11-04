<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bill - Imperial Crown</title>
    <link rel="stylesheet" href="{{ asset('css/bill.css') }}">
</head>
<body>
    <div class="container">
        <h1>Billing Details</h1>
        
        @foreach ($ordersGroupedByUser as $userId => $orders)
            <div class="bill-table">
                <h2>User ID: {{ $userId }}</h2>
                <table>
                    <thead>
                        <tr>
                            <th>Order Number</th>
                            <th>Order Id</th>
                            <th>Item Name</th>
                            <th>Item Price</th>
                            <th>Quantity</th>
                            <th>Price</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php 
                            $totalPrice = 0; 
                            $orderNumber = 1; // Initialize Order Number for each user
                        @endphp
                        @foreach ($orders as $order)
                            <tr>
                                <td>{{ $orderNumber++ }}</td> <!-- Auto-increment Order Number -->
                                <td>{{ $order->user_id }}</td>
                                <td>{{ $order->item_name }}</td>
                                <td>{{ number_format($order->price, 2) }}</td>
                                <td>{{ $order->quantity }}</td>
                                <td>{{ number_format($order->total, 2) }}</td>
                            </tr>
                            @php $totalPrice += $order->total; @endphp
                        @endforeach
                    </tbody>
                    <tfoot>
                        <tr>
                            <td colspan="5" class="text-right">Total:</td>
                            <td>{{ number_format($totalPrice, 2) }}</td>
                        </tr>
                    </tfoot>
                </table>
                <button onclick="printBill(this)">Print Bill</button>
            </div>
        @endforeach
    </div>

    <script src="{{ asset('js/bill.js') }}"></script>
</body>
</html>
