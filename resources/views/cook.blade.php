<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@700&family=Libre+Baskerville:wght@400;700&display=swap" rel="stylesheet">
    <title>Cook Dashboard</title>
    <style>
        /* Overall styling */
        body, html {
            height: 100%;
            margin: 0;
            font-family: 'Libre Baskerville', serif;
            background-image: url('{{ asset('images/food.jpg') }}');
            background-size: cover;
            background-position: center;
            display: flex;
            flex-direction: column;
            color: #fff;
        }
        
        /* Centered content container */
        .content {
            flex-grow: 1;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            text-align: center;
        }

        h1 {
            font-size: 20spx;
            color: #FFD700; /* Luxurious gold color */
            text-shadow: 2px 2px 8px rgba(0, 0, 0, 0.6); /* Shadow for depth */
            margin-bottom: 20px;
            font-family: 'Cinzel', serif;
        }

        .button-container {
    display: flex;
    gap: 15px;
    justify-content: center;  /* Center buttons horizontally */
    align-items: center;  /* Center buttons vertically */
    position: absolute;
    top: 50%;  /* Position to be slightly lower than the center */
    left: 50%;  /* Center horizontally */
    transform: translateX(-50%);  /* Center horizontally */
    margin-top: 160px; /* Optional: Adjust margin to fine-tune vertical position */
}
        .button-container {
    display: flex;
    gap: 15px;
    justify-content: center;  /* Center buttons horizontally */
    align-items: center;  /* Center buttons vertically */
    position: absolute;
    top: 50%;  /* Position to the vertical center */
    left: 50%;  /* Position to the horizontal center */
    transform: translate(-50%, -50%);  /* Adjust for perfect centering */
    bottom: 50px;
}

        /* Button styling */
        .button {
            background: linear-gradient(135deg, #6b73ff, #000dff); /* Royal gradient */
            color: white;
            padding: 15px 30px;
            font-size: 12px;
            border-radius: 30px;
            border: none;
            cursor: pointer;
            transition: all 0.3s ease;
            box-shadow: 0 8px 15px rgba(0, 0, 0, 0.3); /* Elevated shadow */
            text-transform: uppercase;
        }

        /* Hover effects */
        .button:hover {
            background: linear-gradient(135deg, #ff6b6b, #ff0000); /* Red gradient on hover */
            transform: translateY(-3px); /* Slight lift on hover */
            box-shadow: 0 12px 20px rgba(0, 0, 0, 0.4);
        }
    </style>
</head>
<body>
    <div class="content">
        <h1>Cook's Dashboard</h1>
        <p>View and manage incoming food orders.</p>
    </div>

    <div class="button-container">
        <button class="button"><i class="fas fa-check-circle"></i> Proceed Order</button>
        <button class="button"><i class="fas fa-times-circle"></i> Can't Proceed</button>
        <button class="button"><i class="fas fa-clipboard-check"></i> Complete Order</button>
    </div>
</body>
</html>
