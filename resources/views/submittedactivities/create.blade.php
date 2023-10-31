@extends('layouts.app')

@section('content')

<div class="container">


    <!-- csrf - CROSS SITE REQUEST FORGERY -->


    <form method="POST"  action="/allactivity">

    @csrf
        <div class="row">
            <div class="col mb-3">
                <label for="exampleInputEmail1" class="form-label">Subject</label>
                <input type="text" class="form-control" placeholder="Subject" name="subjects" value="{{ old('subject') }}">
                <br>

                <!-- FOR VALIDATION -->
            @error('subjects')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror

            </div>
            <div class="col mb-3">
                <label for="exampleInputEmail1" class="form-label">What Output?</label>
                <input type="text" class="form-control" placeholder="ex. Activity/Performance Task/Quiz" name="title" value="{{ old('output') }}">
                <br>
                @error('title')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
        </div>

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Student's Name</label>
                <input type="text" class="form-control" placeholder="Name" name="students_name" value="{{ old('name') }}">
                <br>
                @error('students_name')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
        </div>

<div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label">Text/Message</label>
  <textarea class="form-control" rows="3" name="activity_text" value="{{ old('text') }}"></textarea>

    <br>
            @error('activity_text')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror

</div>


        <button type="submit" class="btn btn-primary mb-3" onclick='window.location.href = "/allactivities"'>Submit</button>
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