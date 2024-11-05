<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@400;700&family=Libre+Baskerville:wght@400;700&display=swap" rel="stylesheet">
    <title>Imperial Crown | Dashboard</title>
    <style>
        /* General Styles */
        body {
            margin: 0;
            padding: 0;
            font-family: 'Libre Baskerville', serif;
            scroll-behavior: smooth;
            background-color: #f4f4f4;
        }

        .section {
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            color: white;
            text-align: center;
            padding: 40px 20px;
        }

        /* Header and Navbar */
        nav {
    position: fixed; /* Stay at the top of the page */
    top: 5px; /* Ensure it is at the very top */
    left: 5px; 
    right: 5px; /* Ensure it aligns to the left */
    width: 100%; /* Full width */
    background-color: rgba(44, 42, 74, 0.4); 
    display: flex;
    justify-content: space-between; /* Space items evenly */
    align-items: center;
    padding: 10px 30px; /* Increase padding */
    box-shadow: 0 8px 10px rgba(0, 0, 0, 0.15);
    z-index: 1000; /* Ensures it stays on top of other content */
    box-sizing: border-box; 
    transition: background-color 0.3s ease;
    border-bottom: 3px solid rgba(25, 25, 0, 0.2);
        }

        nav .logo {
            font-family: 'Cinzel', serif;
            font-size: 18px;
            color: #FFD700;
            text-transform: uppercase;
            font-weight: bold;
            letter-spacing: 1px;
        }

        nav ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            display: flex;
            gap: 20px;
        }

        nav ul li a {
            color: white;
            font-size: 12px;
            padding: 10px 15px;
            border-radius: 20px;
            transition: background-color 0.3s ease, color 0.3s ease;
            text-decoration: none;
            font-weight: 500;
        }

        nav ul li a:hover {
            color: #FFD700;
            background-color: rgba(255, 215, 0, 0.2);
        }

        /* Dashboard Section */
        .home-section {
            background-image: url('{{ asset('images/hotel-bckground.jpg') }}');
            background-size: cover;
            background-position: center;
            display: flex;
            flex-direction: column;
            justify-content: center;
            text-align: center;
            color: #fff;
            font-family: 'Cinzel', serif;
        }

        .home-section h1 {
            font-size: 48px;
            margin-bottom: 10px;
            font-weight: 700;
            letter-spacing: 2px;
        }

        /* Booking Section */
        .booking-section, .food-ordering-section {
            background-size: cover;
            background-position: center;
            color: #fff;
            text-align: center;
            padding: 50px 20px;
            font-family: 'Cinzel', serif;
        }

        .booking-section {
            background-image: url('{{ asset('images/booking.jpg') }}');
        }

        .food-ordering-section {
            background-image: url('{{ asset('images/food-ordering.jpg') }}');
        }
        
        h2 {
            font-size: 36px;
            margin-bottom: 30px;
            color: #FFD700;
        }

        /* Room Info Section */
        .room-info-container {
            display: flex;
            justify-content: space-around;
            gap: 20px;
            flex-wrap: wrap;
        }

        .room-box {
            background-color: rgba(0, 0, 0, 0.7);
            color: white;
            padding: 20px;
            border-radius: 10px;
            width: 20%;
            text-align: center;
            box-shadow: 0 8px 15px rgba(0, 0, 0, 0.3);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .room-box:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.4);
        }

        .room-image {
            width: 80%;
            border-radius: 10px;
            margin-bottom: 15px;
        }

        /* Button Styles */
        .button-container {
            margin-top: 20px;
        }

        .button {
            background-color: #FFD700;
            color: #333;
            padding: 12px 24px;
            font-size: 18px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            margin: 10px;
            border: none;
            border-radius: 30px;
            cursor: pointer;
            box-shadow: 0 8px 15px rgba(0, 0, 0, 0.2);
            transition: background-color 0.3s ease, color 0.3s ease, transform 0.3s ease;
        }

        .button:hover {
            background-color: #e0c200;
            color: white;
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.4);
        }

        /* Footer */
        footer {
            background-color: #111;
            color: #FFD700;
            text-align: center;
            padding: 20px;
            font-size: 14px;
            font-family: 'Libre Baskerville', serif;
        }

    </style>
</head>
<body>
    <nav>
        <div class="logo">IMPERIAL CROWN</div>
        <ul>
        <li><a href="{{ url('/foodmenu') }}"><i class="fas fa-utensils"></i> Food Menu</a></li>
            <li><a href="{{ url('/booking') }}"><i class="fas fa-calendar-alt"></i> Booking</a></li>
            <li><a href="{{ url('/food-ordering') }}"><i class="fas fa-utensils"></i> Order</a></li>
            @auth
                <li><a href="{{ url('/redirects') }}"><i class="fas fa-user"></i> Dashboard</a></li>
            @else
                <li><a href="{{ route('login') }}"><i class="fas fa-sign-in-alt"></i> Login</a></li>
                @if (Route::has('register'))
                    <li><a href="{{ route('register') }}"><i class="fas fa-user-plus"></i> Register</a></li>
                @endif
            @endauth
        </ul>
    </nav>

    <div class="section home-section">
        <h1>Welcome to Imperial Crown</h1>
    </div>
    <div class="section booking-section" id="booking-section">
        <h2>Add Your Bookings</h2>
        <div class="room-info-container">
            <div class="room-box">
                <img src="{{ asset('images/lroom.jpg') }}" alt="Full Board" class="room-image">
                <h3>Full Board</h3>
                <p>Includes breakfast, lunch, and dinner with luxurious accommodations.</p>
            </div>
            <div class="room-box">
                <img src="{{ asset('images/room.jpg') }}" alt="Half Board" class="room-image">
                <h3>Half Board</h3>
                <p>Includes breakfast and dinner. Perfect for a flexible stay.</p>
            </div>
            <div class="room-box">
                <img src="{{ asset('images/rooml.jpg') }}" alt="Room Only" class="room-image">
                <h3>Room Only</h3>
                <p>Spacious rooms with AC or non-AC options available for your comfort.</p>
            </div>
        </div>
        <div class="button-container">
            <a href="{{ url('/booking') }}" class="button"><i class="fas fa-calendar-alt"></i> Book Now</a>
        </div>
    </div>
    </div><div class="section food-ordering-section" id="food-ordering-section">
        <h2>Order Delicious Food</h2>
        <div class="button-container">
            <a href="{{ url('/food-ordering') }}" class="button"><i class="fas fa-utensils"></i> Order</a>
        </div>
    </div>

    <footer>
        <p>&copy; 2024 Imperial Crown | No. 24, Colombo 7, Sri Lanka</p>
    </footer>
</body>
</html>
