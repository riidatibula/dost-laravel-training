@extends('layouts.pi-base')

@section('content')

    <div class="container-fluid">
        <div class="home">
            <div class="row mb-2">
                <div class="col">
                    <h3>Explore Categories</h3>
                </div>
                <div class="col" align="end">
                    <a href="{{ route('show-products') }}" class="btn btn-sm btn-secondary">
                        Show Products
                    </a>
                </div>
            </div>
            <div class="row row-cols-5 mb-2">
                @foreach ($categories as $category)
                <div class="col">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">{{ $category['name'] }}</h5>
                            <span class="badge bg-primary">{{ $category->products->count() }} Products</span>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection