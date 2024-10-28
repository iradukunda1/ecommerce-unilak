@extends('layout.layout')

@section('content')
    <h1>All Products</h1>
    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Price</th>
                <th>Stock</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($products as $product)
                <tr>
                    <td>{{ $product->name }}</td>
                    <td>{{ $product->price }} Rfw</td>
                    <td>{{ $product->stock }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection