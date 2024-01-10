<!doctype html>
<html lang="">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{__("Admin")}}</title>

    @vite(['resources/css/app.css','resources/assets/js/script.js'])
    <link
        href="https://cdn.jsdelivr.net/npm/remixicon@4.0.0/fonts/remixicon.css"
        rel="stylesheet"
    />
</head>
<body class="text-gray-800 font-inter">
<main class="w-full md:w-[calc(100%-256px)] md:ml-64  min-h-screen transition-all main bg-slate-400">

     @include('includes.admin.topbar')
   
    @include('includes.admin.deshbord')
  
     
      @yield('content')
      
      <div class="fixed top-0 left-0 w-full h-full bg-black/50 z-40 md:hidden sidebar-overlay"><div>  
</main>


<script defer src='https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js'></script>
</body>
</html>
