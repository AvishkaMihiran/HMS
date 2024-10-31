<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@700&family=Libre+Baskerville:wght@400;700&display=swap" rel="stylesheet">
    <title>Booking Options</title>
    <style>
        body, html {
            height: 100%;
            margin: 0;
            font-family: 'Libre Baskerville', serif;
            background-color: #2c2a3c; /* Luxurious dark purple */
            color: white;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 20px;
        }

        .booking-container {
            display: flex;
            flex-direction: column;
            gap: 20px;
            max-width: 1200px;
            width: 100%;
            color: #000; 
        }

        .booking-option {
            display: flex;
            align-items: center;
            justify-content: space-between;
            background-color: rgba(255, 255, 255, 0.1);
            border-radius: 15px;
            overflow: hidden;
            padding: 20px;
            width: 100%;
            height: 120px;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            position: relative;
        }

        .booking-option:hover {
            transform: scale(1.02);
            box-shadow: 0 8px 20px rgba(255, 215, 0, 0.3);
        }

        .image {
            width: 200px; /* Extended image width */
            height: 100%;
            background-size: cover;
            background-position: center;
            border-radius: 10px;
            margin-right: 20px;
        }

        .content {
            flex: 1;
            color: #f86;
            font-family: 'Cinzel', serif;
            padding: 0 20px;
        }

        .content h2 {
            font-size: 22px;
            color: #FFD700;
            margin: 0;
        }

        .content p {
            font-size: 14px;
            color: #ccc;
            margin: 5px 0;
        }

        .book-now-button, .ac-option, .non-ac-option {
            padding: 8px 15px;
            background: linear-gradient(135deg, #6b73ff, #000dff);
            color: white;
            border: none;
            border-radius: 25px;
            cursor: pointer;
            transition: all 0.3s ease;
            font-size: 14px;
            font-weight: bold;
            margin-left: 10px;
        }

        .book-now-button:hover, .ac-option:hover, .non-ac-option:hover {
            background: linear-gradient(135deg, #0000, #ff0000);
            box-shadow: 0 8px 15px rgba(255, 0, 0, 0.3);
            transform: translateY(-3px);
        }

        .room-only-options {
            display: flex;
            gap: 10px;
            align-items: center;
        }
    </style>
</head>
<body>
    <div class="booking-container">
        <!-- Full Board Option -->
        <div class="booking-option">
            <div class="image" style="background-image: url('{{ asset('images/lroom.jpg') }}');"></div>
            <div class="content">
                <h2>Full Board</h2>
                <p>Enjoy a complete stay with all meals included.</p>
            </div>
            <button class="book-now-button"><i class="fas fa-book"></i> Book Now</button>
        </div>

        <!-- Half Board Option -->
        <div class="booking-option">
            <div class="image" style="background-image: url('{{ asset('images/room.jpg') }}');"></div>
            <div class="content">
                <h2>Half Board</h2>
                <p>Stay with breakfast and dinner included.</p>
            </div>
            <button class="book-now-button"><i class="fas fa-book"></i> Book Now</button>
        </div>

        <!-- Room Only Option with AC/Non-AC buttons -->
        <div class="booking-option">
            <div class="image" style="background-image: url('{{ asset('images/rooml.jpg') }}');"></div>
            <div class="content">
                <h2>Room Only</h2>
                <p>Book a room with no additional meals. Choose AC or Non-AC.</p>
            </div>
            <div class="room-only-options">
                <button class="ac-option"><i class="fas fa-snowflake"></i> AC</button>
                <button class="non-ac-option"><i class="fas fa-wind"></i> Non-AC</button>
                <button class="book-now-button"><i class="fas fa-book"></i> Book Now</button>
            </div>
        </div>
    </div>
</body>
</html>
