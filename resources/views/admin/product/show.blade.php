@extends('layouts.admin')

@section('content')

  <div>
        <div>
            <a href="{{ route('admin.products.index') }}" class="btn btn-dark  mt-5 mb-5">{{ __("BACK") }}</a>
        </div>
        <div>
            <h1>{{ $product->name }}</h1>
            <p>{{ $product->description }}</p>
            <p>{{ $product->price }}</p>
        </div>
    </div>

@endsection
