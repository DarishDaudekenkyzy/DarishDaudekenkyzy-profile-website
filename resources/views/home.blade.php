<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/home.css') }}">
</head>
<body>
    <div id="main">
        <div id="rectangle">
            <div id="header">
                <div id="header_inner">
                    <div class="header_tab"><a href="{{route('home')}}">Home</a></div>
                    <div class="header_tab"><a href="{{route('about_me')}}">About me</a></div>
                    <div class="header_tab"><a href="{{route('contact_me')}}">Contact me</a></div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>