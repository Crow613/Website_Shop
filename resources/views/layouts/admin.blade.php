<!doctype html>
<html lang="">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{__("Admin")}}</title>

    @vite(['resources/css/app.css','resources/assets/js/app.js'])
   
</head>
<body>

    <div class="flex justify-center border-gray-200 border-dashed rounded-lg dark:border-gray-600">
      
         @yield('content')
           
    </div> 
    
</body>
</html>
