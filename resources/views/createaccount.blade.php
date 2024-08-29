<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Hotel Booking</title>
    <style>
       body {
    font-family: 'Figtree', sans-serif;
    margin: 0;
    padding: 0;
    background: url('{{ asset('Images/img1.png') }}') center/cover no-repeat;
    background-size: cover;
    background-position: center;
    color: #fff;
}

header {
    background-color: rgba(0, 0, 0, 0.5);
    padding: 1rem;
    text-align: center;
}

nav ul {
    list-style: none;
    padding: 0;
    margin: 0;
}

nav ul li {
    display: inline;
    margin-right: 1rem;
}

nav ul li a {
    text-decoration: none;
    color: #fff;
}

main {
    padding: 2rem;
    text-align: center;
}

section {
    margin-bottom: 2rem;
}

h1, h2, h3, h4, h5, h6 {
    margin-top: 0;
}

/* Hero Section */
.hero {
    padding: 4rem 0;
    background-color: rgba(0, 0, 0, 0.5);
    border-radius: 0.5rem;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}

.hero h1 {
    font-size: 2.5rem;
    margin-bottom: 1rem;
}

.hero p {
    font-size: 1.25rem;
    margin-bottom: 2rem;
}

.btn {
    display: inline-block;
    padding: 0.75rem 1.5rem;
    background-color: #1e4c78;
    color: #fff;
    text-decoration: none;
    border-radius: 0.25rem;
    transition: background-color 0.3s ease;
}

.btn:hover {
    background-color: #153e63;
}

/* Search Section */
.search h2 {
    font-size: 1.5rem;
    margin-bottom: 1rem;
}

/* Form Section */
.booking-form {
    background-color: rgba(0, 0, 0, 0.5);
    padding: 2rem;
    border-radius: 0.5rem;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    text-align: center;
    margin: 0 auto;
    max-width: 600px;
    margin-bottom:20px;
}

.booking-form input,
.booking-form select,
.booking-form textarea {
    width: 100%;
    padding: 0.75rem;
    margin-bottom: 1rem;
    border: none;
    border-radius: 0.25rem;
    background-color: #fff;
    box-sizing: border-box;
}

.booking-form select {
    appearance: none;
    -webkit-appearance: none;
    -moz-appearance: none;
    background-image: url();
    background-repeat: no-repeat;
    background-position: right 0.5rem top 50%;
    background-size: 1.5em auto;
    padding-right: 3rem;
}

/* Footer Section */
footer {
    background-color: rgba(0, 0, 0, 0.5);
    color: #fff;
    padding: 1rem;
    text-align: center;
    position: fixed;
    bottom: 0;
    left: 0;
    width: 100%;
}

footer ul {
    list-style: none;
    padding: 0;
    margin: 0;
}

footer ul li {
    display: inline;
    margin-right: 1rem;
}

footer ul li a {
    text-decoration: none;
    color: #fff;
}

    </style>
</head>
<body>

<header>
    <!-- Navigation Links -->
    <nav>
        <ul>
            <li><a href="#search">HOME</a></li>
            <li><a href="#featured-hotels">GALLERY</a></li>
            <li><a href="#testimonials">ABOUT US</a></li>
        </ul>
    </nav>
</header>

<main>
    <section class="hero">
        <!-- Hero content -->
        <h1>Register And Booked Now!</h1>
    </section>

    <section id="search" class="booking-form">
        <!-- Booking Form -->
       
        <form action="/register" method="post">
        @csrf <!-- Laravel CSRF token -->

        <label for="first_name">First Name:</label>
        <input type="text" id="first_name" name="first_name" required>

        <label for="last_name">Last Name:</label>
        <input type="text" id="last_name" name="last_name" required>

        <label for="age">Age:</label>
        <input type="number" id="age" name="age" required>

        <label for="gender">Gender:</label>
        <select id="gender" name="gender" required>
            <option value="male">Male</option>
            <option value="female">Female</option>
            
        </select>

        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>

        <button type="submit" onclick=showPopup() style="cursor:pointer">Register</button>
    </form>
    <div id="popup" style="display: none; position: fixed; top: 50%; left: 50%; transform: translate(-50%, -50%); background-color: white; padding: 20px; border: 1px solid black; border-radius: 5px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);">
        <p>Thank you for registering!</p>
        <button onclick="hidePopup()">Close</button>
    </div>
    </section>
</main>
<script>
        // Function to show the popup
        function showPopup() {
            var popup = document.getElementById("popup");
            popup.style.display = "block";
        }

     
    </script>

<footer>
    
    
    <ul>
        <li><a href="#">Privacy Policy</a></li>
        <li><a href="#">Terms of Service</a></li>
        <li><a href="#">About Us</a></li>
      
    </ul>
    </footer>
    
</body>
