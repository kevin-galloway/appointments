<!-- resources/views/dashboard/dashboard.blade.php -->
@extends('index')
@section('title', 'Edit Appointment')
@section('content')
<div class="container">
    <div class="card my-5">
        <div class="card-header">
            <h2>You're appointment is set with {{ $businessInfo->name }} in {{ $businessInfo->address }}!</h2>
        </div>
        <div class="card-body">
            <div class="card-body">
                <div class="row">
                    <div class="col-sm-6">
                        <img src="{{ $businessInfo->image }}" class="img-fluid" alt="Front of business">
                    </div>
                    <div class="col-sm-6">
                        <h3 class="card-title">
                            {{ $businessInfo->name }} - <small>{{ $businessInfo->address }}</small>
                        </h3>
                        <p class="card-text">{{ $businessInfo->about }}</p>
                        <p class="card-text"><strong>Start Time: </strong>{{ $appointment->start }}</p>
                        <p class="card-text"><strong>End Time: </strong>{{ $appointment->end }}</p>
                        <p class="card-text"><strong>Service: </strong>{{ $appointment->service['type'] }}</p>
                        <p class="card-text"><strong>Price: </strong>${{ $appointment->service['price'] }}</p>
                    </div>                  
                </div>
                <div class="text-center mt-3">
                    <a href="/dashboard/appointments/{{ $appointment->id }}/edit" class="btn btn-lg btn-success">Edit this appointment</a>
                    <a href="/dashboard/appointments/{{ $appointment->id }}/delete" class="btn btn-lg btn-danger">Delete</a>
                </div>
            </div>          
        </div>
    </div>
</div>
@endsection