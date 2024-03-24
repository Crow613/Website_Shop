@extends('layouts.admin')

@section('content')

<nav class="fixed top-0 z-50 w-full bg-white border-b border-gray-200 dark:bg-gray-800 dark:border-gray-700">
  <div class="px-3 py-3 lg:px-5 lg:pl-3">
    <div class="flex items-center justify-between">
      <div class="flex items-center justify-start rtl:justify-end">
        <button data-drawer-target="logo-sidebar" data-drawer-toggle="logo-sidebar" aria-controls="logo-sidebar" type="button" class="inline-flex items-center p-2 text-sm text-gray-500 rounded-lg sm:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600">
            <span class="sr-only">Open sidebar</span>
            <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
               <path clip-rule="evenodd" fill-rule="evenodd" d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z"></path>
            </svg>
         </button>
        <a href="#" class="flex ms-2 md:me-24">
        <img class="w-8 h-8 rounded-full" src="{{Vite::asset('/storage/app/public/img/user/'.auth()->user()->img)}}" alt="user photo">
          <span class="self-center text-xl font-semibold sm:text-2xl whitespace-nowrap dark:text-white">Message:{{ auth()->user()->name }}</span>
        </a>
      </div>
      <div class="flex items-center">
          <div class="flex items-center ms-3">
          <div>
            <a href="{{route('adminHome')}}" id="dropdownActionButton" data-dropdown-toggle="dropdownAction" class="inline-flex items-center text-gray-500 bg-white border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-100 font-medium rounded-lg text-sm px-3 py-1.5 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700" type="button">
                <-Back
             </a>
          
        </div>
            
          </div>
        </div>
    </div>
  </div>
</nav>

<aside id="logo-sidebar" class="fixed top-0 left-0 z-40 w-64 h-screen pt-20 transition-transform -translate-x-full bg-white border-r border-gray-200 sm:translate-x-0 dark:bg-gray-800 dark:border-gray-700" aria-label="Sidebar">
   <div class="h-full px-3 pb-4 overflow-y-auto bg-white dark:bg-gray-800">
      <ul class="space-y-2 font-medium">
         <li>
            <a href="#" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
            <img class="w-8 h-8 rounded-full" src="{{Vite::asset('/storage/app/public/img/user/'.auth()->user()->img)}}" alt="user photo">
          <span class="self-center text-xl font-semibold sm:text-2xl whitespace-nowrap dark:text-white">{{ auth()->user()->name }}</span>
            </a>
         </li>
         <li>
            <a href="#" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
            <img class="w-8 h-8 rounded-full" src="{{Vite::asset('/storage/app/public/img/user/'.auth()->user()->img)}}" alt="user photo">
          <span class="self-center text-xl font-semibold sm:text-2xl whitespace-nowrap dark:text-white">{{ auth()->user()->name }}</span>
            </a>
         </li>

        
      </ul>
      
   </div>
</aside>
<div class="p-15 md:p-4">
            <div class="w-full px-6 pb-8 mt-10 sm:max-w-xl sm:rounded-lg">
                

                <div class="grid max-w-2xl mx-auto mt-8">
                    <div class="flex flex-col items-center space-y-5 sm:flex-row sm:space-y-0">

                <input type="text" >
                <button type="submit">
                  send
                </button>
                    
            </div>
        </div>
                      
     </div>

    </div>
          
          
</div>

@endsection