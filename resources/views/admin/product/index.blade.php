@extends('layouts.admin')

@section('content')

@include('includes.admin.topbar')
@include('includes.admin.sidebar')
    
<div class="relative overflow-x-auto">
<div class=" bg-orange-700" >
<a href="{{ route('products.create') }}" class=" text-blue-700">{{ __("ADD") }}</a>
</div>
    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                    ID
                </th>
                <th scope="col" class="px-6 py-3">
                    NAME
                </th>
                <th scope="col" class="px-6 py-3">
                    DESCRIPTION
                </th>
                <th scope="col" class="px-6 py-3">
                    PRICE
                </th>
                <th scope="col" class="px-6 py-3">
                CREATED_AT
                </th>
                <th scope="col" class="px-6 py-3">
                UPDATED_AT
                </th>
            </tr>
        </thead>
        @foreach ($products as $product )
        <tbody>
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                <th scope="row" class="px-6 py-4 font-medium whitespace-nowrap text-red-600">
                    {{ $product->id }}
                </th>
                <td class="px-6 py-4">
                    {{ $product->name }}
                </td>
                <td class="px-6 py-4">
                    {{ $product->description }}
                </td>
                <td class="px-6 py-4">
                    {{ $product->price }}
                </td>
                <td class="px-6 py-4">
                {{ $product->created_at }}
                </td>
                <td class="px-6 py-4">
                {{ $product->update_at }}
                </td>
                <td class="px-6 py-4"><a href="{{ route('products.show', $product->id) }}" class="text-emerald-500"  >{{__('SHOW')}}</a></td>
                <td class="px-6 py-4"><a href="{{ route('products.edit', $product->id) }}" class=" text-purple-500">{{__('EDIT')}}</a></td>

                        <form class="px-6 py-4" action="{{ route('products.destroy',$product->id) }}" method="post">
                            @csrf
                            @method('delete')
                            <td class="px-6 py-4"><button type="submit" class="text-red-600">Del</button></td>
                        
                        </form>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>


@endsection
