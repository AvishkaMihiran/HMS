<!-- resources/views/bookings/index.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Bookings</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Libre+Baskerville:wght@400;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Libre Baskerville', serif;
            background-color: #2c2a3c;
            color: white;
            margin: 0;
            padding: 20px;
        }
        h1 {
            color: #FFD700;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        th, td {
            padding: 10px;
            border: 1px solid #555;
            text-align: left;
        }
        th {
            background-color: #444;
        }
    </style>
</head>
<body>
    <h1>Your Bookings</h1>

    @if(session('success'))
        <div style="color: #FFD700;">
            {{ session('success') }}
        </div>
    @endif

    <table>
        <thead>
            <tr>
                <th>Package</th>
                <th>Check-in Date</th>
                <th>Check-out Date</th>
                <th>Rooms</th>
            </tr>
        </thead>
        <tbody>
            @foreach($bookings as $booking)
                <tr>
                    <td>{{ $booking->package }}</td>
                    <td>{{ $booking->check_in_date }}</td>
                    <td>{{ $booking->check_out_date }}</td>
                    <td>{{ $booking->rooms }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
