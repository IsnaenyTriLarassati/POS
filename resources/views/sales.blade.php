@extends('layouts.app')

@section('content')
    <h2>Sales Transactions</h2>
    <table class="table table-bordered">
        <thead>
            <tr><th>Product</th><th>Price</th><th>Quantity</th><th>Total</th></tr>
        </thead>
        <tbody>
            @foreach($orderedProducts as $product)
            <tr>
                <td>{{ $product['name'] }}</td>
                <td>Rp {{ number_format($product['price'], 0, ',', '.') }}</td>
                <td>{{ $product['quantity'] }}</td>
                <td>Rp {{ number_format($product['price'] * $product['quantity'], 0, ',', '.') }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection
