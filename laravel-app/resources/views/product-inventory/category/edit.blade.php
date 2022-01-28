@extends('layouts.pi-base')

@section('content')

    <div class="container-fluid">
        <div class="content">
            <div class="row justify-content-center">
                <div class="col-5">
                    <div class="card">
                        <div class="card-body">
                            <form action="{{ route('category-update', ['id' => $category->id]) }}" method="POST">
                                @csrf
                                <h4 class="card-title">Edit Category</h4>
                                <div class="input-group mb-2 mt-3">
                                    <span class="input-group-text" id="category-name">Name</span>
                                    <input type="text" class="form-control" aria-describedby="category-name" name="name" value="{{ $category->name }}" required>
                                </div>
                                <div class="row">
                                    <div class="col" align="end">
                                        <a href="{{ route('category-info', ['id' => $category->id]) }}" class="btn btn-sm btn-danger">Cancel</a>
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