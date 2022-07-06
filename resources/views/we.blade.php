<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>We</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

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

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            h2 {
                color: white;
                text-shadow: 1px 1px 3px black;
            }

            p {
                font-size: 18px;
                font-weight: 600;
                margin: 40px 80px;
                background: -webkit-linear-gradient(45deg, blue, red);
                -webkit-background-clip: text;
                -webkit-text-fill-color: transparent;
            }

            a {
                margin: 10px;
                border: 1px solid grey;
                padding: 6px 12px;
                border-radius: 8px;
                text-decoration: none;
                color: black;
                font-size: 18px;
                font-weight: 600;
            }

            a:hover {
                background: -webkit-linear-gradient(45deg, blue, red);
                color: white;
            }

        </style>
    </head>

    <body>
        <div class="flex-center position-ref full-height">

            <div class="content">

                <h1 class="title m-b-md">
                    We!
                </h1>

                <a href="{{ url('/page2') }}">
                    Page 2
                </a>

                <a href="{{ url('/random-pics') }}">
                    Random pics
                </a>

                <p>
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Cum sint porro incidunt nemo, debitis necessitatibus adipisci aliquid veniam laboriosam nulla quos quae, error iure asperiores provident rerum voluptas accusantium pariatur!
                </p>
                
            </div>
            
        </div>
    </body>
</html>
