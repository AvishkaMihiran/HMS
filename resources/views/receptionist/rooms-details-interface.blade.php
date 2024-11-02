<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Room Details - Imperial Crown</title>
    <link rel="stylesheet" href="{{ asset('css/rooms-details.css') }}">
</head>
<body>
    <div class="rooms-details-container">
        <header class="rooms-details-header">
            <h1>Room Details</h1>
        </header>
        <main class="rooms-details-main">
            <table>
                <thead>
                    <tr>
                        <th>Room Id</th>
                        <th>Room Title</th>
                        <th>Description</th>
                        <th>price</th>
                        <th>Wifi</th>
                        <th>Room Type</th>
                        <th>Image</th>
                        <th>Created At</th>
                        <th>Status</th>
                        <th>Updated At</th>
                        <!--<th>Action</th>-->
                        <!-- Add other columns as needed -->
                    </tr>
                </thead>
                <tbody>
                    @foreach($rooms as $room)
                        <tr>
                            <td>{{ $room->id }}</td>
                            <td>{{ $room->room_title }}</td>
                            <td>{{ $room->description }}</td>
                            <td>{{ $room->price }}</td>
                            <td>{{ $room->wifi }}</td>
                            <td>{{ $room->room_type }}</td>
                            <td>{{ $room->image }}</td>
                            <td>{{ $room->created_at }}</td>
                            <td>{{ $room->status }}</td>
                            <td>{{ $room->updated_at }}</td>
                            <!-- Add other fields as needed -->
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </main>
    </div>
</body>
</html>
