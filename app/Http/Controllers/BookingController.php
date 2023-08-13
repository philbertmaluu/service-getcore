<?php

namespace App\Http\Controllers;
use Carbon\Carbon;
use App\Models\subscribe;
use Illuminate\Http\Request;
use Spatie\GoogleCalendar\Event;
use Illuminate\Support\Facades\Auth;

class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = new subscribe;

        $data->name = $request->name;
        $data->service_name = $request->service_name;
        $data->date = $request->date;
        $data->time = $request->time;
        $data->duration = $request->duration;

        if(Auth::user()->user_type==0){
        $data->status = "Wait for email notification";
        }else{
        $data->status = "Send me email notification";  
        }
        $data->user_id = Auth::user()->id; 

        $data->save();
        
        //return redirect()->back();

        $startTime = Carbon::parse($request->input('date').' '.$request->input('time'),'Africa/Nairobi');
        $endTime  = (clone $startTime)->addHour();

        Event::create([
            'name'=> $request->input('name'),
            'startDateTime'=> $startTime,
            'endDateTime'=> $endTime,
        ]);
        return redirect()->back()->with('message','Service booked');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
