@extends('layouts.admin')

@section('content')

@include('includes.admin.topbar')
@include('includes.admin.sidebar')

    <div class=" container">
        <div>
            <a href="{{ route('products.index') }}" class="  mt-5 mb-5">{{ __("BACK") }}</a>
        </div>
        <div>
            <h1>{{ $product->name }}</h1>
            <p>{{ $product->description }}</p>
            <p>{{ $product->price }}</p>
        </div>
    </div>
    
@endsection
