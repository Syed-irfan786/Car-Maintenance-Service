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
            background: url('{{ asset('Images/image.png') }}') no-repeat center center fixed;
            /* background-size: cover; */
            background-position: center;
            background-size: 100% auto;
            color: #fff;
            justify-content: center;
    align-items: center;
    height: 100vh;

            
   
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
       
        .search h2 {
            font-size: 1.5rem;
            margin-bottom: 1rem;
        }
        
        .featured-hotels h2 {
            font-size: 1.5rem;
            margin-bottom: 1rem;
        }
       
        .testimonials h2 {
            font-size: 1.5rem;
            margin-bottom: 1rem;
        }
        
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
         
    .mySlides img {
        border-radius: 10px; 
    }
    
    
    .mySlides img {
    width: 50%; 
    height: 400px; 
    border-radius: 10px; 
}
    </style>
</head>
<body>

<header>
    
    <nav>
        <ul>
            
            <li><a href="#featured-hotels">GALLERY</a></li>
            <li><a href="#testimonials">ABOUT US</a></li>
          
        </ul>
    </nav>
</header>

<main>
    <section class="hero">
        <!-- Hero content -->
        <h1>Welcome to our Hotel Booking Platform</h1>
        <p>Book Your Room & stay now!</p>
        <a onclick="window.location='/login'" class="btn" style="cursor: pointer">Book Now</a>
    </section>
    <div class="slideshow-container">

    <div class="mySlides fade">
        <div class="numbertext"></div>
        <img src="{{ asset('images/hotelimg.jpeg') }}" alt="Image 1">
        <div class="text"></div>
    </div>

    <div class="mySlides fade">
        <div class="numbertext"></div>
        <img src="{{ asset('images/hotelimg.jpeg') }}" alt="Image 3">
        <div class="text"></div>
    </div>
    <div class="mySlides fade">
        <div class="numbertext"></div>
        <img src="{{ asset('images/image2.png') }}" alt="Image 4">
        <div class="text"></div>
    </div>

   
    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
    <a class="next" onclick="plusSlides(1)">&#10095;</a>
</div>
<br>


<div style="text-align:center">
    <span class="dot" onclick="currentSlide(1)"></span>
    <span class="dot" onclick="currentSlide(2)"></span>
    <span class="dot" onclick="currentSlide(3)"></span>
</div>


</main>



<footer>
   
   
    <ul>
        <li><a href="#">Privacy Policy</a></li>
        <li><a href="#">Terms of Service</a></li>
        <li><a href="#">About Us</a></li>
        
    </ul>
</footer>



<script>
    let slideIndex = 0; 

    
    function plusSlides(n) {
        showSlides(slideIndex += n);
    }

   
    function currentSlide(n) {
        showSlides(slideIndex = n);
    }

    
    function showSlides(n) {
        let i;
        let slides = document.getElementsByClassName("mySlides");
        let dots = document.getElementsByClassName("dot");

        if (n >= slides.length) { slideIndex = 0 } 
        if (n < 0) { slideIndex = slides.length - 1 } 

      
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }

        
        for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active", "");
        }

      
        slides[slideIndex].style.display = "block";
        
        dots[slideIndex].className += " active";
    }

    
    setInterval(function() {
        plusSlides(1);
    }, 2000);
</script>


</body>
</html>
