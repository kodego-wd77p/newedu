@extends('layouts.app')

@section('content')
<div class="container">
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

                    <h3>
                    <center>{{ __('You are logged in,') }}</center>
                    <center> <strong>{{ Auth::user()->name }}</strong> </center>
                </h3>
                    <br>

                <div class="btn">
                <div class="card group">
                    <h4>View all the submitted activities by students and create new activities.</h4>
                    <button type="button" class="btn btn-outline-success" onclick='window.location.href = "/teacher"'>Teachers</button>
                    </div>

                    <br>
                    
                    <div class="card group">
                        <h4>Submit activities</h4>
                    <button type="button" class="btn btn-outline-success" onclick='window.location.href = "/allactivity"'>Students</button>
                    </div>
                </div>


                </div>
            </div>
        </div>
    </div>
</div>
@endsection