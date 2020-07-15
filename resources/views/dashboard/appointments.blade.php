@extends('index')
@section('title', 'Appointments')
@section('content')
<div class="container mt-5">
    <h2>Your Appointments</h2>
    <table class="table mt-3">
        <thead>
            <tr>
            <th scope="col">Business</th>
            <th scope="col">Start</th>
            <th scope="col">End</th>
            <th scope="col">Type</th>
            <th scope="col">Price</th>
            <th scope="col">Manage</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($appointments as $appointment)
            <tr>
                {{-- <td>{{ $user_id = \Auth::user()->getUserInfo()['sub'];</td>
                <td>$reservation->user_id = $user_id;</td> --}}
                <td>{{ $appointment->service->business['name'] }}</td>
                <td>{{ $appointment->start }}</td>
                <td>{{ $appointment->end }}</td>
                <td>{{ $appointment->service['type'] }}</td>
                <td>${{ $appointment->service['price'] }}</td>
            <td><a href="/dashboard/appointments/{{ $appointment->id }}/edit" class="btn btn-sm btn-success">Edit</a></td>
            </tr>
            @endforeach          
        </tbody>
    </table>
    @if(!empty(Session::get('success')))
        <div class="alert alert-success"> {{ Session::get('success') }}</div>
    @endif
    @if(!empty(Session::get('error')))
        <div class="alert alert-danger"> {{ Session::get('error') }}</div>
    @endif
</div>
@endsection