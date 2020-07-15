<!-- resources/views/home.blade.php -->
<!-- Specify that we want to extend the index file -->
@extends('index')
<!-- Set the title content to "Home" -->
@section('title', 'Home')
<!-- Set the "content" section, which will replace "@yield('content')" in the index file we're extending -->
@section('content')

<div class="jumbotron text-light" style="background-image: url('https://images.unsplash.com/photo-1578242174372-e26b3681587f?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1350&q=80')">
    <div class="container">
        @if(Auth::user())
            <h1 class="display-4">Welcome back, {{ Auth::user()->nickname}}!</h1>
            <p class="lead">Streamline your appointment management.</p>
            <a href="/dashboard" class="btn btn-success btn-lg my-2">View your Dashboard</a>
        @else
            <h1 class="display-3">Appointment management made easy.</h1>
            <p class="lead">We want to make your life easier. In one place, you can manage all of your appointments!</p>
            <a href="/login" class="btn btn-success btn-lg my-2">Sign Up</a>
        @endif           
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-sm-6">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Convenient</h5>
                    <p class="card-text">Manage all appointments in one place!</p>
                </div>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">One account!</h5>
                    <p class="card-text">Appointment making all in one place!</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection