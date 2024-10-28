@extends('layout.layout')

@section('content')
    <h1>Product Page</h1>
    <form method="POST" action="{{ route('product.store') }}">
        {{ csrf_field() }}
        <p>
            Name: <input type="text" name="name" placeholder="product name">
        </p>
        <p>
            Desciption: <textarea name="description" placeholder="description"></textarea>
        </p>
        <p>
            Price: <input type="number" name="price" placeholder="price">
        </p>
        <p> Stock: <input type="number" name="stock" placeholder="stock"> </p>
        <p> Product Image: <input type="file" name="product_image"> </p>
        <p> <input type="submit" value="Save Product"> </p>
    </form>
@endsection