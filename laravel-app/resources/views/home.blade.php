@extends('layouts.base')

@section('content')
    <!-- <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Dashboard') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        {{ __('You are logged in!') }}
                    </div>
                </div>
            </div>
        </div>
    </div> -->

    <div class="container-fluid">
        <ul>
            <li>
               <a href="{{ route('student-home') }}">Day 2 - Student App</a> 
            </li>
            <li>
                <a href="">Day 3 - Product Inventory App</a>
            </li>
        </ul>
    </div>


@endsection
