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
    <x-app-layout>
        <header class="header">
            <h1>Receptionist </h1>
        </header>
        <main class="main-content">
            <div class="section" onclick="window.location.href="{{url('food-ordering') }}">Foods</div>
            <div class="section" onclick="navigateTo('rooms')">Rooms</div>
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



