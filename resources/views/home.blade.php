<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/home.css') }}">
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
            <img id="my_img" src="{{ asset('images/image.png') }}">
            <div id="content">
                <div id="name_div">
                    <div id="hr"></div>
                    <p id="name">DARISH DAUDEKENKYZY</p>
                    <p>WEB DEVELOPER / PHOTOGRAPHER</p>
                </div>
            </div>
    </div>
</body>
</html>