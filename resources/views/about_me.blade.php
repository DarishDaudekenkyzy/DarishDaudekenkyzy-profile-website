<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About me</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/about_me.css') }}">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap" rel="stylesheet">
</head>
<body>
    <div id="main">
        <div id="header">
            <div id="header_inner">
                <div id="title">CV</div>
                <div class="header_tab"><a href="{{route('home')}}">Home</a></div>
                <div class="header_tab"><a href="{{route('about_me')}}">About me</a></div>
                <div class="header_tab"><a href="{{route('contact_me')}}">Contact me</a></div>
            </div>
        </div>
        <div id="content">
            <div id="about_me_text">
                <p>Hi, my name is Darish!<br><br>
                I am bachelor student at SDU.<br><br> 
                My interests consists of web development, and photographing and photo editing.<br><br><br>
                Here is some of my photos:</p>
            </div>
            
            <!-- Slideshow container -->
            <div class="slideshow-container">

            <!-- Full-width images with number and caption text -->
            <div class="mySlides fade">
            <div class="numbertext">1 / 6</div>
            <img src="{{ asset('images/slide_1.JPG') }}" style="width:100%">
            <div class="text">Caption Text</div>
            </div>

            <div class="mySlides fade">
            <div class="numbertext">2 / 6</div>
            <img src="{{ asset('images/slide_2.JPG') }}" style="width:100%">
            <div class="text">Caption Two</div>
            </div>

            <div class="mySlides fade">
            <div class="numbertext">3 / 6</div>
            <img src="{{ asset('images/slide_3.JPG') }}" style="width:100%">
            <div class="text">Caption Three</div>
            </div>

            <div class="mySlides fade">
            <div class="numbertext">4 / 6</div>
            <img src="{{ asset('images/slide_4.JPG') }}" style="width:100%">
            <div class="text">Caption Text</div>
            </div>

            <div class="mySlides fade">
            <div class="numbertext">5 / 6</div>
            <img src="{{ asset('images/slide_5.JPG') }}" style="width:100%">
            <div class="text">Caption Two</div>
            </div>

            <div class="mySlides fade">
            <div class="numbertext">6 / 6</div>
            <img src="{{ asset('images/slide_6.JPG') }}" style="width:100%">
            <div class="text">Caption Three</div>
            </div>

            <!-- Next and previous buttons -->
            <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
            <a class="next" onclick="plusSlides(1)">&#10095;</a>
            </div>
            <br>

            <!-- The dots/circles -->
            <div style="text-align:center">
            <span class="dot" onclick="currentSlide(1)"></span>
            <span class="dot" onclick="currentSlide(2)"></span>
            <span class="dot" onclick="currentSlide(3)"></span>
            <span class="dot" onclick="currentSlide(4)"></span>
            <span class="dot" onclick="currentSlide(5)"></span>
            <span class="dot" onclick="currentSlide(6)"></span>
            </div>

        </div>
    </div>
    <script>
        var slideIndex = 1;
        showSlides(slideIndex);

        // Next/previous controls
        function plusSlides(n) {
        showSlides(slideIndex += n);
        }

        // Thumbnail image controls
        function currentSlide(n) {
        showSlides(slideIndex = n);
        }

        function showSlides(n) {
        var i;
        var slides = document.getElementsByClassName("mySlides");
        var dots = document.getElementsByClassName("dot");
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