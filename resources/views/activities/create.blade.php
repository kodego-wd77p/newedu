@extends('layouts.app')

@section('content')

<div class="container">


    <!-- csrf - CROSS SITE REQUEST FORGERY -->


    <form method="POST"  action="/activity">

    @csrf
        <div class="row">
            <div class="col mb-3">
                <label for="exampleInputEmail1" class="form-label">Subject</label>
                <input type="text" class="form-control" placeholder="Subject" name="title" value="{{ old('title') }}">
                <br>

                <!-- FOR VALIDATION -->
            @error('title')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror

            </div>
            <div class="col mb-3">
                <label for="exampleInputEmail1" class="form-label">Subject</label>
                <input type="number" class="form-control" placeholder="Total Score" name="score" value="{{ old('score') }}">
<br>
                @error('score')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            </div>
        </div>

        <div class="input-group mb-3">
            <span class="input-group-text">Description</span>
            <textarea class="form-control" aria-label="With textarea" name="descriptions" value="{{ old('descriptions') }}"></textarea>
<br>
            @error('descriptions')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror

        </div>

        <button type="submit" class="btn btn-primary mb-3">Submit</button>
        <button type="button" class="btn btn-danger mb-3" onclick='window.location.href = "/activities"'>Cancel</button>
    </form>


    <!-- DISPLAYING THE SUCCESS MESSAGE RIGHT AFTER THE SUBMISSION -->
    @if(session('success'))
    <h6 class="alert alert-success">
        {{ session('success') }}
    </h6>
    @endif

</div>



@endsection