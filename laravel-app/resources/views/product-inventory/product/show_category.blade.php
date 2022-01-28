@extends('layouts.pi-base')

@section('content')

    <div class="container-fluid">
        <div class="content">
            <div class="row">
                <div class="col">
                    <h3>Explore Products and Categories</h3>
                </div>
                <div class="col" align="end">
                    <a href="{{ route('product-create') }}" class="btn btn-sm btn-outline-success">
                        Add Product
                    </a>
                    <a href="{{ route('products') }}" class="btn btn-sm btn-secondary">
                        Hide Category
                    </a>
                </div>
            </div>
            <div class="row row-cols-5 mb-2">
                @foreach ($products as $product)
                <div class="col">
                    <div class="card border-success mt-2">
                        <div class="card-body">
                            <a href="{{ route('product-info', ['id' => $product->id]) }}" class="product-link">
                            <h5 class="card-title">{{ $product->name }}</h5></a>
                            <p class="card-text">{{ $product->description }}</p>
                            <span class="badge bg-success">₱ {{ $product->price }} each</span>
                            <span class="badge bg-info text-dark">{{ $product->quantity }} items remaining</span>
                            <span class="badge bg-secondary">Category: {{ $product->category->name }}</span>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection