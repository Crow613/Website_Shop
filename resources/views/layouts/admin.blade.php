
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    @vite(['resources/scss/app.scss', 'resources/js/app.js'])
</head>
<body>

<div class="container">
    <div class="row">
        @yield('content')
    </div>
</div>
</body>
</html>
