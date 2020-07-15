<!-- resources/views/businesses.blade.php -->
@extends('index')
@section('title', 'Businesses')
@section('content')
<div class="container my-5">
    <div class="row">
        <!-- Loop through businesses returned from controller -->
        @foreach ($businesses as $business)
        <div class="col-sm-4">
            <div class="card mb-3">
                <div style="background-image:url('{{ $business->image }}');height:300px;background-size:cover;" class="img-fluid" alt="Front of business"></div>
                <div class="card-body">
                    <h5 class="card-title">{{ $business->name }}</h5>
                    <small class="text-muted">{{ $business->address }}</small>
                    <p class="card-text">{{ $business->about }}</p>
                    <a href="/dashboard/appointments/create/{{ $business->id }}" class="btn btn-primary">Book Appointment</a>
                </div>
            </div>  
        </div>
        @endforeach
    </div>
</div>
@endsection