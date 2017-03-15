<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Welcome</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-image: url('');
                background-repeat: no-repeat;
                background-attachment: fixed;
                background-size: cover;
            }

            .full-height {
                height: 150px;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }


        </style>

        <link rel="stylesheet" href="{{ url('/assets/css/bootstrap.css') }}">
        <link rel="stylesheet" href="{{ url('/assets/css/style.css') }}">

    </head>
    <body>
    
        <div class="flex-center position-ref full-height">    
            @if (Route::has('login'))
                <div class="top-right links">
                    @if (Auth::check())
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ url('/login') }}">Login</a>
                        <a href="{{ url('/register') }}">Register</a>
                    @endif
                </div>
            @endif

                <img src="{{ url('/assets/img/lvcc_logo.png') }}" style="position: absolute;left: 350px;top: 30px;width=:125px;height:125px">
                <h1 style="font-family: Tolkien; text-transform: uppercase; font-weight: bold; margin-left: 100px;padding:.1em; top:0%; font-size: 26px; color: #000000; text-shadow: 1px 3px 6px #FFFFFF;">La Verdad Christian College</h1>
        </div>
                <p style="top: 100px; left: 625px; position: absolute;">Mc Arthur Highway,Sampaloc Apalit, Pampanga </p>
                <img src="{{ url('/assets/img/LVCC.jpg') }}" style="top: 200px;left: 250px;position: absolute;">
                <p style=" font-style: italic; font-size: 18px; font-weight: bold; left: 550px; top: 700px;position: absolute;">"Wisdom based on the truth is priceless."</p>

                <p style= "font-weight: bold;font-size: 18px; left: 400px; top: 750px;position: absolute;">Vission:</p>
                <p style=" font-size: 18px; left: 475px; top: 750px;position: absolute;"> An institution that ensures quality learning and biblical moral standards. </p>

                <p style= "font-weight: bold;font-size: 18px; left: 400px; top: 800px;position: absolute;">Mission:</p>
                <p style=" font-size: 18px; left: 475px; top: 800px;position: absolute;"> To be the frontrunners of providing academic excellence and morally upright princiles. </p>

                <p style=" font-size: 18px; left: 400px; top: 850px;position: absolute;"> This site is Online Grading System for La Verdarian student who wants to know their grades in <br> their different subjects depending on their grade level. </p>

                <p <p style=" font-weight: bold; font-size: 18px; left: 400px; top: 950px;position: absolute;">Note:</p>
                <p <p style=" font-size: 18px; left: 450px; top: 950px;position: absolute;">But for now this is only for Associate in Computer Technology 2 students <br>to pass the requirements of our subject Web Application Development 2.</p>

    </body>
</html>