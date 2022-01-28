@extends('layouts.pi-base')

@section('content')

    <div class="container-fluid">
        <div class="content">
            <div class="row mb-2">
                <div class="col">
                    <h3>Category: {{ $category->name }}</h3>
                </div>
                <div class="col" align="end">
                    <a href="{{ route('pi-app-home') }}" class="btn btn-sm btn-secondary">
                        View All Categories
                    </a>
                </div>
            </div>
            <div class="row row-cols-5 mb-2">
                @foreach ($category->products as $product)
                <div class="col">
                    <div class="card mt-2">
                        <div class="card-body">
                            <a href="#" class="product-link">
                            <h5 class="card-title">{{ $product->name }}</h5></a>
                            <p class="card-text">{{ $product->description }}</p>
                            <span class="badge bg-success">₱ {{ $product->price }} each</span>
                            <span class="badge bg-info text-dark">{{ $product->quantity }} items remaining</span>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection