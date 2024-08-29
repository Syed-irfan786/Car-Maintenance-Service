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
    background: url({{ asset('images/img1.png') }}) center/cover no-repeat;
    justify-content: center;
    align-items: center;
    height: 100vh;
}

form {
    max-width: 400px;
    margin: 0 auto;
    background-color: #fff;
    padding: 6px;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    text-align: center; 
    margin-top : 10px;
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
    <h3 style="text-align: center; font-size:60px ;color: darkgoldenrod;">Update Your Booking</h3>
    <form action="/bookedupdate/{{ $item->id }}" method="POST">
    @csrf
    <input type="hidden" id="id" name="id" value="{{ $item->id }}" readonly>
   
    <label for="name">Your Name:</label>
    <input type="text" id="name" name="name" placeholder="Your Name" value = "{{ $item->name }}" required><br>
    
    <label for="email">Your Email:</label>
    <input type="text" id="email" name="email" placeholder="Your Email" value = "{{ $item->email }}" required><br>
    
    <label for="check_in">Check-in Date:</label>
    <input type="date" id="check_in" name="check_in" value = "{{ $item->check_in }}"  required><br>
    
    <label for="check_out">Check-out Date:</label>
    <input type="date" id="check_out" name="check_out"  value = "{{ $item->check_out }}" required><br>
    
    <label for="room_type">Room Type:</label>
    <select id="room_type" name="room_type" value = "{{ $item->room_type }}" required>
        <option value="" disabled>Select Room Type</option>
        <option value="single" >Single Room</option>
        <option value="double" >Double Room</option>
        <option value="suite" >Suite</option>
    </select><br>
    
    <label for="message">Additional Message:</label>
    <textarea id="message" name="message" rows="4" placeholder="Additional Message">{{ $item->message }}</textarea><br>
    
    <button type="submit">Update</button>
</form>


<br>
    <form action="/booked1" method="POST">
        @csrf <!-- Laravel CSRF token -->
        <input type="hidden" name="id" id="id" value="{{ session('id') }}" readonly>
        <button type="submit">Show My Bookings</button>
    </form>
   
</body>
</html>
