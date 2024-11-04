<!-- resources/views/receptionist/calendar.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calendar - Imperial Crown</title>
    <link rel="stylesheet" href="{{ asset('css/calendar.css') }}">
</head>
<body>
    <div class="calendar-container">
        <h1>Calendar</h1>
        <div id="calendar"></div>
        <div id="booking-details" class="booking-details">
            <h2>Booking Details</h2>
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Room Type</th>
                        <th>Check Out Date</th>
                        <th>Number Of Rooms</th>
                    </tr>
                </thead>
                <tbody id="booking-table-body">
                    <!-- Booking details will be injected here -->
                </tbody>
            </table>
        </div>
    </div>

    <script src="{{ asset('js/calendar.js') }}"></script>
</body>
</html>
