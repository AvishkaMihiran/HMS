<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@700&family=Libre+Baskerville:wght@400;700&display=swap" rel="stylesheet">
    <title>Booking Options</title>
    <link rel="stylesheet" href="{{ asset('css/booking.css') }}">
</head>
<body>
<div class="hotel-name">IMPERIAL CROWN</div>
    <div class="container-pakcage-full">
        <!-- Hotel Name at the Top -->
          <!-- Display success message -->
    <!-- @if (session('success'))
    console.log("got it outer");
        <div class="alert alert-success">
            {{ session('success') }}
            console.log("got it");
        </div>
    @endif -->
    @if (session('success'))
    <script>
        alert("{{ session('success') }}"); // This will show an alert with the success message
    </script>
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif
        <div class ="option-name">FAMILY ROOMS</div>
       
        <div class="booking-container">
            <!-- Full Board Option -->
            <div class="booking-option">
                <div class="image" style="background-image: url('{{ asset('images/rooml.jpg') }}');"></div>
                <div class="content">
                    <h2>Full Board</h2>
                    <p>Enjoy a complete stay with all meals included.</p>

              
                </div>
                <form class="booking-form" action="{{ route('booking.store') }}" method="post">
                @foreach($data as $item)
            @if($item->room_title == 'family' && $item->room_type=='fullboard') 
                <div class="price">Rs {{ $item->price }} </div>
                @csrf
        <input type="hidden" name="room_title" id="room_title" value="Family" required>
        <input type="hidden" name="room_type" id="room_type" value="Full Board" required>

    <!-- to be fi -->

        <label for="availabale">Available Rooms:{{ $item->available }}</label>
       <input type="hidden" name="availabale" id="availabale" value="{{ $item->available }}" required>

        <label for="check_in_date">Check-in Date:</label>
        <input type="date" name="check_in_date" id="check_in_date" value="{{ old('check_in_date') }}" required>

        <label for="check_out_date">Check-out Date:</label>
        <input type="date" name="check_out_date" id="check_out_date" value="{{ old('check_out_date') }}" required>

        <label for="num_rooms">Number of Rooms:</label>
        <input type="number" name="num_rooms" id="num_rooms" min="1" max="{{ $item->available }}" value="{{ old('num_rooms') }}" required><br>

        <label for="price">Total Price:{{ $item->price }}</label>
        <input type="hidden" name="price" id="price" value="{{ $item->price }}" required><br>

        <button class="book-now-button" button type="submit">Book Now</button>
                    @endif
                    @endforeach
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
                @foreach($data as $item)
            @if($item->room_title == 'family' && $item->room_type=='halfboard') 
                <div class="price">Rs {{ $item->price }} </div>
                @csrf
        <input type="hidden" name="room_title" id="room_title" value="Family" required>
        <input type="hidden" name="room_type" id="room_type" value="Full Board" required>

    <!-- to be fi -->

        <label for="availabale">Available Rooms:{{ $item->available }}</label>
       <input type="hidden" name="availabale" id="availabale" value="{{ $item->available }}" required>

        <label for="check_in_date">Check-in Date:</label>
        <input type="date" name="check_in_date" id="check_in_date" value="{{ old('check_in_date') }}" required>

        <label for="check_out_date">Check-out Date:</label>
        <input type="date" name="check_out_date" id="check_out_date" value="{{ old('check_out_date') }}" required>

        <label for="num_rooms">Number of Rooms:</label>
        <input type="number" name="num_rooms" id="num_rooms" min="1" max="{{ $item->available }}" value="{{ old('num_rooms') }}" required><br>

        <label for="price">Total Price:{{ $item->price }}</label>
        <input type="hidden" name="price" id="price" value="{{ $item->price }}" required><br>

        <button class="book-now-button" button type="submit">Book Now</button>
                    @endif
                    @endforeach
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
                @foreach($data as $item)
            @if($item->room_title == 'family' && $item->room_type=='roomonly') 
                <div class="price">Rs {{ $item->price }} </div>
                @csrf
        <input type="hidden" name="room_title" id="room_title" value="Family" required>
        <input type="hidden" name="room_type" id="room_type" value="Full Board" required>

    <!-- to be fi -->

        <label for="availabale">Available Rooms:{{ $item->available }}</label>
       <input type="hidden" name="availabale" id="availabale" value="{{ $item->available }}" required>

        <label for="check_in_date">Check-in Date:</label>
        <input type="date" name="check_in_date" id="check_in_date" value="{{ old('check_in_date') }}" required>

        <label for="check_out_date">Check-out Date:</label>
        <input type="date" name="check_out_date" id="check_out_date" value="{{ old('check_out_date') }}" required>

        <label for="num_rooms">Number of Rooms:</label>
        <input type="number" name="num_rooms" id="num_rooms" min="1" max="{{ $item->available }}" value="{{ old('num_rooms') }}" required><br>

        <label for="price">Total Price:{{ $item->price }}</label>
        <input type="hidden" name="price" id="price" value="{{ $item->price }}" required><br>

        <button class="book-now-button" button type="submit">Book Now</button>
                    @endif
                    @endforeach
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
                   
               
                </div>
                <form class="booking-form" action="{{ route('booking.store') }}" method="post">
                @foreach($data as $item)
            @if($item->room_title == 'double' && $item->room_type=='fullboard') 
                <div class="price">Rs {{ $item->price }} </div>
                    @csrf
                    <input type="hidden" name="package" value="Full Board Double">
                    <input type="hidden" name="total_price" id="fullBoardTotalPrice" value=" {{ $item->price }}">

                    <label for="check_in_date_full_board">Check-in Date:</label>
                    <input id="check_in_date_full_board" name="check_in_date" type="date" required>

                    <label for="check_out_date_full_board">Check-out Date:</label>
                    <input id="check_out_date_full_board" name="check_out_date" type="date" required>

                    <label for="rooms_full_board">Number of Rooms:</label>
                    <input id="rooms_full_board" name="rooms" type="number" min="1" value="1" required oninput="calculateTotal('rooms_full_board', 'fullBoardTotalPrice', 'totalFullBoard')">

                    <div class="total-price">Total Price: <span id="totalFullBoard"> {{ $item->price }}</span> Rs</div>

                    <input type="hidden" name="username" value="{{ Auth::user()->name }}"> <!-- Get the username from Auth -->
                    
                    <button class="book-now-button" type="submit"><i class="fas fa-book"></i> Book Now</button>
                    @endif
                    @endforeach
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
                @foreach($data as $item)
            @if($item->room_title == 'double' && $item->room_type=='halfboard') 
                <div class="price">Rs {{ $item->price }} </div>
                    @csrf
                    <input type="hidden" name="package" value="Half Board Double">
                    <input type="hidden" name="total_price" id="halfBoardTotalPrice" value=" {{ $item->price }}">

                    <label for="check_in_date_half_board">Check-in Date:</label>
                    <input id="check_in_date_half_board" name="check_in_date" type="date" required>

                    <label for="check_out_date_half_board">Check-out Date:</label>
                    <input id="check_out_date_half_board" name="check_out_date" type="date" required>

                    <label for="rooms_half_board">Number of Rooms:</label>
                    <input id="rooms_half_board" name="rooms" type="number" min="1" value="1" required oninput="calculateTotal('rooms_half_board', 'halfBoardTotalPrice', 'totalHalfBoard')">

                    <div class="total-price">Total Price: <span id="totalHalfBoard"> {{ $item->price }}</span> Rs</div>

                    <input type="hidden" name="username" value="{{ Auth::user()->name }}"> <!-- Get the username from Auth -->

                    <button class="book-now-button" type="submit"><i class="fas fa-book"></i> Book Now</button>
                    @endif
                @endforeach
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
                @foreach($data as $item)
            @if($item->room_title == 'double' && $item->room_type=='roomonly') 
                <div class="price">Rs {{ $item->price }} </div>
                    @csrf
                    <input type="hidden" name="package" value="Room Only Double">
                    <input type="hidden" name="total_price" id="roomOnlyTotalPrice" value=" {{ $item->price }}">

                    <label for="check_in_date_room_only">Check-in Date:</label>
                    <input id="check_in_date_room_only" name="check_in_date" type="date" required>

                    <label for="check_out_date_room_only">Check-out Date:</label>
                    <input id="check_out_date_room_only" name="check_out_date" type="date" required>

                    <label for="rooms_room_only">Number of Rooms:</label>
                    <input id="rooms_room_only" name="rooms" type="number" min="1" value="1" required oninput="calculateTotal('rooms_room_only', 'roomOnlyTotalPrice', 'totalRoomOnly')">

                    <div class="total-price">Total Price: <span id="totalRoomOnly"> {{ $item->price }}</span> Rs</div>

                    <input type="hidden" name="username" value="{{ Auth::user()->name }}"> <!-- Get the username from Auth -->

                    <button class="book-now-button" type="submit"><i class="fas fa-book"></i> Book Now</button>
                    @endif
                @endforeach
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
                    
                
                </div>
                <form class="booking-form" action="{{ route('booking.store') }}" method="post">
                @foreach($data as $item)
            @if($item->room_title == 'single' && $item->room_type=='fullboard') 
                <div class="price">Rs {{ $item->price }} </div>
                    @csrf
                    <input type="hidden" name="package" value="Full Board Single">
                    <input type="hidden" name="total_price" id="fullBoardTotalPrice" value=" {{ $item->price }}">

                    <label for="check_in_date_full_board">Check-in Date:</label>
                    <input id="check_in_date_full_board" name="check_in_date" type="date" required>

                    <label for="check_out_date_full_board">Check-out Date:</label>
                    <input id="check_out_date_full_board" name="check_out_date" type="date" required>

                    <label for="rooms_full_board">Number of Rooms:</label>
                    <input id="rooms_full_board" name="rooms" type="number" min="1" value="1" required oninput="calculateTotal('rooms_full_board', 'fullBoardTotalPrice', 'totalFullBoard')">

                    <div class="total-price">Total Price: <span id="totalFullBoard"> {{ $item->price }}</span> Rs</div>

                    <input type="hidden" name="username" value="{{ Auth::user()->name }}"> <!-- Get the username from Auth -->
                    
                    <button class="book-now-button" type="submit"><i class="fas fa-book"></i> Book Now</button>
                    @endif
                @endforeach
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
                @foreach($data as $item)
            @if($item->room_title == 'single' && $item->room_type=='halfboard') 
                <div class="price">Rs {{ $item->price }} </div>
                    @csrf
                    <input type="hidden" name="package" value="Half Board Single">
                    <input type="hidden" name="total_price" id="halfBoardTotalPrice" value=" {{ $item->price }}">

                    <label for="check_in_date_half_board">Check-in Date:</label>
                    <input id="check_in_date_half_board" name="check_in_date" type="date" required>

                    <label for="check_out_date_half_board">Check-out Date:</label>
                    <input id="check_out_date_half_board" name="check_out_date" type="date" required>

                    <label for="rooms_half_board">Number of Rooms:</label>
                    <input id="rooms_half_board" name="rooms" type="number" min="1" value="1" required oninput="calculateTotal('rooms_half_board', 'halfBoardTotalPrice', 'totalHalfBoard')">

                    <div class="total-price">Total Price: <span id="totalHalfBoard"> {{ $item->price }}</span> Rs</div>

                    <input type="hidden" name="username" value="{{ Auth::user()->name }}"> <!-- Get the username from Auth -->

                    <button class="book-now-button" type="submit"><i class="fas fa-book"></i> Book Now</button>
                    @endif
                @endforeach
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
                @foreach($data as $item)
            @if($item->room_title == 'single' && $item->room_type=='roomonly') 
                <div class="price">Rs {{ $item->price }} </div>
                    @csrf
                    <input type="hidden" name="package" value="Room Only Single">
                    <input type="hidden" name="total_price" id="roomOnlyTotalPrice" value=" {{ $item->price }}">

                    <label for="check_in_date_room_only">Check-in Date:</label>
                    <input id="check_in_date_room_only" name="check_in_date" type="date" required>

                    <label for="check_out_date_room_only">Check-out Date:</label>
                    <input id="check_out_date_room_only" name="check_out_date" type="date" required>

                    <label for="rooms_room_only">Number of Rooms:</label>
                    <input id="rooms_room_only" name="rooms" type="number" min="1" value="1" required oninput="calculateTotal('rooms_room_only', 'roomOnlyTotalPrice', 'totalRoomOnly')">

                    <div class="total-price">Total Price: <span id="totalRoomOnly"> {{ $item->price }}</span> Rs</div>

                    <input type="hidden" name="username" value="{{ Auth::user()->name }}"> <!-- Get the username from Auth -->

                    <button class="book-now-button" type="submit"><i class="fas fa-book"></i> Book Now</button>
                    @endif
                @endforeach
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
