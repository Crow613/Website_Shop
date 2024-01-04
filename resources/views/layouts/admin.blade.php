<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin</title>
    @vite(['resources/scss/app.scss' ,'resources/js/app.js'])
</head>
<body>

<div class="row">

    <div class="col-md-3">
        @include('includes.admin.sidebar')

    </div>

    <div class="col-md-9 ">

        @yield('content')

    </div>

</div>

<footer>
    @include('includes.admin.footer')
</footer>

</body>
</html>
