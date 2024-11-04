<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Foods - Imperial Crown</title>
    <link rel="stylesheet" href="{{ asset('css/foods.css') }}"> <!-- Directly load CSS without Vite -->
</head>
<body>
    <div class="foods-container">
        <header class="foods-header">
            <h1>Foods</h1>
        </header>
        <main class="foods-main">
            <div class="section order">
                <h2>Order</h2>
                <p>Place new orders and view current orders.</p>
            </div>
            <div class="section details">
                <h2>Details</h2>
                <p>View detailed information about each dish and ingredients.</p>
            </div>
            <div class="section kitchen">
                <h2>Kitchen</h2>
                <p>Check kitchen status and order preparation times.</p>
            </div>
        </main>
    </div>
    <script>
        const foodOrderingUrl = "{{ route('food-ordering') }}";
        const foodMenuUrl = "{{ route('foodmenu') }}";
    </script>
    <script src="{{ asset('js/foods.js') }}"></script> <!-- Directly load JavaScript without Vite -->
</body>
</html>
