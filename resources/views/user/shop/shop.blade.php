@extends('layouts.site')

@section('content')
@dd($request)
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

            </tr>
        </thead>
        <tbody>



            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                <td class="p-4">
                    {{-- <img src="{{ Vite::asset('/storage/app/public/img/product/'. $product->img ) }}" class="w-16 md:w-32 max-w-full max-h-full" alt="Apple Watch"> --}}
                </td>
                <td class="px-6 py-4 font-semibold text-gray-900 dark:text-white">
                    {{ $product->name }}
                </td>
                <td class="px-6 py-4">
                    <div class="flex items-center">

                        <div>
                            <p id="first_product" class="bg-gray-50 w-14 border border-gray-300
                             text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block px-2.5 py-1
                              dark:bg-gray-700 dark:border-gray-600
                             dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" >
                              {{ $product->quantity }}
                            </p>
                        </div>

                </td>
                <td class="px-6 py-4 font-semibold text-gray-900 dark:text-white">
                    ${{ $product->price }}
                </td>


            </tr>

            </tr>

        </tbody>
    </table>
</div>




@endsection

