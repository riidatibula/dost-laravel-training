@extends('layouts.base')

@section('content')
    
    <div class="container-fluid profile">
        <div class="row">
            <div class="col">
                <h1>Profile</h1>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-header">
                        <img src="{{ asset('images/ada.jpeg') }}" class="mb-3 img-fluid img-thumbnail">
                        <h5>Name: {{ $student_info['name'] }}</h5>
                        <h6 class="text-muted">Student Id: {{ $student_info['student_id'] }}</h6>
                    </div>
                    <div class="card-body">
                        <p class="card-text">Year Level: {{ $student_info['year_level'] }}</p>
                        <p class="card-text">Course: {{ $student_info['course'] }}</p>
                        <p class="card-text">Birthdate: {{ $student_info['birth_date'] }}</p>
                        <p class="card-text">Address: {{ $student_info['address'] }}</p>
                        <p class="card-text">Email: {{ $student_info['email'] }}</p>
                        <p class="card-text">Phone: {{ $student_info['phone'] }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection()
