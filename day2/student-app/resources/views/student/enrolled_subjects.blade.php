@extends('layouts.base')

@section('content')

    <div class="container-fluid enrolled-subjects">
        <div class="row">
            <div class="col">
                <h1>Enrolled Subjects</h1>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <table class="table table-responsive table-striped table-bordered">
                    <thead>
                        <tr>
                            <th>Subject</th>
                            <th>Schedule</th>
                            <th>Time</th>
                            <th>Room</th>
                            <th>Instructor</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($subjects as $subject)
                            <tr>
                                <td>{{ $subject['name'] }}</td>
                                <td>{{ $subject['schedule'] }}</td>
                                <td>{{ $subject['time'] }}</td>
                                <td>{{ $subject['room'] }}</td>
                                <td>{{ $subject['instructor'] }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>



@endsection