@extends('layouts.base')

@section('content')

    <div class="container-fluid">
        <div class="home">
            <div class="row mb-3">
                <div class="col">
                    <h1>Hello, Ada. What do you want to do today?</h1>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="card border-info">
                        <div class="card-body">
                            <h5 class="card-title">Profile</h5>
                            <p class="card-text">View your latest information such as your course and year level</p>
                            <a href="{{ route('profile') }}" class="btn btn-sm btn-primary">View</a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card border-info">
                        <div class="card-body">
                            <h5 class="card-title">Enrolled Subjects</h5>
                            <p class="card-text">View your enrolled subjects and schedule for the current semester</p>
                            <a href="{{ route('enrolled_subjects') }}" class="btn btn-sm btn-primary">View</a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card border-info">
                        <div class="card-body">
                            <h5 class="card-title">Grades</h5>
                            <p class="card-text">View your midterm and final grade for the current semester</p>
                            <a href="{{ route('grades') }}" class="btn btn-sm btn-primary">View</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection()