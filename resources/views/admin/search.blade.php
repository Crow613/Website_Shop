@extends('layouts.admin')

@section('content')

@include('includes.admin.topbar')
@include('includes.admin.sidebar')
    
    <div class="relative overflow-x-auto bg-slate-400">
    <div class="   right-full">
              <!-- Previous Button -->
        <a href="{{ route('products.create') }}" class="flex items-center justify-center px-3 h-8 text-sm font-medium  bg-white border border-gray-700 rounded-lg hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700  dark:hover:bg-gray-700 ">
           <svg class="h-8 w-8 text-pink-500"  width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">  <path stroke="none" d="M0 0h24v24H0z"/>  <line x1="12" y1="5" x2="12" y2="19" />  <line x1="5" y1="12" x2="19" y2="12" /></svg>
        </a>
    </div>
    
    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
        <thead class="w-full h-full text-gray-700  bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
        
             <tr>
                <th scope="col" class="px-6 py-3">
                    ID
                </th>
                <th scope="col" class="px-6 py-3">
                    NAME
                </th>
                <th scope="col" class="px-6 py-3">
                    PRICE
              </th>
            </tr> 
        </thead>
  
        <tbody>
                  
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                
                <th scope="row" class="text-3xl px-6 py-4 font-medium whitespace-nowrap text-red-600">
                    {{ $products['id'] }}
                </th>
                <td class="px-6 py-4 text-4xl">
                <a href="{{ route('products.show', $products['id']) }}" class="text-emerald-500"  >{{ $products['name']}}</a> 
               </td>
                <td class="px-6 py-4 text-3xl">
                    {{ $products['price']}}.{{ __("$") }}
                </td>
                <td class="px-6 py-4"><a href="{{ route('products.show', $products['id']) }}" class="text-emerald-500"  ><svg class="h-8 w-8 text-indigo-600"  width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">  <path stroke="none" d="M0 0h24v24H0z"/>  <circle cx="10" cy="10" r="7" />  <line x1="21" y1="21" x2="15" y2="15" /></svg></a></td>
                <td class="px-6 py-4"><a href="{{ route('products.edit', $products['id']) }}" class=" text-purple-500"><svg class="h-8 w-8 text-green-600"  fill="none" viewBox="0 0 24 24" stroke="currentColor">
                   <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"/>
        </svg>
     </a></td>
               <form class="px-6 py-4" action="{{ route('products.destroy',$products['id']) }}" method="post">
                    @csrf
                     @method('delete')
                     <td class="px-6 py-4"><button type="submit" class="text-red-600"><svg class="h-8 w-8 text-red-500"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round">  <polyline points="3 6 5 6 21 6" />  <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2" />  <line x1="10" y1="11" x2="10" y2="17" />  <line x1="14" y1="11" x2="14" y2="17" /></svg></button></td>
                        
               </form>     
            </tr>  
        </tbody>
    </table>
    
</div>
</div>
@endsection
