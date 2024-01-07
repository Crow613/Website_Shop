@extends('layouts.admin')


@section('content')

@include('includes.admin.topbar')
@include('includes.admin.sidebar')

     <div class="col-4 mt-5">
        <div>
            <a href="{{ route('products.index') }}" class=" mt-5 mb-5">{{ __("BACK") }}</a>
        </div>
        <form method="post" action="{{ route('products.store') }}">
            @csrf
            <div class="mb-3">
                <label for="name" class=" label">{{__("Name")}}</label>
                <input type="text" class="form-control" id="name" placeholder="name" name="name">
            </div>
            <div class="mb-3">
                <label for="description" class=" label">{{__("Description")}}</label>
                <input type="text" class=" control" id="description" placeholder="description" name="description">
            </div>
            <div class="mb-3">
                <label for="price" class=" label">{{__("Price")}}</label>
                <input type="number" class=" control" id="price" name="price">
            </div>
            <button type="submit" class=" bottom-auto">{{__("CREATE")}}</button>
        </form>
    </div> 

@endsection
