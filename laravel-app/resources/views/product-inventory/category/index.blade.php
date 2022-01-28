@extends('layouts.pi-base')

@section('content')

    <div class="container-fluid">
        <div class="content">
            <div class="row">
                <div class="col">
                    <h3>Explore Categories</h3>
                </div>
                <div class="col" align="end">
                    <a href="{{ route('category-create') }}" class="btn btn-sm btn-secondary">
                        Add New Category
                    </a>
                    <a href="{{ route('show-products') }}" class="btn btn-sm btn-secondary">
                        Show Products
                    </a>
                </div>
            </div>
            <div class="row row-cols-5">
                @foreach ($categories as $category)
                <div class="col">
                    <div class="card border-primary mt-2">
                        <div class="card-body">
                            <a href="{{ route('category-info', ['id' => $category->id ]) }}" class="category-link">
                            <h5 class="card-title">{{ $category->name }}</h5>
                            <span class="badge bg-primary">{{ $category->products->count() }} Products</span></a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection