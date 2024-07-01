<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bookstore</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
            background: url('/img/wal1.jpeg') no-repeat center center fixed; /* Update path if needed */
            background-size: cover;
            color: white;
        }

        .navbar {
            width: 100%;
            display: flex;
            justify-content: space-between;
            align-items: center;
            background-color: rgba(0, 0, 0, 0.5); /* Fully transparent black */
            padding: 10px 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            position: fixed;
            top: 0;
            z-index: 1000;
        }

        .logo {
            display: flex;
            align-items: center;
        }

        .logo img {
            height: 60px; /* Adjust the height as needed */
            margin-right: 10px; /* Adjust the margin as needed */
        }

        .navbar .logo, .navbar .profile, .navbar .logout {
            color: #fff;
            font-size: 24px;
            font-weight: bold;
        }

        .header {
            width: 100%;
            overflow: hidden;
            position: relative;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            margin-top: 60px; /* Adjusted to accommodate navbar */
            background-color: rgba(0, 0, 0, 0.3); /* Fully transparent black */
            padding-top: 20px;
            padding-bottom: 20px;
        }

        .search-bar-container {
            display: flex;
            justify-content: center;
            padding: 20px 0;
        }

        .search-bar {
            width: 60%;
            max-width: 600px;
            display: flex;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .search-bar input[type="text"] {
            width: 100%;
            padding: 10px;
            border: none;
            font-size: 16px;
            border-radius: 8px 0 0 8px;
        }

        .search-bar input[type="text"]:focus {
            outline: none;
        }

        .search-bar button {
            padding: 10px;
            background-color: #3D52A0;
            color: white;
            border: none;
            cursor: pointer;
            font-size: 16px;
            border-radius: 0 8px 8px 0;
        }

        .search-bar button:hover {
            background-color: #2F4F4F;
        }

        .slideshow-container {
            width: 80%; /* Adjusted width */
            max-width: 1200px; /* Max width */
            position: relative;
            max-height: 600px; /* Increased height */
            margin: auto; /* Center the container */
            background-color: rgba(0, 0, 0, 0); /* Fully transparent */
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .slide {
            display: none;
            background-size: cover;
            background-position: center;
            height: 600px; /* Increased height */
        }

        .slide1 {
            background-image: url('/img/slide1.jpg'); /* Update path if needed */
        }

        .slide2 {
            background-image: url('/img/slide2.jpg'); /* Update path if needed */
        }

        .slide3 {
            background-image: url('/img/slide3.jpg'); /* Update path if needed */
        }

        .prev, .next {
            cursor: pointer;
            position: absolute;
            top: 50%;
            width: auto;
            padding: 16px;
            margin-top: -22px;
            color: white;
            font-weight: bold;
            font-size: 18px;
            transition: 0.6s ease;
            border-radius: 0 3px 3px 0;
            user-select: none;
        }

        .next {
            right: 0;
            border-radius: 3px 0 0 3px;
        }

        .prev:hover, .next:hover {
            background-color: rgba(0,0,0,0.8);
        }

        .dot-container {
            text-align: center;
            padding: 20px;
            background: transparent; /* Set to transparent */
        }

        .dot {
            cursor: pointer;
            height: 15px;
            width: 15px;
            margin: 0 2px;
            background-color: #bbb;
            border-radius: 50%;
            display: inline-block;
            transition: background-color 0.6s ease;
        }

        .active, .dot:hover {
            background-color: #717171;
        }

        .container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            padding: 5px;
            gap: 20px;
            margin-top: 20px;
        }

        .category-box {
            background-color: rgba(0, 0, 0, 0.3); /* Fully transparent black */
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 45%; /* Adjusted width for two boxes in a row */
            height: 300px; /* Adjusted height */
            padding: 20px;
            text-align: center;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            position: relative;
            overflow: hidden;
        }

        .category-box:hover {
            transform: scale(1.05);
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
        }

        .category-icon {
            font-size: 48px;
            color: #007BFF;
            margin-bottom: 10px;
        }

        .category-title {
            font-size: 18px;
            font-weight: bold;
            margin-bottom: 10px;
            text-align: center; /* Center align the title */
        }

        .category-description {
            color: #fff;
        }

        @media (max-width: 768px) {
            .category-box {
                width: 90%;
            }
        }
    </style>
</head>
<body>

<div class="navbar">
    <div class="logo">
        <img src="/img/Literary Luxe_transparent.png" alt="Logo" class="logo-img">
        <div class="profile"><i class="fas fa-user"></i></div>
    </div>
    <div class="logout"><i class="fas fa-sign-out-alt"></i></div>
</div>

<div class="header">
        <form action="/searchAction" method="post">
            @csrf

    <div class="search-bar-container">
        
        <div class="search-bar">
            <input type="text" placeholder="Search for books..." name="search">
            <button type="submit"><i class="fas fa-search"></i></button>
        </div>
    
    </div>    
        </form>


    <div class="slideshow-container">
        <div class="slide slide1"></div>
        <div class="slide slide2"></div>
        <div class="slide slide3"></div>

        <a class="prev" onclick="changeSlide(-1)">&#10094;</a>
        <a class="next" onclick="changeSlide(1)">&#10095;</a>
    </div>
    <div class="dot-container">
        <span class="dot" onclick="currentSlide(1)"></span>
        <span class="dot" onclick="currentSlide(2)"></span>
        <span class="dot" onclick="currentSlide(3)"></span>
    </div>
</div>

<div class="container">
    <div class="category-box">
        <img src="/img/comic.jpg" alt="Non-Fiction Image">
        <div class="category-title"><a href="/comic">Comics</a></div>
        <div class="category-description">"Unleash the Extraordinary!"</div>
    </div>
    <div class="category-box">
        <img src="/img/horror.jpg" alt="Novel Image">
        <div class="category-title"><a href="horror">Horror</a></div>
        <div class="category-description">"Dare to Enter the Darkness!"</div>
    </div>
    <div class="category-box">
        <img src="/img/love.jpg" alt="Romance Image">
        <div class="category-title"><a href="/romance">Romance</a></div>
        <div class="category-description">"Where Hearts Find Their Way!"</div>
    </div>
    <div class="category-box">
        <img src="/img/mystry.jpg" alt="Mystery Image">
        <div class="category-title"><a href="/mystry">Mystery</a></div>
        <div class="category-description">"Where Every Page is a Puzzle!"</div>
    </div>
</div>

<script>
    let slideIndex = 1;
    showSlides(slideIndex);

    function changeSlide(n) {
        showSlides(slideIndex += n);
    }

    function currentSlide(n) {
        showSlides(slideIndex = n);
    }

    function showSlides(n) {
        let i;
        let slides = document.getElementsByClassName("slide");
        let dots = document.getElementsByClassName("dot");
        if (n > slides.length) {slideIndex = 1}
        if (n < 1) {slideIndex = slides.length}
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }
        for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active", "");
        }
        slides[slideIndex-1].style.display = "block";
        dots[slideIndex-1].className += " active";
    }
</script>

</body>
</html>
