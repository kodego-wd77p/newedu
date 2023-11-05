@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><center>{{ __('Dashboard') }}</center></div>

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
                    <hr>

                <center>
                    <h4>View all the submitted activities by students and create new activities.</h4>
                    <button type="button" class="btn btn-dark" onclick='window.location.href = "/teacher"'>Teachers</button>
                    

                    <hr>
                    
                    
                        <h4>Submit activities</h4>
                    <button type="button" class="btn btn-dark" onclick='window.location.href = "/allactivity"'>Students</button>
                </center>
                
                    
                    
                


                </div>
            </div>
        </div>
    </div>
</div>
@endsection