<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Staff Interface</title>
    <style>
        /* Global styling */
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            background-image: url('{{ asset('images/staff.jpg') }}'); /* Background image */
            background-size: cover;
            background-position: center;
            height: 100vh; /* Full viewport height */
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .container {
            text-align: center;
            background-color: rgba(0, 0, 0, 0.5); /* Transparent background overlay */
            padding: 40px;
            border-radius: 15px;
            box-shadow: 0 8px 15px rgba(0, 0, 0, 0.5);
        }

        h1 {
            color: white;
            margin-bottom: 30px;
        }

        .button-container {
            display: flex;
            justify-content: center;
            flex-wrap: wrap; /* Allows wrapping on smaller screens */
            gap: 20px; /* Space between buttons */
        }

        .button {
            padding: 15px 30px;
            border: none;
            border-radius: 30px;
            background-color: #007bff;
            color: white;
            font-size: 18px;
            cursor: pointer;
            transition: background-color 0.3s ease;
            box-shadow: 0 8px 15px rgba(0, 0, 0, 0.3);
            text-transform: uppercase;
        }

        .button:hover {
            background-color: #0056b3;
        }

        .button a {
            text-decoration: none;
            color: white;
        }
    </style>
</head>
<body>

<div class="container">
    <h1>Staff Login</h1>
    <div class="button-container">
        <button class="button">
            <a href="{{ url('/admin') }}">Admin</a>
        </button>
        <button class="button">
            <a href="{{ url('/receptionist') }}">Receptionist</a>
        </button>
        <button class="button">
            <a href="{{ url('/waiter') }}">Waiter</a>
        </button>
        <button class="button">
            <a href="{{ url('/cook') }}">Cook</a>
        </button>
    </div>
</div>

</body>
</html>
