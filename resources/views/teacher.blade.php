@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"> <center>{{ __('Manage') }}</center> </div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    <!-- <h3>
                    <center>{{ __('You are logged in,') }}</center>
                    <center> <strong>{{ Auth::user()->name }}</strong> </center>
                </h3> -->
<center>

<h3>Note: For teacher only.</h3>
<button type="button" class="btn btn-primary" onclick='window.location.href = "/home"'>Back</button>

<hr>
                <div class="btn">
                <div class="group">
                    <h4>All Submitted Activities</h4>
                    <button type="button" class="btn btn-secondary" onclick='window.location.href = "/allactivities"'>View</button>
                    </div>

                    <hr>
                    <div class="group">
                        <h4>Create New Activities</h4>
                    <button type="button" class="btn btn-secondary" onclick='window.location.href = "/activities"'>View</button>
                    </div>
                </div>
</center>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection