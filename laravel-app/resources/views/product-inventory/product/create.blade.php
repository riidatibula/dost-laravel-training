@extends('layouts.pi-base')

@section('content')

    <div class="container-fluid">
        <div class="content">
            <div class="row justify-content-center">
                <div class="col-5">
                    <div class="card">
                        <div class="card-body">
                            <form action="{{ route('product-save') }}" method="POST">
                                @csrf
                                <h4 class="card-title">Add New Product</h4>
                                <div class="input-group mb-3 mt-3">
                                    <label class="input-group-text" for="categorySelect">Category</label>
                                    <select class="form-select" id="categorySelect" name="category_id">
                                        @foreach ($categories as $category)
                                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="product-name">Name</span>
                                    <input type="text" class="form-control" aria-describedby="product-name" name="name" required>
                                </div>
                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="quantity">Quantity</span>
                                    <input type="number" class="form-control" aria-describedby="quantity" name="quantity" required>
                                </div>
                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="price">Price</span>
                                    <input type="number" class="form-control" aria-describedby="price" name="price" step="0.01" min="0" required>
                                </div>
                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="description">Description</span>
                                    <input type="text" class="form-control" aria-describedby="description" name="description" required>
                                </div>
                                <div class="row">
                                    <div class="col" align="end">
                                        <a href="{{ route('products') }}" class="btn btn-sm btn-danger">Cancel</a>
                                        <button class="btn btn-sm btn-success">Add</button>
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