<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreFlightRequest;

use App\Models\Flight;
use App\Models\Fligth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FligthController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $allFligth = Flight::all();
        return view('/flight/flightAll', ['allFligth' => $allFligth]);
    }
    public function indexfront()
    {
        $allFligth = Flight::all();
        return view('/FrontOffice/booking/booking', ['allFligth' => $allFligth]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('flight/flightInsert');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreFlightRequest $request)
    {

        $request->validated();

        $flight = new Flight();

        $flight->depart_date = $request->dateOfDepart;
        $flight->depart_time = $request->timeOfDepart;
        $flight->arrival_date = $request->dateOfArrival;
        $flight->arrival_time = $request->timeOfArrival;
        $flight->fly_ref = $request->flyref;
        $flight->itinerary = $request->itinerary;
        $flight->location = $request->location;
        $flight->price = $request->price;
        $flight->description = $request->fdisc;


        $fileName = $request->itinerary . '_' . time() . '.' . $request->file->extension();
        $public_path = public_path('uploads');
        $request->file->move($public_path, $fileName);

        $flight->file = $fileName;

        $flight->save();
        // Redirect fligth page and send information through session
        return redirect('/fligth/InsertFligth')->with('success', $request->fly_ref . ' Pakage created successfully.');

        /************************************ */
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $flight = Flight::find($id);

        return view('FrontOffice/booking/bookingdetail', ['flight' => $flight]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $updateForm = Flight::find($id);

        return view('flight/flightUpdate', ['flight' => $updateForm]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StoreFlightRequest $request, $id)
    {
        //Validation
        $request->validated();
        $flight = Flight::find($id);

        $flight->depart_date = $request->dateOfDepart;
        $flight->depart_time = $request->timeOfDepart;
        $flight->arrival_date = $request->dateOfArrival;
        $flight->arrival_time = $request->timeOfArrival;
        $flight->itinerary = $request->itinerary;
        $flight->location = $request->location;
        $flight->fly_ref = $request->flyref;
        $flight->description = $request->fdisc;
        $flight->price = $request->price;
        $flight->save();

        return redirect('/flight/AllFlight');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $result = Flight::destroy($id);

        if ($result)
            return redirect('/flight/AllFlight')->with('success', 'Flight deleted successfully.');
    }
}
