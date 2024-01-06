@extends('layouts.admin')


@section('content')
    <div class="col-4 mt-5">
        <div>
            <a href="{{ route('products.index') }}" class="btn btn-dark  mt-5 mb-5">{{ __("BACK") }}</a>
        </div>
        <form method="post" action="{{ route('products.store') }}">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">{{__("Name")}}</label>
                <input type="text" class="form-control" id="name" placeholder="name" name="name">
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">{{__("Description")}}</label>
                <input type="text" class="form-control" id="description" placeholder="description" name="description">
            </div>
            <div class="mb-3">
                <label for="price" class="form-label">{{__("Price")}}</label>
                <input type="number" class="form-control" id="price" name="price">
            </div>
            <button type="submit" class="btn btn-success">{{__("CREATE")}}</button>
        </form>
    </div>
@endsection
