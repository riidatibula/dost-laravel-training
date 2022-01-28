@extends('layouts.pi-base')

@section('content')

    <div class="container-fluid">
        <div class="content">
            <div class="row justify-content-center">
                <div class="col-5">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Are you sure?</h4>
                            <p class="card-text">
                                You are about to delete the following product. Press the delete button below to continue.
                            </p><hr>
                            <p class="card-text">
                                Name: {{ $product->name }}<br>
                                Category: {{ $product->category->name }}<br>
                                Description: {{ $product->description }}<br>
                                Quantity: {{ $product->quantity }}<br>
                                Price: {{ $product->price }}
                            </p>
                            <div class="row">
                                <div class="col" align="end">
                                    <a href="{{ route('product-info', ['id' => $product->id]) }}" class="btn btn-sm btn-secondary">Cancel</a>
                                    <a href="{{ route('delete-product', ['id' => $product->id]) }}" class="btn btn-sm btn-danger">Confirm Delete</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection