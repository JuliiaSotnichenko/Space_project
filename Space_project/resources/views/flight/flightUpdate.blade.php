@extends('BackOffice.bop-template')

@section('title','Package | Update Package')
@section('content')
<div>
    <h2> Package update </h2>
    <div>
        <form action="" method="post">
            @csrf
            <div>
                <label for="">Flight Ref</label>
                <input id="fly" name="flyref" type="text" placeholder="Fly Ref: ex:A1" value="{{$flight->fly_ref}}">

            </div>
            <div>
                <label for="fitinerary">Itinerary</label>
                <select name="itinerary" id="fitinerary">
                    <option value="{{$flight->itinerary}}">{{$flight->itinerary}}</option>
                    <option value="Earth">Earth</option>
                    <option value="Moon">Moon</option>
                    <option value="Mars">Mars</option>
                </select>


            </div>
            <div>
                <label for="dod">Date of Depart</label>
                <input id="dod" name="dateOfDepart" type="date" value="{{$flight->depart_date}}">

            </div>
            <div>
                <label for="tod">Time of Depart</label>
                <input id="tod" name="timeOfDepart" type="time" value="{{$flight->depart_time}}">

            </div>
            <div>
                <label for="doa">Date of Arrival</label>
                <input id="doa" name="dateOfArrival" type="date" value="{{$flight->arrival_date}}">

            </div>
            <div>
                <label for="toa">Time of Arrival</label>
                <input id="toa" name="timeOfArrival" type="time" value="{{$flight->arrival_time}}">
            </div>
            <div>
                <label for="flocation">Location</label>
                <select name="location" id="flocation">
                    <option value="{{$flight->location}}">{{$flight->location}}</option>
                    <option value="BBaikonur Kosmodroma">Baikonur Kosmodroma</option>
                    <option value="Cap Canaveral - Kennedy Space Center">Cap Canaveral - Kennedy Space Center</option>
                    <option value="Kourou Guiana Space Center">Kourou Guiana Space Center</option>
                </select>

            </div>
            <div>
                <label for="tprice">Price</label>
                <input id="tprice" name="price" type="text" value="{{$flight->price}}">
            </div>
            <div>
                <label for="disc">Description</label>
                <textarea name="fdisc" id="disc" placeholder="Flight Description">{{$flight->description}}</textarea>
            </div>

            <div>
                <input type="submit" value="Update Fligth">
            </div>
        </form>

        <div>
            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
        </div>

    </div>
</div>
@endsection
