@extends('layouts.admin')

@section('content')

<div class="col-md-12 ">
    <div>
        <a href="{{ route('products.create') }}" class="btn btn-success btn-lg mt-5 mb-2">{{ __("ADD") }}</a>
    </div>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">NAME</th>
            <th scope="col">DESCRIPTION</th>
            <th scope="col">PRICE</th>
            <th scope="col">CREATED_AT</th>
            <th scope="col">UPDATED_AT</th>
        </tr>
        </thead>
        <tbody>
            @foreach($products as $product)
                <tr>
                    <td>{{ $product->id }}</td>
                    <td>{{ $product->name }}</td>
                    <td>{{ $product->description }}</td>
                    <td>{{ $product->price }}</td>
                    <td>{{ $product->created_at }}</td>
                    <td>{{ $product->updated_at }}</td>
                    <td><a href="{{ route('products.show', $product->id) }}" class="btn btn-warning">{{__('SHOW')}}</a></td>
                    <td><a href="{{ route('products.edit', $product->id) }}" class="btn btn-success">{{__('EDIT')}}</a></td>
                    <td>
                        <form action="{{ route('products.destroy',$product->id) }}" method="post">
                            @csrf
                            @method('delete')
                            <button type="submit" class="btn btn-danger">Del</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>


</div>

@endsection
