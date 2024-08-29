<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Appointment</title>

    <style>
        body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background: url({{ asset('images/img1.png') }}) center/cover;
    justify-content: center;
    align-items: center;
    height: 150vh;
}

form {
    max-width: 400px;
    margin: 0 auto;
    background-color: #fff;
    padding: 6px;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    text-align: center; 
    margin-top : 1px;
}

label {
    display: block;
    margin-bottom: 10px;
}

select, input, textarea {
    width: 100%;
    padding: 10px;
    margin-bottom: 20px;
    box-sizing: border-box;
    border: 1px solid #ccc;
    border-radius: 4px;
}

button {
    background-color: #333;
    color: #fff;
    padding: 10px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

button:hover {
    background-color: #555;
}


        
    </style>
</head>
<body>
    <h3 style="text-align: center; font-size:60px ;color: darkgoldenrod;">Book Your Room And Stay Now!</h3>
    <form action="/booked" method="POST">
    @csrf
    <input type="hidden" id="customer_id" name="customer_id" value="{{ session('id') }}" readonly>
    <label for="name">Your Name:</label>
    <input type="text" id="name" name="name" placeholder="Your Name" required><br>
    
    <label for="email">Your Email:</label>
    <input type="text" id="email" name="email" placeholder="Your Email" required><br>
    
    <label for="check_in">Check-in Date:</label>
    <input type="date" id="check_in" name="check_in" required><br>
    
    <label for="check_out">Check-out Date:</label>
    <input type="date" id="check_out" name="check_out" required><br>
    
    <label for="room_type">Room Type:</label>
    <select id="room_type" name="room_type" required>
        <option value="" disabled selected>Select Room Type</option>
        <option value="single">Single Room</option>
        <option value="double">Double Room</option>
        <option value="suite">Suite</option>
    </select><br>
    
    <label for="message">Additional Message:</label>
    <textarea id="message" name="message" rows="4" placeholder="Additional Message"></textarea><br>
    
    <button type="submit">Book Now</button>
</form>

<br>
    <form action="/booked1" method="POST">
        @csrf <!-- Laravel CSRF token -->
        <input type="hidden" name="customer_id" id="customer_id" value="{{ session('id') }}" readonly>
        <button type="submit">Show My Bookings</button>
    </form>
   
</body>
</html>
