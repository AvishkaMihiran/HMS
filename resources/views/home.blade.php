+<!DOCTYPE html>
<html lang="en">
<head>
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <title>Home Page</title>
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
            text-align: center;
        }
        .home-section {
            background-image: url('{{ asset('images/background.jpg') }}');
            background-size: cover;
            background-position: center;
        }  
        .home-section, .booking-section, .food-ordering-section {
    width: 100%; /* Full width for sections */
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
            background-color: #222;
            color: #fff;
            text-align: center;
            padding: 20px;
            font-size: 16px;
            position: relative;
            bottom: 0;
            width: 100%;
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
    <button class="button">
    <!-- Home Section -->
    <div class="section home-section">
        <h1>WELCOME TO IMPERIAL CROWN </h1>
    </div>
    <div class="spacer"></div>
    
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
        
    </footer>
</body>
</html>

