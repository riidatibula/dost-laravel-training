@extends('layouts.pi-base')

@section('content')

    <div class="container-fluid">
        <div class="content">
            <div class="row">
                <div class="col">
                    <h3>Explore Products</h3>
                </div>
                <div class="col" align="end">
                    <a href="#" class="btn btn-sm btn-secondary">
                        Show Category
                    </a>
                </div>
            </div>
            <div class="row row-cols-5 mb-2">
                @foreach ($products as $product)
                <div class="col">
                    <div class="card mt-2">
                        <div class="card-body">
                            <a href="#" class="category-link">
                            <h5 class="card-title">{{ $product->name }}</h5>
                            <p class="card-text">{{ $product->description }}</p>
                            <span class="badge bg-success">₱ {{ $product->price }} each</span></a>
                            <span class="badge bg-info text-dark">{{ $product->quantity }} remaining items</span></a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection