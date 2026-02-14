<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
        }

        header {
            background: #222;
            color: white;
            padding: 15px;
            text-align: center;
        }

        nav {
            background: #444;
            padding: 10px;
            text-align: center;
        }

        nav a {
            color: white;
            margin: 0 10px;
            text-decoration: none;
        }

        .container {
            padding: 20px;
            background: white;
            margin: 20px auto;
            width: 80%;
            border-radius: 8px;
        }

        footer {
            text-align: center;
            padding: 10px;
            background: #eee;
        }
    </style>
</head>

<body>

    <header>
        <h1>Laravel Assignment 3</h1>
    </header>

    <nav>
        <a href="{{ url('/') }}">Home</a>
        <a href="{{ route('index') }}">Index Page</a>
    </nav>

    <div class="container">
        @yield('content')
    </div>

    <footer>
        © {{ date('Y') }} Alem Kaken
    </footer>

</body>

</html>