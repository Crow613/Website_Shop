@extends('layouts.admin')


@section('content')


        <div>
            <a href="{{ route('products.index') }}" class=" mt-5 mb-5"><svg class="h-8 w-8 text-blue-700"  width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">  <path stroke="none" d="M0 0h24v24H0z"/>  <line x1="5" y1="12" x2="19" y2="12" />  <line x1="5" y1="12" x2="11" y2="18" />  <line x1="5" y1="12" x2="11" y2="6" /></svg></a>
        </div>

     <div class="col-4 mt-5 block p-6 ms-96">
        
        <form method="post" action="{{ route('products.store') }}">
            @csrf
           
             <div class="mb-3">
                     <label for="default-input" class="text-3xl block mb-2  font-medium text-gray-900">{{ __("Product Name") }}</label>
                  <input type="text" id="default-input" name="name" class="p-2 bg-gray-50  border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 ">
            </div>
            <div class="mb-3">
                 <label for="small-input" class="text-3xl block mb-2  font-medium text-gray-900">{{ __("Description") }}</label>
                 <input type="text" id="small-input" name="description" class="p-2 text-gray-900  border-gray-300 rounded-lg bg-gray-50 sm:text-xs focus:ring-blue-500 focus:border-blue-500">
            </div>
            <div class="mb-3">
                    <label for="large-input" class="text-3xl block mb-2  font-medium text-gray-900">{{ __("Price") }}</label>
                    <input type="text" name="price" id="large-input" class="p-1 text-gray-900  border-gray-300 rounded-lg bg-gray-50 sm:text-md focus:ring-blue-500 focus:border-blue-500">
            </div>
            
                <button type="submit" class=" rounded-lg " ><svg class="h-8 w-8 text-blue-700"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round">  <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4" />  <polyline points="7 10 12 15 17 10" />  <line x1="12" y1="15" x2="12" y2="3" /></svg></button>
            
        </form>
    </div> 

   

@endsection
