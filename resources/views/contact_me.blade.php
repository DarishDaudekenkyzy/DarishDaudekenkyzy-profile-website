<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact me</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/contact_me.css') }}">
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
            <div id="my_contacts_div">
                <p id="my_contacts_p">My Contacts:</p>
                <p id="contacts">
                    Phone number: <br>
                    419-777-6570<br>
                    928-589-7611<br><br>
                    E-mail: <br>
                    190103317@stu.sdu.edu.kz<br><br>
                    Instagram: <br>
                    @davknva
                </p>
            </div>
        </div>
    </div>
</body>
</html>