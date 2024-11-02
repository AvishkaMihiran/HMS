<!-- resources/views/receptionist/receptionist.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Receptionist Interface - Imperial Crown</title>
    <link rel="stylesheet" href="{{ asset('css/receptionist.css') }}">
</head>
<body>
    <div class="container">
        <header class="header">
            <h1>Receptionist</h1>
        </header>
        <main class="main-content">
            <!-- Update: Use route for Foods button to navigate to foods-interface -->
            <div class="section" onclick="window.location.href='{{ route('receptionist.foods-interface') }}'">Foods</div>
            <div class="section" onclick="window.location.href='{{ route('receptionist.rooms-interface') }}'">Rooms</div>
            <div class="section" onclick="navigateTo('calendar')">Calendar</div>
            <div class="section" onclick="navigateTo('bill')">Bill</div>
        </main>
        <footer class="footer">
            <p>IMPERIAL CROWN</p>
        </footer>
    </div>

    <script src="{{ asset('js/receptionist.js') }}"></script>
</body>
</html>
