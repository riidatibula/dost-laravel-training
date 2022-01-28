@extends('layouts.pi-base')

@section('content')

    <div class="container-fluid">
        <div class="content">
            <div class="row">
                <div class="col">
                    <h3>Explore Categories and Products</h3>
                </div>
                <div class="col">
                    <form action="{{ route('category-search') }}" method="GET">
                        <div class="input-group">
                            <input type="text" name="key" class="form-control" placeholder="Category Name" aria-label="Search Key" aria-describedby="Search Key">
                            <button type="submit" class="btn btn-outline-secondary" type="button" id="search">Search</button>
                        </div>
                    </form>
                </div>
                <div class="col" align="end">
                    <a href="{{ route('category-create') }}" class="btn btn-sm btn-outline-primary">
                        Add New Category
                    </a>
                    <a href="{{ route('pi-app-home') }}" class="btn btn-sm btn-secondary">
                        Hide Products
                    </a>
                </div>
            </div>
            <div class="row row-cols-5">
                @foreach ($categories as $category)
                <div class="col">
                    <div class="card border-primary mt-3">
                        <div class="card-body">
                            <a href="{{ route('category-info', ['id' => $category->id ]) }}" class="category-link">
                            <h5 class="card-title">{{ $category['name'] }}</h5></a><hr>

                            @if (count($category->products) > 0)
                            <ul class="mt-2">
                                @foreach ($category->products as $product)
                                <li>
                                    <a href="{{ route('product-info', ['id' => $product->id]) }}" class="product-link">
                                    {{ $product->name }}</a>
                                </li>
                                @endforeach
                            </ul>
                            @else
                                <p class="text-muted">No products found</p>
                            @endif


                            <span class="badge bg-primary">{{ $category->products->count() }} Products</span>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection