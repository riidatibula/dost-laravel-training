@extends('layouts.pi-base')

@section('content')

    <div class="container-fluid">
        <div class="content">
            <div class="row mb-2">
                <div class="col">
                    <h3>{{ $category->name }}</h3>
                </div>
                <div class="col" align="end">
                    <a href="{{ route('pi-app-home') }}" class="btn btn-sm btn-primary">
                        View All Categories
                    </a>
                </div>
            </div>
            <table class="table table-responsive table-sm table-striped caption-top">
                <caption>Products</caption>
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Description</th>
                        <th>Quantity</th>
                        <th>Price</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($category->products as $product)
                        <tr>
                            <td>{{ $product->name }}</td>
                            <td>{{ $product->description }}</td>
                            <td>{{ $product->quantity }}</td>
                            <td>{{ $product->price }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection