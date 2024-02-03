<!doctype html>
<html lang="">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{__("Admin")}}</title>

    @vite(['resources/css/app.css','resources/assets/js/script.js'])
   
</head>
<body
class="bg-slate-600">

<div class="flex justify-center ">

    <div class="m-1 p-4 border-gray-200 border-dashed rounded-lg dark:border-gray-700">
      
         @yield('content')
           
    </div> 
    
 </div>

</body>
</html>
