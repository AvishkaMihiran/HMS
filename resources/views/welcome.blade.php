<!DOCTYPE html>
<html lang="en">
<head>
  
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Libre+Baskerville:wght@400;700&display=swap" rel="stylesheet">


    <title>Dashboard Page</title>
    <style>
        /* Background image styling */
        body {
            
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            scroll-behavior: smooth;

        }
        /* Container for the images and buttons */
    
        .section {
            height: 100vh; /* Full screen height for each section */
            display: flex;
            justify-content: center;
            align-items: center;
            color: white;
            text-align: center;}
        .home-section {
            font-family: 'Libre Baskerville', serif;
            background-image: url('{{ asset('images/background.jpg') }}');
            background-size: cover;
            background-position: center;
        }  
        .home-section, .booking-section, .food-ordering-section {
   		 width: 100%; 
	}
        .booking-section {
            background-image: url('{{ asset('images/booking.jpg') }}');
            background-size: cover;
            background-position: center;
            padding-top: 50px; /* Add space at the top */
            padding-bottom: 50px; /* Add space at the bottom */
        }  
        .food-ordering-section {
            background-image: url('{{ asset('images/food-ordering.jpg') }}');
            background-size: cover;
            background-position: center;
            padding-top: 50px; /* Add space at the top */
            padding-bottom: 50px; /* Add space at the bottom */
        }
        /* Button styling */
        .button-container {
            text-align: center;
            box-shadow: 0 8px 15px rgba(0, 0, 0, 0.2);
            margin-top: 20px;
        }

        .button {
            background: linear-gradient(135deg, #6b73ff, #000dff); /* Gradient */
            color: white;
            padding: 15px 30px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 18px;
            margin: 10px;
            border: none;
            border-radius: 30px; /* Rounded corners */
            cursor: pointer;
            box-shadow: 0 8px 15px rgba(0, 0, 0, 0.2); /* Subtle shadow */
            transition: all 0.3s ease; }

            .button:hover {
    background: linear-gradient(135deg, #ff6b6b, #ff0000); /* Hover color change */
    box-shadow: 0 15px 20px rgba(0, 0, 0, 0.3); /* Elevated shadow on hover */
    transform: translateY(-5px); /* Upward movement on hover */
}

        .spacer {
            height: 75px; /* Adjust this value to create more or less space */
        }
        footer {
            font-family: 'Libre Baskerville', serif;
            background-color: #222;
            color: #fff;
            text-align: center;
            padding: 20px;
            font-size: 10px;
            position: relative;
            bottom: 0;
            width: 100%;
        }
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


body {
    margin: 0; /* Remove default margin */
    padding: 0; /* Remove default padding */
    width: 100%; /* Ensure full width */
    overflow-x: hidden; /* Prevent horizontal scrolling */
}
/* Logo or brand name */
nav .logo {
    font-family: 'Cinzel', serif;
    font-size: 16px; /* Increase logo size */
    color: #B8860B; /* A gold color for luxury look */
    text-transform: uppercase;
    font-weight: bold;
    letter-spacing: 2px;
    transition: color 0.3s ease;
}

nav .logo:hover {
    color: #fff; /* Change logo color on hover */
}
/* Navigation links (Booking, Order) */
nav ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    display: flex;
    flex-grow: 1; /* Allow it to take up available space */
    justify-content: flex-end; /* Align items to the right */
}

nav ul li {
    margin-left: 20px;
}


nav ul li a {
    color: white; /* Keep text white for contrast */
    font-size: 16px;
    padding: 10px 20px;
    border-radius: 20px;
    transition: all 0.3s ease; /* Smooth transition */
    text-decoration: none;
    white-space: nowrap; /* Prevent text from wrapping */
}

nav ul li a:hover {
    color: #FFD700; /* Gold on hover */
    border-color: #FFD700; /* Gold border on hover */
    background-color: rgba(255, 215, 0, 0.2); /* Light golden background */
    box-shadow: 0 4px 10px rgba(255, 215, 0, 0.3); /* Soft gold shadow */
    transform: scale(1.05); /* Slightly enlarge the link on hover */
}


body {
    margin: 0; /* Remove default margin */
    padding: 100; /* Remove default padding */
    width: 100%; /* Ensure full width */
    overflow-x: hidden; /* Prevent horizontal scrolling */
}



    </style>


</head>
<body>
  
    <!-- Dashboard Section -->
    <div class="section home-section">
        <h1>WELCOME TO IMPERIAL CROWN </h1>
    </div>
    <div class="spacer"></div>
<nav>
    <div class="logo">
    IMPERIAL CROWN
    </div>
    <ul>
        <li><a href="{{ url('/booking') }}"><i class="fas fa-calendar-alt"></i>Booking</a></li>
        <li><a href="{{ url('/food-ordering') }}"><i class="fas fa-utensils"></i> Order</a></li>
        @auth
            <!-- Only show Dashboard button if logged in -->
            <li><a href="{{ url('/dashboard') }}"><i class="fas fa-user"></i> Dashboard</a></li>
        @else
            <!-- Show login and register buttons if not logged in -->
            <li><a href="{{ route('login') }}"><i class="fas fa-sign-in-alt"></i> Login</a></li>
            @if (Route::has('register'))
                <li><a href="{{ route('register') }}"><i class="fas fa-user-plus"></i> Register</a></li>
            @endif
        @endauth

    </ul>
</nav>
    
    <!-- Booking Section -->
    <div class="section booking-section" id="booking-section">
        <div>
            <h2>Book Your Stay</h2>
            <div class="button-container">
            <a href="{{ url('/booking') }}" class="button"><i class="fas fa-calendar-alt"></i> Booking</a>

</div>
        </div>
    </div>
    <div class="spacer"></div>
    <!-- Food Ordering Section -->
    <div class="section food-ordering-section" id="food-ordering-section">
        <div>
            <h2>Order Delicious Food</h2>
            <div class="button-container">
            <a href="{{ url('/food-ordering') }}" class="button"><i class="fas fa-utensils"></i> Order</a> </div>
        </div>
    </div>
    <footer>
        <p>IMPERIAL CROWN</p>
        <p>N0 24</p>
        <p>COLOMBO 7</p>
        <p>COLOMBO.</p>
    </footer>
</body>
</html>


