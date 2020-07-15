<!-- resources/views/dashboard/appointmentEdit.blade.php -->
@extends('index')
@section('title', 'Edit Appointment')
@section('content')
<div class="container">
    <div class="card my-5">
        <div class="card-header">
            <h2>{{ $businessInfo->name }} - <small class="text-muted">{{ $businessInfo->address }}</small></h2>
        </div>
        <div class="card-body">
            <h5 class="card-title"></h5>
            <p class="card-text">Book your appointment!</p>
            <form action="{{ route('appointments.update', $appointment->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="col-sm-8">
                        <div class="form-group">
                            <label for="service">Service Type</label>
                            <select class="form-control" name="service_id" value="{{ old('service_id', $appointment->service_id) }}">
                                @foreach ($businessInfo->services as $option)
                                    <option value="{{$option->id}}">{{ $option->type }} - ${{ $option->price }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="start">Start Time</label>
                            <input type="datetime-local" class="form-control" name="start" placeholder="03/21/2020" value="{{ old('start', $appointment->start) }}">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="end">End Time</label>
                            <input type="datetime-local" class="form-control" name="end" placeholder="03/23/2020 " value="{{ old('end', $appointment->end) }}">
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-lg btn-primary">Submit</button>
            </form>
        </div>
    </div>
    <form action="{{ route('appointments.destroy', $appointment->id) }}" method="POST">
        @method('DELETE')
        @csrf
        <p class="text-right">
            <button type="submit" class="btn btn-sm text-danger">Delete appointment</button>
        </p>
    </form>
</div>
@endsection