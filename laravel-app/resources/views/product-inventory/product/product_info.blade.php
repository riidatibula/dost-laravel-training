@extends('layouts.pi-base')

@section('content')

    <div class="container-fluid">
        <div class="content">
            <div class="row justify-content-center">
                <div class="col-5">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Name: {{ $product->name }}</h4>
                            <h6 class="card-subtitle mb-3 text-muted">Product Category: {{ $product->category->name }}</h6><hr>
                            <p class="card-text">
                                Description: {{ $product->description }}<br>
                                Unit Price: ₱{{ $product->price }}<br>
                                Remaining Quantity: {{ $product->quantity }}
                            </p>
                            <div class="row">
                                <div class="col" align="end">
                                    <a href="{{ route('pi-app-home') }}" class="btn btn-sm btn-outline-secondary">Explore Other Products</a>
                                    <a href="{{ route('edit-product', ['id' => $product->id]) }}" class="btn btn-sm btn-outline-primary">Edit</a>
                                    <a href="{{ route('product-confirm-delete', ['id' => $product->id]) }}" class="btn btn-sm btn-outline-danger">Delete Product</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection