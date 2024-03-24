@extends('layouts.admin')

@section('content')
 <div class="fixed left-0 top-0 w-64 h-full rounded-lg  bg-gray-900 p-4 z-50 sidebar-menu transition-transform">
     @include('admin.includes.deshbord') 
</div>  
   
<div class="relative overflow-x-auto shadow-md sm:rounded-lg">


    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-16 py-3">
                   {{_( "Image")}}
                </th>
                <th scope="col" class="px-6 py-3">
                    {{ _("Product") }}
                </th>
                <th scope="col" class="px-6 py-3">
                    {{ _('Quantities') }}
                </th>
                <th scope="col" class="px-6 py-3">
                    {{ _("Price") }}
                </th>
                <th scope="col" class="px-6 py-3">
                    {{ _("Edit") }}
                </th>
                <th scope="col" class="px-6 py-3">
                    {{ _('Show') }}
                </th>
                <th scope="col" class="px-6 py-3">
                <a href="{{route('productCreate')}}">
                   create<svg class="w-8 h-8 text-green-300 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h14m-7 7V5"/>
                  </svg>
                 </a>
                </th>
            </tr>
        </thead>
        <tbody>

        @foreach($products as $product)

            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                <td class="p-4">
                    <img src="{{ Vite::asset('storage/app/public/img/product/'.$product->img)}}" class="w-16 md:w-32 max-w-full max-h-full" alt="Apple Watch">
                </td>
                <td class="px-6 py-4 font-semibold text-gray-900 dark:text-white">
                    {{ $product->name }}
                </td>
                <td class="px-6 py-4">
                    <div class="flex items-center">
                       
                        <div>
                            <p id="first_product" class="bg-gray-50 w-14 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block px-2.5 py-1 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" > {{ $product->quantities }}</p>
                        </div>
                      
                </td>
                <td class="px-6 py-4 font-semibold text-gray-900 dark:text-white">
                    ${{ $product->price }}
                </td>
                <td class="px-6 py-4"> 
                    <a href="{{route('adminProductEdit',$product->id)}}" class=" text-purple-500"><svg class="h-8 w-8 text-green-600"  fill="none" viewBox="0 0 24 24" stroke="currentColor">
                   <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"/>
                    </svg>
                     </a>
                </td>
                <td class="px-6 py-4">
                <a href="{{route('adminProductShow',$product->id)}}" class="text-emerald-500"><svg class="h-8 w-8 text-indigo-600"  width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">  <path stroke="none" d="M0 0h24v24H0z"/>  <circle cx="10" cy="10" r="7" />  <line x1="21" y1="21" x2="15" y2="15" /></svg></a>
                </td>
                <td class="px-6 py-4">
                        <form class="px-6 py-4" action="{{route('productDelete',$product->id)}}" method="post">
                            @csrf
                            @method('delete')
                            <button type="submit" class="text-red-600"><svg class="h-8 w-8 text-red-500"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round">  <polyline points="3 6 5 6 21 6" />  <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2" />  <line x1="10" y1="11" x2="10" y2="17" />  <line x1="14" y1="11" x2="14" y2="17" /></svg></button>
                        </form>
                </td>
            </tr>
           
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
    
 


@endsection

