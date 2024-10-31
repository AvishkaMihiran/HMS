<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12 min-h-screen" style="background: linear-gradient(135deg, #2c2a4a, #1a1a2e, #3e2f5b, #b8860b);">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-dark overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-white">
                    <!-- Add your split layout HTML here -->
                    <div class="split-container">
                        <!-- Left Side (Booking Section) -->
                        <div class="split split-left">
                            <div class="overlay"></div>
                            <div class="content">
                                <h1>Book Your Stay</h1>
                                <p>Experience luxury and comfort.</p>
                                <a href="{{ url('/booking') }}" class="button">Book Now</a>
                            </div>
                        </div>

                        <!-- Vertical Divider -->
                        <div class="vertical-divider"></div>

                        <!-- Right Side (Food Ordering Section) -->
                        <div class="split split-right">
                            <div class="overlay"></div>
                            <div class="content">
                                <h1>Order Delicious Food</h1>
                                <p>Enjoy a gourmet meal at your convenience.</p>
                                <a href="{{ url('/food-ordering') }}" class="button">Order Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Styles for the split layout with dark theme -->
    <style>
        body {
            background-color: #FFD700;
            color: #2C2A4A;
        }

        .split-container {
            display: flex;
            height: 100vh;
            width: 100%;
        }

        .split {
            width: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
            text-align: center;
            overflow: hidden;
        }

        .split-left {
            background-image: url('{{ asset('images/booking.jpg') }}');
            background-size: cover;
            background-position: center;
        }

        .split-right {
            background-image: url('{{ asset('images/food-ordering.jpg') }}');
            background-size: cover;
            background-position: center;
        }

        .overlay {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: rgba(0, 0, 0, 0.6); /* Dark overlay */
            z-index: 1;
        }

        .content {
            z-index: 2;
            color: white;
            font-family: 'Cinzel', serif;
        }

        .content h1 {
            font-size: 48px;
            margin-bottom: 20px;
        }

        .content p {
            font-size: 18px;
            margin-bottom: 30px;
        }

        /* Styled Buttons */
        .button {
            padding: 15px 30px;
            background: linear-gradient(45deg, #FFD700, #FF8C00); /* Gold to orange gradient */
            color: black;
            font-size: 16px;
            text-decoration: none;
            border-radius: 30px;
            box-shadow: 0 8px 15px rgba(255, 140, 0, 0.5); /* Glowing effect */
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
        }

        .button::before {
            content: '';
            position: absolute;
            top: -50%;
            left: -50%;
            width: 200%;
            height: 200%;
            background: rgba(255, 255, 255, 0.15);
            opacity: 0;
            transition: opacity 0.3s ease;
            transform: rotate(45deg);
        }

        .button:hover {
            background: linear-gradient(45deg, #ffcc00, #ff6600); /* Change gradient on hover */
            box-shadow: 0 12px 20px rgba(255, 140, 0, 0.8);
            transform: translateY(-5px);
        }

        .button:hover::before {
            opacity: 1;
        }

        .vertical-divider {
            background-color: rgba(255, 255, 255, 0.1);
            width: 2px;
            height: 100%;
            position: absolute;
            left: 50%;
            z-index: 5;
        }

        @media screen and (max-width: 768px) {
            .split-container {
                flex-direction: column;
            }

            .split {
                width: 100%;
                height: 50vh;
            }

            .vertical-divider {
                display: none;
            }
        }
    </style>

</x-app-layout>
