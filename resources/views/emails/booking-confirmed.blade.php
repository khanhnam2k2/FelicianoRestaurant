{{-- <h1>Booking Confirmed</h1>

<p>Dear {{ $reservation->name }},</p>


<p>Your booking at My Restaurant has been confirmed 🎉🎉</p>

<p>Booking details:</p>

<ul>
    <li>Booking ID: {{ $reservation->id }}</li>
    <li>Date: {{ $reservation->res_date }}</li>
    <li>Number of guests: {{ $reservation->guest_number }}</li>
</ul>
<p>Our address: 🏡 182 Lê Duẩn - Đại học Vinh - Nghệ An </p>
<p>Thank you for choosing Our Feliciano Restaurant ❤️❤️❤️</p> --}}
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Booking Confirmation</title>
    <style type="text/css">
        body {
            font-family: Arial, sans-serif;
            font-size: 16px;
            line-height: 1.4;
            color: #333333;
        }
        .container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
        }
        h1 {
            font-size: 24px;
            margin-top: 0;
        }
        table {
            border-collapse: collapse;
            width: 100%;
        }
        th, td {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Booking Confirmation</h1>
        <p>Dear {{ $reservation->name }},</p>
        <p>Your booking at My Restaurant has been confirmed 🎉🎉</p>
        <p>Booking details:</p>
        <table>
            <tbody>
                <tr>
                    <th>Name:</th>
                    <td>{{ $reservation->name }}</td>
                </tr>
                <tr>
                    <th>Phone:</th>
                    <td>{{ $reservation->tel_number }}</td>
                </tr>
                <tr>
                    <th>Quantity:</th>
                    <td>{{ $reservation->guest_number }}</td>
                </tr>
                <tr>
                    <th>Date and Time:</th>
                    <td>{{ $reservation->res_date }}</td>
                </tr>
            </tbody>
        </table>
        <p>Please come to our restaurant on {{$reservation->res_date}} for enthusiastic service😊😊</p>
        <p>Thank you for choosing our restaurant. We look forward to serving you❤️❤️❤️</p>
    </div>
</body>
</html>
