@extends('layouts.pi-base')

@section('content')

    <div class="container-fluid">
        <div class="home">
            <div class="row mb-2">
                <div class="col">
                    <h3>Explore Categories and Products</h3>
                </div>
                <div class="col" align="end">
                    <a href="{{ route('pi-app-home') }}" class="btn btn-sm btn-secondary">
                        Hide Products
                    </a>
                </div>
            </div>
            <div class="row row-cols-5 mb-2">
                @foreach ($categories as $category)
                <div class="col">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">{{ $category['name'] }}</h5><hr>

                            <ul class="mt-2">
                                @foreach ($category->products as $product)
                                <li>
                                    {{ $product->name }}
                                </li>
                                @endforeach
                            </ul>

                            <span class="badge bg-primary">{{ $category->products->count() }} Products</span>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection