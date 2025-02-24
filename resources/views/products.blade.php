@extends('layouts.app')

@section('content')
<div class="container">
    <h2 class="my-4">Product Categories</h2>
    <div class="row">
        @foreach($categories as $key => $category)
            <div class="col-md-3 mb-3">
                <a href="{{ url('/category/' . $key) }}" class="btn btn-outline-primary w-100">
                    {{ $category }}
                </a>
            </div>
        @endforeach
    </div>

    @if(!empty($products))
    <h3 class="mt-4">Products in Category: {{ ucfirst(str_replace('-', ' ', $selectedCategory)) }}</h3>
    <table class="table table-bordered mt-3">
        <thead>
            <tr><th>Name</th><th>Price</th></tr>
        </thead>
        <tbody>
            @foreach($products as $product)
            <tr>
                <td>{{ $product['name'] }}</td>
                <td>Rp {{ number_format($product['price'], 0, ',', '.') }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    @endif
</div>
@endsection
