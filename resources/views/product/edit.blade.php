@extends('layouts.app')

@section('content')

<div class="col-4">

  <div >

    <a href="{{ route('products.index') }}" class="btn btn-dark mt-5 mb-5 ">{{__("BACK")}}</a>

  </div>

  <form action="{{ route('products.update', $product->id) }}" method="post">
    @csrf
    @method('patch')
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">{{__("NAME")}}</label>
      <input type="text" class="form-control" id="exampleInputEmail1"name="name" value="{{ old('name', $product->name) }}" >
    </div>
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">{{__("DESCRIPTION")}}</label>
      <input type="text" class="form-control" id="exampleInputEmail1" name="description" value="{{ old('description', $product->description) }}" >
    </div>
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">{{__("PRICE")}}</label>
      <input type="number" class="form-control" id="exampleInputEmail1" value="{{ old('price', $product->price) }}" name="price" >
    </div>


    <button type="submit" class="btn btn-success">{{__("UPDATE")}}</button>
  </form>
</div>

@endsection
