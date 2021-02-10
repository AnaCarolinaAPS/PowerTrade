<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name', 'PowerTrade') }}</title>

        <link rel="shortcut icon" href="{{ asset('img/favicon.png') }}">
        <link href="{{ asset('css/style.css') }}" rel="stylesheet">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
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

            .subtitle {
                margin-top: 15px;
                font-size: 20px;
            }

            .links > a {
                color: #00073a;
                padding: 0 20px;
                font-size: 40px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            <div class="content">
                <img src="img/logo.png" class="img-responsive" style="max-width: 40%;">
                <div class="subtitle m-b-md">
                    Dentro de poco vamos a estrenar nuestro nuevo site, mientras eso, siganos en las redes sociales para más novedades.
                </div>
                <div class="links">
                    <a href="https://www.facebook.com/PowerTradePY" target="_blank"><i class="fa fa-facebook"></i></a>
                    <a href="https://www.instagram.com/powertradepy/" target="_blank"><i class="fa fa-instagram"></i></a>
                    <a href="https://wa.me/595973170418" target="_blank"><i class="fa fa-whatsapp"></i></a>
                    <a href="mailto:powertrade.cde@gmail.com" target="_blank"><i class="fa fa-envelope-o"></i></a>
                </div>
            </div>
        </div>
    </body>
</html>
