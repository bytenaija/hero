@extends('layouts.admin.master')    
@section('title')
    <title>Welcome to Hero</title>
@endsection
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
               
                font-family: 'Raleway';
                font-weight: 100;
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
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    <a href="{{ url('auth/login') }}">Login</a>
                    <a href="{{ url('contact') }}">Contact Us</a>
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    Hero
                </div>
                <div>
                    Hero is a distributed e-voucher distribution system that helps your organisation to connect vendors with beneficiaries without the need to move cash around. It is secured, it is safe and it is easy. Use Hero today. Call us on 09031866339 or email us at everistusolumese@gmail.com 
                </div>
                <div class="links">
                    <a href="https://localhost:8000/docs">Hero Documentation</a>
                    <a href="https://localhost:8000">Hero News</a>
                    <a href="https://github.com/bytenaija/hero/">Hero Github</a>
                    
                </div>
            </div>
        </div>
    </body>
</html>
