@extends('layouts.site')

@section('content')
<div class="mx-auto max-w-7xl px-6 lg:px-8">
    <div class="mx-auto max-w-2xl lg:mx-0">
      <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">{{ __("From the Online Shop") }}</h2>
      <div class="relative mt-8 flex items-center gap-x-4">
          <img src="https://image-cdn.hypb.st/https%3A%2F%2Fhypebeast.com%2Fimage%2F2023%2F05%2Flionsgate-confirms-john-wick-5-early-development-announcement-001.jpg?cbr=1&q=90" alt="" class="h-16 w-13 rounded-full bg-gray-50">
          <div class="text-sm leading-6">
            <p class="font-semibold text-gray-900">
              <a class="text-4xl" href="https://en.wikipedia.org/wiki/John_Wick:_Chapter_2">
                <span class=" absolute inset-0 "></span>
                {{ __("John Wick") }}
              </a>
            </p>
            <p class="text-gray-600">{{ __("text") }}</p>
          </div>
        </div>
      <p class="mt-2 text-lg leading-8 text-gray-600">{{ __("all the best is here:") }}</p>
    </div>
    
    <div class="mx-auto mt-10 grid max-w-2xl grid-cols-1 gap-x-8 gap-y-16 border-t border-gray-200 pt-10 sm:mt-16 sm:pt-16 lg:mx-0 lg:max-w-none lg:grid-cols-3">
      <article class="flex max-w-xl flex-col items-start justify-between">
        <div class="flex items-center gap-x-4 text-xs">
          <time datetime="2020-03-16" class="text-gray-500">{{ __("jan") }} 8, 2024</time>
          <a href="#" class="relative z-10 rounded-full bg-gray-50 px-3 py-1.5 font-medium text-gray-600 hover:bg-gray-100">Marketing</a>
        </div>
        
        <div class="group relative">
          <h3 class="mt-3 text-lg font-semibold leading-6 text-gray-900 group-hover:text-gray-600">
            <a href="#">
              <span class="absolute inset-0"></span>
              {{ __("Boost your conversion rate") }}
            </a>
          </h3>
          <p class="mt-5 line-clamp-3 text-sm leading-6 text-gray-600">{{ __("text") }}</p>
        </div>
       
      </article>
    </div>
  </div>
@endsection
