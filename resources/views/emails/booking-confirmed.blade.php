<h1>Booking Confirmed</h1>

<p>Dear {{ $reservation->name }},</p>


<p>Your booking at My Restaurant has been confirmed 🎉🎉</p>

<p>Booking details:</p>

<ul>
    <li>Booking ID: {{ $reservation->id }}</li>
    <li>Date: {{ $reservation->res_date }}</li>
    <li>Number of guests: {{ $reservation->guest_number }}</li>
    <li>Our address: 🏡 182 Lê Duẩn - Đại học Vinh - Nghệ An </li>
</ul>

<p>Thank you for choosing Our Feliciano Restaurant ❤️❤️❤️</p>