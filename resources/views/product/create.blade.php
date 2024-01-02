@extends('layouts.app')

@section('content')

<div class="coll-4">
  <form action="{{Route('products.store')}}" method="post">
    @csrf
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">{{__("name")}}</label>
      <input type="text" class="form-control" id="exampleInputEmail1" name="name">
    </div>
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">{{__("description")}}</label>
      <input type="text" class="form-control" id="exampleInputEmail1" name="description">
    </div>
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">{{__("price")}}</label>
      <input type="number" class="form-control" id="exampleInputEmail1" name="price">
    </div>


    <button type="submit" class="btn btn-primary">{{__("Submit")}}</button>
  </form>
</div>

@endsection
