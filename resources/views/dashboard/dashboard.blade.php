<!-- resources/views/dashboard/dashboard.blade.php -->
@extends('index')
@section('title', 'Dashboard')
@section('content')
<div class="container text-center my-5">
    <div class="row">
        <div class="col-sm-6">
            <div class="card">
            <div class="card-body">
                <h4 class="card-title">Manage your Appointments</h4>
                <p class="card-text">Change your current appointments.</p>
                <a href="/dashboard/appointments" class="btn btn-primary">My Appointments</a>
            </div>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="card">
            <div class="card-body">
                <h4 class="card-title">Find a Service</h4>
                <p class="card-text">Browse all businesses.</p>
                <a href="/businesses" class="btn btn-primary">Browse Businesses</a>
            </div>
            </div>
        </div>
    </div>
</div>
@endsection