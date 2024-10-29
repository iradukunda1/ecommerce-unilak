@extends('layout.layout')

@section('content')
    <h1>All Products</h1>
    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Price</th>
                <th>Stock</th>
                <th>Image</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($products as $product)
                <tr>
                    <td>{{ $product->name }}</td>
                    <td>{{ $product->price }} Rfw</td>
                    <td>{{ $product->stock }}</td>
                    <td>
                        @if(!empty($product->image_url))
                            <img src="{{ asset('images/'.$product->image_url) }}" alt="product image" width="100">
                        @else
                            <p>No image</p>
                        @endif
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection