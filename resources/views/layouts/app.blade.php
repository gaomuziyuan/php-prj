<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css'])
    <title>Laravel Blog</title>
</head>
<body>
<header>
</header>

<main>
    @yield('content')
</main>

<footer>
</footer>

@vite(['resources/js/app.js'])
</body>
</html>
