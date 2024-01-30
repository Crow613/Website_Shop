<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Online Shop</title>

    @vite(['resources/css/app.css'])

</head>
<body class=" bg-purple-400 ">

   @include('site.includes.topbar')

    <div class=" flex flex-1 items-center justify-center sm:items-stretch sm:justify-start text-4xl ">
        @yield('content')
    </div>

</body>
</html>
