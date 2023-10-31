@extends('layouts.app')

@section('content')

<div class="container">

   

<div class="container">

<button type="button" class="btn btn-info mb-3" onclick='window.location.href = "/activity/{{ $activity->id }}/edit"'>Edit</button>



<div class="card " style="width: 25rem;">
    <img src="{{ asset('/images/example.png') }}" class="card-img-top" alt="An Image">
    <div class="card-body">
        <h3 class="card-title">{{ $activity->id }}</h3>
        <h2>{{ $activity->title }}</h2>
        <p class="card-text">{{ $activity->descriptions }}</p>

        <!-- <a href="#" class="btn btn-primary">Submit Output</a> -->
    <button type="button" class="btn btn-primary" onclick='window.location.href = "/allactivity"'>Submit Output</button>
    <button type="button" class="btn btn-danger" onclick='window.location.href = "/activities"'>Cancel</button>

    </div>
</div>
</div>




</div>

@endsection