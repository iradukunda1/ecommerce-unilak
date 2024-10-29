@extends('layout.layout')

@section('content')
    <h1>Update Product</h1>
    <form method="POST" action="{{ route('product.update', $product->id) }}" enctype="multipart/form-data">
        {{ csrf_field() }}
        <p>
            Name: <input type="text" name="name" placeholder="product name" value="{{$product->name}}">
        </p>
        <p>
            Desciption: <textarea name="description" placeholder="description"> {{$product->description}}</textarea>
        </p>
        <p>
            Price: <input type="number" name="price" placeholder="price" value="{{$product->price}}">
        </p>
        <p> Stock: <input type="number" name="stock" placeholder="stock" value="{{$product->stock}}"> </p>
        <p> Product Image: <input type="file" name="product_image"> </p>
        <p> <input type="submit" value="Update Product"> </p>
    </form>
@endsection