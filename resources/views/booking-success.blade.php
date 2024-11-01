<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking Success</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@700&family=Libre+Baskerville:wght@400;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Libre Baskerville', serif;
            background-color: #2c2a3c;
            color: white;
            text-align: center;
            padding: 50px;
        }
        .success-message {
            background-color: rgba(255, 255, 255, 0.1);
            padding: 20px;
            border-radius: 10px;
            display: inline-block;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.3);
        }
        .success-message h1 {
            color: #FFD700;
        }
        .button {
            display: inline-block;
            padding: 15px 30px;
            background: linear-gradient(135deg, #6b73ff, #000dff);
            color: white;
            border: none;
            border-radius: 25px;
            cursor: pointer;
            text-decoration: none;
            font-weight: bold;
            margin-top: 20px;
            transition: all 0.3s ease;
            font-size: 16px;
        }
        .button:hover {
            background: linear-gradient(135deg, #3a4ed1, #0000ff);
            transform: translateY(-3px);
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.4);
        }
    </style>
</head>
<body>
    <div class="success-message">
        <h1>Booking Successful!</h1>
        <p>Your booking has been confirmed. Thank you for choosing us!</p>
        <a href="{{ route('dashboard') }}" class="button"><i class="fas fa-home"></i> Back to Dashboard</a>
    </div>
</body>
</html>
