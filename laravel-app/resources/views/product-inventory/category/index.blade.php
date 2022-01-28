@extends('layouts.pi-base')

@section('content')

    <div class="container-fluid">
        <div class="content">
            <div class="row">
                <div class="col">
                    <h3>Explore Categories</h3>
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
                    <a href="{{ route('show-products') }}" class="btn btn-sm btn-secondary">
                        Show Products
                    </a>
                </div>
            </div>
            <div class="row row-cols-5">
                @foreach ($categories as $category)
                <div class="col">
                    <div class="card border-primary mt-3">
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