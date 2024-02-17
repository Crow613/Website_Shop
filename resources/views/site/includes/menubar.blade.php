
  

<nav class="bg-white border-gray-200 dark:bg-gray-900">
  <div class="flex items-center md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse">
      <button type="button" class="flex text-sm bg-gray-800 rounded-full md:me-0 focus:ring-4 focus:ring-gray-300 dark:focus:ring-gray-600" id="user-menu-button" aria-expanded="false" data-dropdown-toggle="user-dropdown" data-dropdown-placement="bottom">
        <span class="sr-only">Open user menu</span>
        <img class="w-8 h-8 rounded-full" src="{{ Vite::asset('/storage/app/public/img/user/'.auth()->user()->img) }}" alt="user photo">
      </button>
      
  </div>
  
  
</nav>
