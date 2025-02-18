<!DOCTYPE html>
<html>
<head>
    <title>New Tour Booking</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f9f9f9;
            padding: 20px;
        }
        .container {
            max-width: 800px;
            margin: 0 auto;
            background-color: #ffffff;
            padding: 20px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }
        h2 {
            color: #2c3e50;
        }
        .details {
            margin: 20px 0;
        }
        .details p {
            margin: 10px 0;
        }
        .footer {
            margin-top: 20px;
            font-size: 12px;
            color: #7f8c8d;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>New Tour Booking Received</h2>

        <div class="details">
            <p><strong>Tour Name:</strong> {{ $booking->tour_name }}</p>
            <p><strong>Name:</strong> {{ $booking->name }}</p>
            <p><strong>Email:</strong> {{ $booking->email }}</p>
            <p><strong>Phone:</strong> {{ $booking->phone }}</p>
            <p><strong>Contact Preference:</strong> {{ ucfirst($booking->preference) }}</p>
            @if ($booking->request)
                <p><strong>Additional Request:</strong> {{ $booking->request }}</p>
            @else
                <p><strong>Additional Request:</strong> None</p>
            @endif
        </div>

        <div class="footer">
            <p>This is an automated email. Please do not reply directly to this message.</p>
        </div>
    </div>
</body>
</html>
