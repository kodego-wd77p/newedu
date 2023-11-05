@extends('layouts.app')

@section('content')



<div class="container">

    <button type="button" class="btn btn-success mb-3" onclick='window.location.href = "/activity"'>Create New</button>
    <button type="button" class="btn btn-primary mb-3" onclick='window.location.href = "/teacher"'>Back</button>


    <table class="table">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">SUBJECT</th>
                <th scope="col">DESCRIPTION</th>
                <th scope="col">POINT/SCORE</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($activities as $activity)
            <tr>
                <th scope="row">{{ $activity->id }}</th>
                <td><a href="/activity/{{ $activity->id }}">{{ $activity->title }}</a></td>
                <td>{{ $activity->descriptions }}</td>
                <td>{{ $activity->score }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>



</div>


@endsection