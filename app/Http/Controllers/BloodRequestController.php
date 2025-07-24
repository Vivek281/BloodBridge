<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Blood_Requests;

class BloodRequestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
            $request = Blood_Requests::paginate(50);
        return view('controls.requests.requestView', compact('request'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
               $request->validate([
                'blood_group' => 'required|string|in:A+,A-,B+,B-,AB+,AB-,O+,O-',
                'units' => 'required|numeric|max:45',
                'hospital_name' => 'required|string|max:255 ',
                'urgency_level' => 'required|string|in:low,medium,high',
                'location' => 'required|string|max:255 ',
            ]);

            // Create user
            $blood_requests = Blood_Requests::create([
                'user_id' => auth()->id(), // Get the ID of the logged-in user
                'blood_group' => $request->blood_group,
                'units' => $request->units,
                'hospital_name' => $request->hospital_name,
                'urgency_level' => $request->urgency_level,
                'location' => $request->location,
            ]);

            return redirect()->route('frontend.index')->with('request_success', 'Requested Successfully.'); 
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
