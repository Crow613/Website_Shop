
<x-app-layout>

<form action="{{route('logout')}}" method="post">
            @csrf
            <button tayp="submit" class="inline-flex justify-center items-center m-3 py-3 px-5 text-base font-medium text-center text-white rounded-lg bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 dark:focus:ring-blue-900">
                {{_("Logout")}}
                <svg class="w-3.5 h-3.5 ms-2 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                </svg>
            </button>
       </form>

        <div class="p-2 md:p-4">
            <div class="w-full px-6 pb-8 mt-8 sm:max-w-xl sm:rounded-lg">
                

                <div class="grid max-w-2xl mx-auto mt-8">
                    <div class="flex flex-col items-center space-y-5 sm:flex-row sm:space-y-0">
                
                        <img class="object-cover w-40 h-40 p-1 rounded-full ring-2 ring-indigo-300 dark:ring-indigo-500"
                            src="{{Vite::asset('/storage/app/public/img/user/'.auth()->user()->img)}}"
                            alt="Bordered avatar">
                            <h2 class="pl-10 text-center  font-bold sm:text-xl bg-stone-950">{{auth()->user()->name}}</h2>
                        <div class="flex flex-col space-y-5 sm:ml-8">
                            <button type="button"
                                class="py-3.5 px-7 text-base font-medium text-indigo-100 focus:outline-none bg-[#202142] rounded-lg border border-indigo-200 hover:bg-indigo-900 focus:z-10 focus:ring-4 focus:ring-indigo-200 ">
                                Change picture
                            </button>
                        </div>
                    </div>

                </div>
            </div>
        </div>
                    
<x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
        {{ __('Profile') }}
    </h2>
</x-slot>

<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
        <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
            <div class="max-w-xl">
                @include('profile.partials.update-profile-information-form')
            </div>
        </div>

        <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
            <div class="max-w-xl">
                @include('profile.partials.update-password-form')
            </div>
        </div>

        <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
            <div class="max-w-xl">
                @include('profile.partials.delete-user-form')
            </div>
        </div>
       
    </div>
</div>
</x-app-layout>
@include('site.includes.topbar')
