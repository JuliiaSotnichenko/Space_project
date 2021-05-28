@extends('BackOffice.bop-template')

@section('title','Pakage | Update Pakage')
@section('style')
<link href="{{ asset('css/backend.css') }}" rel="stylesheet">

@endsection
@section('content')
<div class="container">
    <div class="bgform">
        <h2 class="t2"> Update Packages </h2>
        <div class="row rowall">

            <div class="col">
                <form action="" method="post">
                    @csrf
                    <div>
                        <label for="">Fly Ref</label>
                        <input class="form-control" id="fly" name="flyref" type="text" placeholder="Fly Ref: ex:A1" value="{{$fligth->fly_ref}}">

                    </div>
                    <div>
                        <label for="fitinerary">Itinerary</label>
                        <select class="form-select" name="itinerary" id="fitinerary">
                            <option value="{{$fligth->itinerary}}">{{$fligth->itinerary}}</option>
                            <option value="Orbital Hotel">Orbital Hotel</option>
                            <option value="Space Station V">Space Station V</option>
                            <option value="Floshton Paradise">Floshton Paradise</option>
                        </select>


                    </div>
                    <div>
                        <label for="dod">Date of Departure</label>
                        <input class="form-control" id="dod" name="dateOfDepart" type="date" value="{{$fligth->depart_date}}">

                    </div>
                    <div>
                        <label for="tod">Time of Departure</label>
                        <input class="form-control" id="tod" name="timeOfDepart" type="time" value="{{$fligth->depart_time}}">

                    </div>
                    <div>
                        <label for="doa">Date of Arrival</label>
                        <input class="form-control" id="doa" name="dateOfArrival" type="date" value="{{$fligth->arrival_date}}">

                    </div>
                    <div>
                        <label for="toa">Time of Arrival</label>
                        <input class="form-control" id="toa" name="timeOfArrival" type="time" value="{{$fligth->arrival_time}}">
                    </div>
                    <div>
                        <label for="flocation">Location</label>
                        <select class="form-select" name="location" id="flocation">
                            <option value="{{$fligth->location}}">{{$fligth->location}}</option>
                            <option value="Baikonur Cosmodrome">Baikonur Cosmodrome</option>
                            <option value="Kennedy Space Center">Kennedy Space Center</option>
                            <option value="Boca Chica Starbase">Boca Chica Starbase</option>
                        </select>

                    </div>
                    <div>
                        <label for="tprice">Price</label>
                        <select class="form-select" name="price" id="tprice">
                            <option value="{{$fligth->price}}">{{$fligth->price}}</option>
                            <option value="799000">799.000€</option>
                            <option value="1249000">1.249.000€</option>
                            <option value="5899000">5.899.000€</option>


                        </select>
                    </div>
                    <div>
                        <label for="disc">Description</label>
                        <textarea class="form-control" name="fdisc" id="disc" placeholder="Flight Description">{{$fligth->description}}</textarea>
                    </div>

                    <div class="butdiv">
                        <input class="btn btn-lg btn-info" type="submit" value="Update Package">
                    </div>
                </form>




            </div>

        </div>
    </div>
</div>

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