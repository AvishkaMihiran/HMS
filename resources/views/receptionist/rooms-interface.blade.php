<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rooms - Imperial Crown</title>
    <link rel="stylesheet" href="{{ asset('css/rooms.css') }}">
</head>
<body>
    <div class="rooms-container">
        <header class="rooms-header">
            <h1>Rooms</h1>
        </header>
        <main class="rooms-main">
            <div class="section booking">
                <h2>Booking</h2>
                <p>Place new orders and view current orders.</p>
            </div>
            <div class="section details">
                <h2>Details</h2>
                <p>View detailed information about each room.</p>
            </div>
        </main>
    </div>
    <script>
        const roomBookingUrl = "{{ route('booking') }}";
        const roomDetailsUrl = "{{ route('receptionist.rooms-details-interface') }}"; // Add this line

        document.querySelectorAll('.section').forEach(section => {
            section.addEventListener('mouseenter', () => {
                section.classList.add('hovered');
            });

            section.addEventListener('mouseleave', () => {
                section.classList.remove('hovered');
            });

            section.addEventListener('click', () => {
                const sectionTitle = section.querySelector('h2').textContent;
                if (sectionTitle === 'Booking') {
                    window.location.href = roomBookingUrl;
                } else if (sectionTitle === 'Details') {
                    window.location.href = roomDetailsUrl; // Update to navigate to room details
                }
            });
        });
    </script>
    <script src="{{ asset('js/rooms.js') }}"></script>
</body>
</html>
