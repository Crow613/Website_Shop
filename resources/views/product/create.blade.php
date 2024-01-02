@extends('layouts.app')

@section('content')


<div class="col-4">

  <div >

    <a href="{{ route('products.index')}}" class="btn btn-dark mt-5 mb-5 ">{{__("BACK")}}</a>

  </div>

  <form action="{{Route('products.store')}}" method="post">
    @csrf
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">{{__("NAME")}}</label>
      <input type="text" class="form-control" id="exampleInputEmail1" name="name">
    </div>
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">{{__("DESCRIPTION")}}</label>
      <input type="text" class="form-control" id="exampleInputEmail1" name="description">
    </div>
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">{{__("PRICE")}}</label>
      <input type="number" class="form-control" id="exampleInputEmail1" name="price">
    </div>


    <button type="submit" class="btn btn-success">{{__("CREATE")}}</button>
  </form>
</div>
 
@endsection
