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
        .container-pakcage-full{
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 20px;
            background-color: rgba(255, 215, 0, 0.3);
            border-radius: 15px;
            overflow: hidden;
            padding: 20px;
            gap: 20px;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            width: 100%; 
        }
        .container-pakcage-half{
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 20px;
            background-color: rgba(124, 74, 36, 0.3);
            border-radius: 15px;
            overflow: hidden;
            padding: 20px;
            gap: 20px;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            width: 100%; 
        }
        .container-pakcage-room{
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 20px;
            background-color: rgba(247, 231, 206, 0.3);
            border-radius: 15px;
            overflow: hidden;
            padding: 20px;
            gap: 20px;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            width: 100%; 
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
            align-items: center;
            display: flex;
            flex-direction: row;
            gap: 20px;
            padding: 10px;
            max-width: 1000px;
            width: 100%;
        }

        .booking-option {
        display: flex;
        flex-direction: column;
        align-items: center;
        background-color: rgba(255, 255, 255, 0.08);
        border-radius: 15px;
        overflow: hidden;
        padding: 20px;
        gap: 20px;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        position: relative;
        width: 30%; /* Each box takes up 30% of the row */
    }
        .booking-option:hover {
            transform: scale(1.02);
            box-shadow: 0 8px 20px rgba(255, 215, 0, 0.3);
        }

        .image {
            width: 100%;
            height: 160px;
            background-size: cover;
            background-position: center;
            border-radius: 10px;
        }

        .content {
            text-align: center;
        }

        .content h2 {
            font-size: 16px;
            color: #FFD700;
            margin: 0;
            font-family: 'Cinzel', serif;
        }

        .content p {
            font-size: 12px;
            color: #ccc;
            margin: 10px 0;
        }

        .price {
            font-family: Cinzel; 
            font-size: 12px;
            color: #FFD700;
            margin-top: 10px;
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
            font-size: 12px;
            border-radius: 5px;
            border: 1px solid #555;
            background-color: #444;
            color: #f8f8f8;
            outline: none;
            width: 100%;
        }

        .total-price {
            font-size: 12px;
            color: #FFD700;
            margin-top: 10px;
            font-weight: bold;
        }

        .book-now-button {
            padding: 10px 20px;
            background: linear-gradient(135deg, #6b73ff, #000dff);
            color: white;
            border: none;
            border-radius: 20px;
            cursor: pointer;
            transition: all 0.3s ease;
            font-size: 12px;
            font-weight: bold;
            align-self: flex-start;
            margin-top: 5px;
        }

        .book-now-button:hover {
            background: linear-gradient(135deg, #3a4ed1, #0000ff);
            box-shadow: 0 8px 15px rgba(0, 0, 255, 0.3);
            transform: translateY(-3px);
        }
    </style>
</head>
<body>
<div class="hotel-name">IMPERIAL CROWN</div>
    <div class="container-pakcage-full">
        <!-- Hotel Name at the Top -->
        
        <div class ="option-name">FAMILY ROOMS</div>
        <div class="booking-container">
            <!-- Full Board Option -->
            <div class="booking-option">
                <div class="image" style="background-image: url('{{ asset('images/rooml.jpg') }}');"></div>
                <div class="content">
                    <h2>Full Board</h2>
                    <p>Enjoy a complete stay with all meals included.</p>
                    <div class="price">Price: 25000 Rs per room</div>
                </div>
                <form class="booking-form" action="{{ route('booking.store') }}" method="post">
                    @csrf
                    <input type="hidden" name="package" value="Full Board Family">
                    <input type="hidden" name="total_price" id="fullBoardTotalPrice" value="25000">

                    <label for="check_in_date_full_board">Check-in Date:</label>
                    <input id="check_in_date_full_board" name="check_in_date" type="date" required>

                    <label for="check_out_date_full_board">Check-out Date:</label>
                    <input id="check_out_date_full_board" name="check_out_date" type="date" required>

                    <label for="rooms_full_board">Number of Rooms:</label>
                    <input id="rooms_full_board" name="rooms" type="number" min="1" value="1" required oninput="calculateTotal('rooms_full_board', 'fullBoardTotalPrice', 'totalFullBoard')">

                    <div class="total-price">Total Price: <span id="totalFullBoard">25000</span> Rs</div>

                    <input type="hidden" name="username" value="{{ Auth::user()->name }}"> <!-- Get the username from Auth -->
                    
                    <button class="book-now-button" type="submit"><i class="fas fa-book"></i> Book Now</button>
                </form>
            </div>

            <!-- Half Board Option -->
            <div class="booking-option">
                <div class="image" style="background-image: url('{{ asset('images/room.jpg') }}');"></div>
                <div class="content">
                    <h2>Half Board</h2>
                    <p>Stay with breakfast and dinner included.</p>
                    <div class="price">Price: 20000 Rs per room</div>
                </div>
                <form class="booking-form" action="{{ route('booking.store') }}" method="post">
                    @csrf
                    <input type="hidden" name="package" value="Half Board Family">
                    <input type="hidden" name="total_price" id="halfBoardTotalPrice" value="20000">

                    <label for="check_in_date_half_board">Check-in Date:</label>
                    <input id="check_in_date_half_board" name="check_in_date" type="date" required>

                    <label for="check_out_date_half_board">Check-out Date:</label>
                    <input id="check_out_date_half_board" name="check_out_date" type="date" required>

                    <label for="rooms_half_board">Number of Rooms:</label>
                    <input id="rooms_half_board" name="rooms" type="number" min="1" value="1" required oninput="calculateTotal('rooms_half_board', 'halfBoardTotalPrice', 'totalHalfBoard')">

                    <div class="total-price">Total Price: <span id="totalHalfBoard">20000</span> Rs</div>

                    <input type="hidden" name="username" value="{{ Auth::user()->name }}"> <!-- Get the username from Auth -->

                    <button class="book-now-button" type="submit"><i class="fas fa-book"></i> Book Now</button>
                </form>
            </div>

            <!-- Room Only Option -->
            <div class="booking-option">
                <div class="image" style="background-image: url('{{ asset('images/lroom.jpg') }}');"></div>
                <div class="content">
                    <h2>Room Only</h2>
                    <p>Book a room with no additional meals.</p>
                    <div class="price">Price: 10000 Rs per room</div>
                </div>
                <form class="booking-form" action="{{ route('booking.store') }}" method="post">
                    @csrf
                    <input type="hidden" name="package" value="Room Only Family">
                    <input type="hidden" name="total_price" id="roomOnlyTotalPrice" value="10000">

                    <label for="check_in_date_room_only">Check-in Date:</label>
                    <input id="check_in_date_room_only" name="check_in_date" type="date" required>

                    <label for="check_out_date_room_only">Check-out Date:</label>
                    <input id="check_out_date_room_only" name="check_out_date" type="date" required>

                    <label for="rooms_room_only">Number of Rooms:</label>
                    <input id="rooms_room_only" name="rooms" type="number" min="1" value="1" required oninput="calculateTotal('rooms_room_only', 'roomOnlyTotalPrice', 'totalRoomOnly')">

                    <div class="total-price">Total Price: <span id="totalRoomOnly">10000</span> Rs</div>

                    <input type="hidden" name="username" value="{{ Auth::user()->name }}"> <!-- Get the username from Auth -->

                    <button class="book-now-button" type="submit"><i class="fas fa-book"></i> Book Now</button>
                </form>
            </div>
        </div>
    </div>
    <div class="container-pakcage-half">
       
        <div class ="option-name">Double ROOMS</div>
        <div class="booking-container">
            <!-- Full Board Option -->
            <div class="booking-option">
                <div class="image" style="background-image: url('{{ asset('images/rooml.jpg') }}');"></div>
                <div class="content">
                    <h2>Full Board</h2>
                    <p>Enjoy a complete stay with all meals included.</p>
                    <div class="price">Price: 23000 Rs per room</div>
                </div>
                <form class="booking-form" action="{{ route('booking.store') }}" method="post">
                    @csrf
                    <input type="hidden" name="package" value="Full Board Double">
                    <input type="hidden" name="total_price" id="fullBoardTotalPrice" value="23000">

                    <label for="check_in_date_full_board">Check-in Date:</label>
                    <input id="check_in_date_full_board" name="check_in_date" type="date" required>

                    <label for="check_out_date_full_board">Check-out Date:</label>
                    <input id="check_out_date_full_board" name="check_out_date" type="date" required>

                    <label for="rooms_full_board">Number of Rooms:</label>
                    <input id="rooms_full_board" name="rooms" type="number" min="1" value="1" required oninput="calculateTotal('rooms_full_board', 'fullBoardTotalPrice', 'totalFullBoard')">

                    <div class="total-price">Total Price: <span id="totalFullBoard">23000</span> Rs</div>

                    <input type="hidden" name="username" value="{{ Auth::user()->name }}"> <!-- Get the username from Auth -->
                    
                    <button class="book-now-button" type="submit"><i class="fas fa-book"></i> Book Now</button>
                </form>
            </div>

            <!-- Half Board Option -->
            <div class="booking-option">
                <div class="image" style="background-image: url('{{ asset('images/room.jpg') }}');"></div>
                <div class="content">
                    <h2>Half Board</h2>
                    <p>Stay with breakfast and dinner included.</p>
                    <div class="price">Price: 17000 Rs per room</div>
                </div>
                <form class="booking-form" action="{{ route('booking.store') }}" method="post">
                    @csrf
                    <input type="hidden" name="package" value="Half Board Double">
                    <input type="hidden" name="total_price" id="halfBoardTotalPrice" value="17000">

                    <label for="check_in_date_half_board">Check-in Date:</label>
                    <input id="check_in_date_half_board" name="check_in_date" type="date" required>

                    <label for="check_out_date_half_board">Check-out Date:</label>
                    <input id="check_out_date_half_board" name="check_out_date" type="date" required>

                    <label for="rooms_half_board">Number of Rooms:</label>
                    <input id="rooms_half_board" name="rooms" type="number" min="1" value="1" required oninput="calculateTotal('rooms_half_board', 'halfBoardTotalPrice', 'totalHalfBoard')">

                    <div class="total-price">Total Price: <span id="totalHalfBoard">17000</span> Rs</div>

                    <input type="hidden" name="username" value="{{ Auth::user()->name }}"> <!-- Get the username from Auth -->

                    <button class="book-now-button" type="submit"><i class="fas fa-book"></i> Book Now</button>
                </form>
            </div>

            <!-- Room Only Option -->
            <div class="booking-option">
                <div class="image" style="background-image: url('{{ asset('images/lroom.jpg') }}');"></div>
                <div class="content">
                    <h2>Room Only</h2>
                    <p>Book a room with no additional meals.</p>
                    <div class="price">Price: 7000 Rs per room</div>
                </div>
                <form class="booking-form" action="{{ route('booking.store') }}" method="post">
                    @csrf
                    <input type="hidden" name="package" value="Room Only Double">
                    <input type="hidden" name="total_price" id="roomOnlyTotalPrice" value="7000">

                    <label for="check_in_date_room_only">Check-in Date:</label>
                    <input id="check_in_date_room_only" name="check_in_date" type="date" required>

                    <label for="check_out_date_room_only">Check-out Date:</label>
                    <input id="check_out_date_room_only" name="check_out_date" type="date" required>

                    <label for="rooms_room_only">Number of Rooms:</label>
                    <input id="rooms_room_only" name="rooms" type="number" min="1" value="1" required oninput="calculateTotal('rooms_room_only', 'roomOnlyTotalPrice', 'totalRoomOnly')">

                    <div class="total-price">Total Price: <span id="totalRoomOnly">7000</span> Rs</div>

                    <input type="hidden" name="username" value="{{ Auth::user()->name }}"> <!-- Get the username from Auth -->

                    <button class="book-now-button" type="submit"><i class="fas fa-book"></i> Book Now</button>
                </form>
            </div>
        </div>
    </div>
    <div class="container-pakcage-room">
       
        <div class ="option-name">SINGLE ROOMS</div>
        <div class="booking-container">
            <!-- Full Board Option -->
            <div class="booking-option">
                <div class="image" style="background-image: url('{{ asset('images/rooml.jpg') }}');"></div>
                <div class="content">
                    <h2>Full Board</h2>
                    <p>Enjoy a complete stay with all meals included.</p>
                    <div class="price">Price: 20000 Rs per room</div>
                </div>
                <form class="booking-form" action="{{ route('booking.store') }}" method="post">
                    @csrf
                    <input type="hidden" name="package" value="Full Board Single">
                    <input type="hidden" name="total_price" id="fullBoardTotalPrice" value="20000">

                    <label for="check_in_date_full_board">Check-in Date:</label>
                    <input id="check_in_date_full_board" name="check_in_date" type="date" required>

                    <label for="check_out_date_full_board">Check-out Date:</label>
                    <input id="check_out_date_full_board" name="check_out_date" type="date" required>

                    <label for="rooms_full_board">Number of Rooms:</label>
                    <input id="rooms_full_board" name="rooms" type="number" min="1" value="1" required oninput="calculateTotal('rooms_full_board', 'fullBoardTotalPrice', 'totalFullBoard')">

                    <div class="total-price">Total Price: <span id="totalFullBoard">20000</span> Rs</div>

                    <input type="hidden" name="username" value="{{ Auth::user()->name }}"> <!-- Get the username from Auth -->
                    
                    <button class="book-now-button" type="submit"><i class="fas fa-book"></i> Book Now</button>
                </form>
            </div>

            <!-- Half Board Option -->
            <div class="booking-option">
                <div class="image" style="background-image: url('{{ asset('images/room.jpg') }}');"></div>
                <div class="content">
                    <h2>Half Board</h2>
                    <p>Stay with breakfast and dinner included.</p>
                    <div class="price">Price: 15000 Rs per room</div>
                </div>
                <form class="booking-form" action="{{ route('booking.store') }}" method="post">
                    @csrf
                    <input type="hidden" name="package" value="Half Board Single">
                    <input type="hidden" name="total_price" id="halfBoardTotalPrice" value="15000">

                    <label for="check_in_date_half_board">Check-in Date:</label>
                    <input id="check_in_date_half_board" name="check_in_date" type="date" required>

                    <label for="check_out_date_half_board">Check-out Date:</label>
                    <input id="check_out_date_half_board" name="check_out_date" type="date" required>

                    <label for="rooms_half_board">Number of Rooms:</label>
                    <input id="rooms_half_board" name="rooms" type="number" min="1" value="1" required oninput="calculateTotal('rooms_half_board', 'halfBoardTotalPrice', 'totalHalfBoard')">

                    <div class="total-price">Total Price: <span id="totalHalfBoard">15000</span> Rs</div>

                    <input type="hidden" name="username" value="{{ Auth::user()->name }}"> <!-- Get the username from Auth -->

                    <button class="book-now-button" type="submit"><i class="fas fa-book"></i> Book Now</button>
                </form>
            </div>

            <!-- Room Only Option -->
            <div class="booking-option">
                <div class="image" style="background-image: url('{{ asset('images/lroom.jpg') }}');"></div>
                <div class="content">
                    <h2>Room Only</h2>
                    <p>Book a room with no additional meals.</p>
                    <div class="price">Price: 5000 Rs per room</div>
                </div>
                <form class="booking-form" action="{{ route('booking.store') }}" method="post">
                    @csrf
                    <input type="hidden" name="package" value="Room Only Single">
                    <input type="hidden" name="total_price" id="roomOnlyTotalPrice" value="5000">

                    <label for="check_in_date_room_only">Check-in Date:</label>
                    <input id="check_in_date_room_only" name="check_in_date" type="date" required>

                    <label for="check_out_date_room_only">Check-out Date:</label>
                    <input id="check_out_date_room_only" name="check_out_date" type="date" required>

                    <label for="rooms_room_only">Number of Rooms:</label>
                    <input id="rooms_room_only" name="rooms" type="number" min="1" value="1" required oninput="calculateTotal('rooms_room_only', 'roomOnlyTotalPrice', 'totalRoomOnly')">

                    <div class="total-price">Total Price: <span id="totalRoomOnly">5000</span> Rs</div>

                    <input type="hidden" name="username" value="{{ Auth::user()->name }}"> <!-- Get the username from Auth -->

                    <button class="book-now-button" type="submit"><i class="fas fa-book"></i> Book Now</button>
                </form>
            </div>
        </div>
    </div>
    <script>
        function calculateTotal(roomInputId, priceInputId, totalSpanId) {
            const rooms = document.getElementById(roomInputId).value;
            const pricePerRoom = document.getElementById(priceInputId).value;
            const totalPrice = rooms * pricePerRoom;
            document.getElementById(totalSpanId).innerText = totalPrice;
            document.getElementById(priceInputId).value = totalPrice; // Update hidden total price field
        }
        window.onload = function() {
        const today = new Date().toISOString().split('T')[0]; // Get today's date in YYYY-MM-DD format
        
        // Set minimum date for all check-in inputs
        document.querySelectorAll('input[type="date"]').forEach(input => {
            input.setAttribute('min', today);
        });

        // Add event listeners for check-in dates to adjust check-out dates accordingly
        document.querySelectorAll('input[name="check_in_date"]').forEach(checkInInput => {
            checkInInput.onchange = function() {
                const checkInDate = new Date(checkInInput.value);
                checkInDate.setDate(checkInDate.getDate() + 1); // Set min check-out date to the next day
                const checkOutInput = checkInInput.closest('form').querySelector('input[name="check_out_date"]');
                checkOutInput.setAttribute('min', checkInDate.toISOString().split('T')[0]);
            };
        });
    };
    </script>
</body>
</html>
