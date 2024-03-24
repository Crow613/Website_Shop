@extends('layouts.admin')

@section('content')

 <div class="fixed left-0 top-0 w-64 h-full bg-gray-900 p-4 z-50 sidebar-menu transition-transform">
     
    @include('admin.includes.deshbord')
   
  </div>
    
        <div>
            <a href="{{ route('adminProducts')}}" class="btn btn-dark  mt-5 mb-5">{{ __("BACK") }}</a>
        </div>
        <form method="post" enctype="multipart/form-data" action="{{route('productUpdate',$product->id)}}">
            @csrf
            @method('patch')
            <div class="mb-3">
                <input type="file" class="form-control" id="name" placeholder="Image" name="img" value="{{ old('img',$product->img)  }}">
            </div>
            <div class="mb-3">
                <label for="name" class="form-label">{{__("Name")}}</label>
                <input type="text" class="form-control" id="name" placeholder="name" name="name" value="{{ old('name',$product->name)  }}">
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">{{__("Description")}}</label>
                <input type="text" class="form-control" id="description" placeholder="description" name="description" value="{{ old('description',$product->description) }}">
            </div>
            <div class="mb-3">
                <label for="price" class="form-label">{{__("Quantities")}}</label>
                <input type="number" class="form-control" id="price" name="quantities" value="{{ old('price',$product->quantities) }}">
            </div>
            <div class="mb-3">
                <label for="price" class="form-label">{{__("Price")}}</label>
                <input type="number" class="form-control" id="price" name="price" value="{{ old('price',$product->price) }}">
            </div>
            <button type="submit" class="btn btn-success">{{__("UPDATE")}}</button>
        </form>
          
@endsection
