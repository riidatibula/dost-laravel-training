@extends('layouts.pi-base')

@section('content')

    <div class="container-fluid">
        <div class="home">
            <div class="row mb-2">
                <div class="col">
                    <h3>Explore Categories</h3>
                </div>
            </div>
            <div class="row row-cols-5 mb-2">
                @foreach ($categories as $category)
                <div class="col">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">{{ $category['name'] }}</h5>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection