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
    <x-app-layout>
        <header class="header">
            <h1>Receptionist</h1>
        </header>
        <main class="main-content">
<<<<<<< HEAD:resources/views/receptionist.blade.php
            <div class="section" onclick="window.location.href="{{url('food-ordering') }}">Foods</div>
            <div class="section" onclick="navigateTo('rooms')">Rooms</div>
=======
            <!-- Update: Use route for Foods button to navigate to foods-interface -->
            <div class="section" onclick="window.location.href='{{ route('receptionist.foods-interface') }}'">Foods</div>
            <div class="section" onclick="window.location.href='{{ route('receptionist.rooms-interface') }}'">Rooms</div>
<<<<<<< HEAD
>>>>>>> cac11ffc9ede9bcd846263868beafbe670a07b8d:resources/views/receptionist/receptionist.blade.php
            <div class="section" onclick="navigateTo('calendar')">Calendar</div>
            <div class="section" onclick="navigateTo('bill')">Bill</div>
=======
            <div class="section" onclick="window.location.href='{{ route('receptionist.calendar') }}'">Calendar</div>
            <div class="section" onclick="window.location.href='{{ route('receptionist.bill') }}'">Bill</div>
>>>>>>> a489ce267d23ca596ab97cda2a8912d3631f5510
        </main>
        <footer class="footer">
            <p>IMPERIAL CROWN</p>
        </footer>
    </div>

    <script src="{{ asset('js/receptionist.js') }}"></script>
</body>
</html>
