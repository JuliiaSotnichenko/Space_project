<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreFligthRequest;
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
        return view('/fligth/fligthAll', ['allFligth' => $allFligth]);
    }
    public function indexfront()
    {
        $allFligth = Flight::all();
        return view('/booking/booking', ['allFligth' => $allFligth]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('fligth/fligthInsert');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreFligthRequest $request)
    {

        $request->validated();

        $fligth = new Flight();

        $fligth->depart_date = $request->dateOfDepart;
        $fligth->depart_time = $request->timeOfDepart;
        $fligth->arrival_date = $request->dateOfArrival;
        $fligth->arrival_time = $request->timeOfArrival;
        $fligth->fly_ref = $request->flyref;
        $fligth->itinerary = $request->itinerary;
        $fligth->location = $request->location;


        $fileName = $request->itinerary . '_' . time() . '.' . $request->file->extension();
        $public_path = public_path('uploads');
        $request->file->move($public_path, $fileName);

        $fligth->file = $fileName;


        //3. Save the Flower : this will insert into db
        $fligth->save();
        // Redirect to flowers page and send information through session
        return redirect('/fligth/InsertFligth')->with('success', $request->fly_ref . ' was created successfully.');

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
        $fligth = Flight::find($id);

        return view('booking.bookingditail', ['fligth' => $fligth]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //return view('/fligth/fligthUpdate');
        $updateForm = Flight::find($id);

        return view('fligth/fligthUpdate', ['fligth' => $updateForm]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StoreFligthRequest $request, $id)
    {
        //validation
        $request->validated();
        $flay = Flight::find($id);

        $flay->depart_date = $request->dateOfDepart;
        $flay->depart_time = $request->timeOfDepart;
        $flay->arrival_date = $request->dateOfArrival;
        $flay->arrival_time = $request->timeOfArrival;
        $flay->itinerary = $request->itinerary;
        $flay->location = $request->location;
        $flay->fly_ref = $request->flyref;
        $flay->save();

        return redirect('/fligth/Allfligth');
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
            return redirect('/fligth/Allfligth')->with('success', 'Fligth deleted successfully.');
    }
}
