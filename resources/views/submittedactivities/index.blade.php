@extends('layouts.app')

@section('content')

<div class="container">

<!-- <p><button type="button" class="btn btn-primary" onclick='window.location.href = "/activity"'>Submit Activity</button></p> -->
<button type="button" class="btn btn-primary mb-3" onclick='window.location.href = "/teacher"'>Back</button>
   

    <table class="table">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">STUDENTS NAME</th>
                <th scope="col">SUBJECT</th>
                <th scope="col">SUBJECT & WHAT ACTIVITY</th>
                <th scope="col">MESSAGE/TEXT</th>
                
            </tr>
        </thead>
        <tbody>
        @foreach ($submitted as $submit) 
            <tr>
                <th scope="row">{{ $submit->id }}</th>
                <td><a href="/allactivity/{{ $submit->id }}">{{ $submit->students_name }}</a></td>
                <td>{{ $submit->subjects }}</td>
                <td>{{ $submit->title }}</td>
                <td>{{ $submit->activity_text }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>



</div>

@endsection