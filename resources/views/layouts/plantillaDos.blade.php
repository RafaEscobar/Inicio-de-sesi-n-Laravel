<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>

    <style>
        html, body {
            background-color: #fff;
            font-weight: 200;
            height: 100vh;
            margin: 0
        }

        .content { text-align: center; }

        .title { font-size: 84px; }

        .links > a {
            color: #636b6f;
            padding: 0 25px;
            font-size: 13px;
            letter-spacing:  1rem;
            text-decoration: none;
            text-transform: uppercase;
        }
    </style>
</head>
<body>
    @yield('content')
</body>
</html>