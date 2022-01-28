@extends('layouts.pi-base')

@section('content')

    <div class="container-fluid">
        <div class="content">
            <div class="row">
                <div class="col">
                    <h3>Explore Products</h3>
                </div>
                <div class="col">
                    <form action="{{ route('product-search') }}" method="GET">
                        <div class="input-group">
                            <input type="text" name="key" class="form-control" placeholder="Product Name" aria-label="Search Key" aria-describedby="Search Key">
                            <button type="submit" class="btn btn-outline-secondary" type="button" id="search">Search</button>
                        </div>
                    </form>
                </div>
                <div class="col" align="end">
                    <a href="{{ route('product-create') }}" class="btn btn-sm btn-outline-success">
                        Add Product
                    </a>
                    <a href="{{ route('show-category') }}" class="btn btn-sm btn-secondary">
                        Show Category
                    </a>
                </div>
            </div>
            <div class="row row-cols-5 mb-2">
                @foreach ($products as $product)
                <div class="col">
                    <div class="card border-success mt-2">
                        <div class="card-body">
                            <a href="{{ route('product-info', ['id' => $product->id ]) }}" class="product-link">
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