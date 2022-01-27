@extends('layouts.base')

@section('content')

    <div class="container-fluid grades">
        <div class="row">
            <div class="col">
                <h1>Grades</h1>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <table class="table table-responsive table-striped table-bordered">
                    <thead>
                        <tr>
                            <th>Subject</th>
                            <th>Mid-term</th>
                            <th>Final-term</th>
                            <th>Average</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($grades as $grade)
                            <tr>
                                <td>{{ $grade['subject'] }} </td>
                                <td>{{ $grade['mid_term'] }} </td>
                                <td>{{ $grade['final_term'] }} </td>
                                <td>{{ $grade['average'] }} </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection