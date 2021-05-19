<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreFligthRequest;
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
        //
        //$allFligth = Fligth::all();
        $allFligth = DB::table('fligths')
            ->join('itineraries', 'fligths.itinerary_id', '=', 'itineraries.id')
            ->join('locations', 'fligths.location_id', '=', 'locations.id')
            ->select('fligths.*', 'itineraries.name', 'locations.lauch_location')
            ->get();

        return view('/fligth/fligthAll', ['allFligth' => $allFligth]);
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
        //1. create new flower
        $fligth = new Fligth();
        //2. set properties of the fligth
        $fligth->depart_date = $request->dateOfDepart;
        $fligth->depart_time = $request->timeOfDepart;
        $fligth->arrival_date = $request->dateOfArrival;
        $fligth->arrival_time = $request->timeOfArrival;
        $fligth->fly_ref = $request->flyref;
        $fligth->itinerary = $request->itinerary;
        $fligth->location = $request->location;

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
        //return view('/fligth/fligthUpdate');
        $updateForm = Fligth::find($id);
        // DB::table('fligths')
        // ->join('itineraries', function ($join) {
        //     $join->on('fligths.itinerary_id', '=', 'itineraries.id')
        //          ->where('fligths.id', '=', '$id');
        // })
        // ->get();

        // $updateForm = DB::table('fligths')
        //     ->join('itineraries', 'fligths.itinerary_id', '=', 'itineraries.id')
        //     ->join('locations', 'fligths.location_id', '=', 'locations.id')
        //     ->select('fligths.*', 'itineraries.name', 'locations.lauch_location')
        //     ->where('fligths.id', '=', $id)
        //     ->get();

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
        $valid = $request->validated();


        //send to data base
        $uploadDBFlower = DB::update('UPDATE flowers SET name = ?, price = ?, type=? WHERE id = ?', [$request->name, $request->price, $request->type, $id]);
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

        $result = Fligth::destroy($id);

        if ($result)
            return redirect('/fligth/Allfligth')->with('success', 'Fligth deleted successfully.');
    }
}
