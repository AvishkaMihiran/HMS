<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@700&family=Libre+Baskerville:wght@400;700&display=swap" rel="stylesheet">
    <title>Booking Options</title>
    <style>
        /* Basic Reset */
        * {
            box-sizing: border-box;
        }

        body, html {
            height: 100%;
            margin: 0;
            font-family: 'Libre Baskerville', serif;
            background-color: #2c2a3c;
            color: white;
            overflow-y: auto;
            padding: 0;
        }

        .container {
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 20px;
        }

        /* Hotel Name Styling */
        .hotel-name {
            font-family: 'Cinzel', serif;
            font-size: 36px;
            color: #FFD700;
            margin-bottom: 20px;
            text-align: center;
        }

        .booking-container {
            display: flex;
            flex-direction: column;
            gap: 20px;
            max-width: 1000px;
            width: 100%;
        }

        .booking-option {
            display: flex;
            align-items: center;
            background-color: rgba(255, 255, 255, 0.08);
            border-radius: 15px;
            overflow: hidden;
            padding: 20px;
            gap: 20px;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            position: relative;
        }

        .booking-option:hover {
            transform: scale(1.02);
            box-shadow: 0 8px 20px rgba(255, 215, 0, 0.3);
        }

        .image {
            flex-shrink: 0;
            width: 160px;
            height: 160px;
            background-size: cover;
            background-position: center;
            border-radius: 10px;
        }

        .content {
            flex: 1;
            padding: 0 20px;
        }

        .content h2 {
            font-size: 22px;
            color: #FFD700;
            margin: 0;
            font-family: 'Cinzel', serif;
        }

        .content p {
            font-size: 14px;
            color: #ccc;
            margin: 10px 0;
        }

        .booking-form {
            display: flex;
            flex-direction: column;
            gap: 10px;
            max-width: 220px;
        }

        .booking-form label {
            font-size: 12px;
            color: #ddd;
        }

        .booking-form input[type="date"],
        .booking-form input[type="number"] {
            padding: 8px;
            font-size: 14px;
            border-radius: 5px;
            border: 1px solid #555;
            background-color: #444;
            color: #f8f8f8;
            outline: none;
            width: 100%;
        }

        .room-selector {
            display: flex;
            gap: 5px;
            margin-top: 10px;
        }

        .room-selector button {
            padding: 5px 10px;
            background: #FFD700;
            color: #2c2a3c;
            border: none;
            border-radius: 5px;
            font-weight: bold;
            cursor: pointer;
            transition: all 0.2s ease;
        }

        .room-selector button:hover {
            background: #ffdb58;
        }

        .book-now-button {
            padding: 10px 20px;
            background: linear-gradient(135deg, #6b73ff, #000dff);
            color: white;
            border: none;
            border-radius: 20px;
            cursor: pointer;
            transition: all 0.3s ease;
            font-size: 14px;
            font-weight: bold;
            align-self: flex-start;
            margin-top: 10px;
        }

        .book-now-button:hover {
            background: linear-gradient(135deg, #3a4ed1, #0000ff);
            box-shadow: 0 8px 15px rgba(0, 0, 255, 0.3);
            transform: translateY(-3px);
        }
    </style>
</head>
<body>
    <div class="container">
        <!-- Hotel Name at the Top -->
        <div class="hotel-name">IMPERIAL CROWN</div>

        <div class="booking-container">
            <!-- Full Board Option -->
            <div class="booking-option">
                <div class="image" style="background-image: url('{{ asset('images/rooml.jpg') }}');"></div>
                <div class="content">
                    <h2>Full Board</h2>
                    <p>Enjoy a complete stay with all meals included.</p>
                </div>
                <form class="booking-form" action="{{ route('booking.store') }}" method="post">
                    @csrf
                    <input type="hidden" name="package" value="Full Board"> <!-- or the appropriate package -->

                    <label for="check_in_date">Check-in Date:</label>
                    <input id="check_in_date" name="check_in_date" type="date" required>

                    <label for="check_out_date">Check-out Date:</label>
                    <input id="check_out_date" name="check_out_date" type="date" required>

                    <label for="rooms">Number of Rooms:</label>
                    <input id="rooms" name="rooms" type="number" min="1" required>

                    <button class="book-now-button" type="submit"><i class="fas fa-book"></i> Book Now</button>
                </form> 
            </div>

            <!-- Half Board Option -->
            <div class="booking-option">
                <div class="image" style="background-image: url('{{ asset('images/room.jpg') }}');"></div>
                <div class="content">
                    <h2>Half Board</h2>
                    <p>Stay with breakfast and dinner included.</p>
                </div>
                <form class="booking-form" action="{{ route('booking.store') }}" method="post">
                    @csrf
                    <input type="hidden" name="package" value="Half Board"> <!-- or the appropriate package -->

                    <label for="check_in_date">Check-in Date:</label>
                    <input id="check_in_date" name="check_in_date" type="date" required>

                    <label for="check_out_date">Check-out Date:</label>
                    <input id="check_out_date" name="check_out_date" type="date" required>

                    <label for="rooms">Number of Rooms:</label>
                    <input id="rooms" name="rooms" type="number" min="1" required>

                    <button class="book-now-button" type="submit"><i class="fas fa-book"></i> Book Now</button>
                </form> 
            </div>

            <!-- Room Only Option -->
            <div class="booking-option">
                <div class="image" style="background-image: url('{{ asset('images/lroom.jpg') }}');"></div>
                <div class="content">
                    <h2>Room Only</h2>
                    <p>Book a room with no additional meals.</p>
                </div>
                <form class="booking-form" action="{{ route('booking.store') }}" method="post">
                    @csrf
                    <input type="hidden" name="package" value="Room Only"> <!-- or the appropriate package -->

                    <label for="check_in_date">Check-in Date:</label>
                    <input id="check_in_date" name="check_in_date" type="date" required>

                    <label for="check_out_date">Check-out Date:</label>
                    <input id="check_out_date" name="check_out_date" type="date" required>

                    <label for="rooms">Number of Rooms:</label>
                    <input id="rooms" name="rooms" type="number" min="1" required>

                    <button class="book-now-button" type="submit"><i class="fas fa-book"></i> Book Now</button>
                </form> 
            </div>
        </div>
    </div>
</body>
</html>
