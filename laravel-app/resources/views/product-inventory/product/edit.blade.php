@extends('layouts.pi-base')

@section('content')

    <div class="container-fluid">
        <div class="content">
            <div class="row justify-content-center">
                <div class="col-5">
                    <div class="card">
                        <div class="card-body">
                            <form action="{{ route('product-update', ['id' => $product->id]) }}" method="POST">
                                @csrf
                                <h4 class="card-title">Edit Product</h4>
                                <div class="input-group mb-3 mt-3">
                                    <label class="input-group-text" for="categorySelect">Category</label>
                                    <select class="form-select" id="categorySelect" name="category_id">
                                        <option value="{{ $product->category->id }}" selected>{{ $product->category->name }}</option>
                                        @foreach ($categories as $category)
                                            @if ($category->id != $product->category->id)
                                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                                            @endif
                                        @endforeach
                                    </select>
                                </div>
                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="product-name">Name</span>
                                    <input type="text" class="form-control" aria-describedby="product-name" name="name" value="{{ $product->name }}" required>
                                </div>
                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="quantity">Quantity</span>
                                    <input type="number" class="form-control" aria-describedby="quantity" name="quantity" value="{{ $product->quantity }}" required>
                                </div>
                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="price">Price</span>
                                    <input type="number" class="form-control" aria-describedby="price" name="price" step="0.01" min="0" value="{{ $product->price }}" required>
                                </div>
                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="description">Description</span>
                                    <input type="text" class="form-control" aria-describedby="description" name="description" value="{{ $product->description }}" required>
                                </div>
                                <div class="row">
                                    <div class="col" align="end">
                                        <a href="{{ route('product-info', ['id' => $product->id]) }}" class="btn btn-sm btn-danger">Cancel</a>
                                        <button class="btn btn-sm btn-success">Update</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection