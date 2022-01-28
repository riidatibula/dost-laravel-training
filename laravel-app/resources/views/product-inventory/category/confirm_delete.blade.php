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
                                You are about to delete the following category. Press the delete button below to continue.
                            </p>
                            <p class="card-text">
                                Category: {{ $category->name }}<br>
                                Products: {{ $category->products->count() }} items
                            </p>
                            <div class="row">
                                <div class="col" align="end">
                                    <a href="{{ route('category-info', ['id' => $category->id]) }}" class="btn btn-sm btn-secondary">Cancel</a>
                                    <a href="{{ route('delete-category', ['id' => $category->id]) }}" class="btn btn-sm btn-danger">Delete Category</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection