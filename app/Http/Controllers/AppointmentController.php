<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Appointment;
use App\Models\Business;
use App\Models\Service;

class AppointmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $appointments = Appointment::with('service', 'service.business')
            ->where('user_id', \Auth::user()->getUserInfo()['sub'])
            ->orderBy('start', 'asc')
            ->get();

        return view('dashboard.appointments')->with('appointments', $appointments);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($business_id)
    {
        $businessInfo = Business::with('services')->get()->find($business_id);

        return view('dashboard.appointmentCreate', compact('businessInfo'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $request->request->add(['user_id' => 1]);
        // Appointment::create($request->all());

        // return redirect('dashboard/appointments')->with('success', 'Appointment was created!');

        // Set the user_id equal to the user's Auth0 sub id before
        // Will be similar to "auth0|123123123123123"
        $user_id = \Auth::user()->getUserInfo()['sub'];
        $request->request->add(['user_id' => $user_id]);

        // Create the request
        Appointment::create($request->all());

        return redirect('dashboard/appointments')->with('success', 'Appointment was created!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Appointment $appointment)
    {


        $appointment = Appointment::with('service', 'service.business')
            ->get()
            ->find($appointment->id);

        if ($appointment->user_id === \Auth::user()->getUserInfo()['sub']) {
            $business_id = $appointment->service->business_id;
            $businessInfo = Business::with('services')->get()->find($business_id);

            return view('dashboard.appointmentSingle', compact('appointment', 'businessInfo'));

        } else

            return redirect('dashboard/appointments')->with('error', 'You are not authorized.');

    
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Appointment $appointment)
    {
        $appointment = Appointment::with('service', 'service.business')
            ->get()
            ->find($appointment->id);

        if ($appointment->user_id === \Auth::user()->getUserInfo()['sub']) {
            $business_id = $appointment->service->business_id;
            $businessInfo = Business::with('services')->get()->find($business_id);

            return view('dashboard.appointmentEdit', compact('appointment', 'businessInfo'));

        } else

            return redirect('dashboard/appointments')->with('error', 'You are not authorized.');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Appointment $appointment)
    {
        // $appointment->user_id = 1;

        // $appointment->save();

        if ($appointment->user_id != \Auth::user()->getUserInfo()['sub'])
            return redirect('dashboard/appointments')->with('error', 'You are not authorized to update this appointment');
        $user_id = \Auth::user()->getUserInfo()['sub'];
        $appointment->user_id = $user_id;
        $appointment->start = $request->start;
        $appointment->end = $request->end;
        $appointment->service_id = $request->service_id;

        $appointment->save();
        return redirect('dashboard/appointments')->with('success', 'Successfully updated your appointment!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Appointment $appointment)
    {
        $appointment = Appointment::find($appointment->id);

        if ($appointment->user_id != \Auth::user()->getUserInfo()['sub']) {
            $appointment->delete(); 


            return redirect('dashboard/appointments')->with('success', 'Successfully deleted your appointment!');
        } else

            return redirect('dashboard/appointments')->with('error', 'You are not able to delete this appointment!');
            

    }
}
