@extends('BackOffice.bop-template')

@section('title','Pakage | Add Pakage')


@section('content')
@if($message = Session::get('success'))
<strong class="success">
    <img src="/images/done.png" alt="img">
    <p>Well Done</p>
    <p>{{$message}}</p>
    <a href="{{ url('/fligth/InsertFligth') }}">Continue</a>
</strong>
@endif

<div>
    @if($message=Session::get('success'))
    <div>
        {{$message}}
    </div>
    @endif

    <div class="container">
        <div class="bgform">

            <h2 class="t2"> Insert Pakage</h2>
            <div class="row rowall">
                <div class="col "></div>
                <div class="col">
                    <form action="" method="post" enctype="multipart/form-data">
                        @csrf
                        <div>
                            <label class="form-label fon" for="">Fly Ref</label>
                            <input class="form-control" id="fly" name="flyref" type="text" placeholder="Pakage Ref: ex:A1">

                        </div>
                        <div>
                            <label class="form-label fon" for="fitinerary">Itinerary</label>
                            <select class="form-select" name="itinerary" id="fitinerary">
                                <option value="Orbital Hotel">Orbital Hotel</option>
                                <option value="Space Station V">Space Station V</option>
                                <option value="Floshton Paradise">Floshton Paradise</option>
                            </select>

                        </div>
                        <div>
                            <label class="form-label fon" for="dod">Date of Departe</label>
                            <input class="form-control" id="dod" name="dateOfDepart" type="date">

                        </div>
                        <div>
                            <label class="form-label fon" for="tod">Time of Departe</label>
                            <input class="form-control" id="tod" name="timeOfDepart" type="time">

                        </div>
                        <div>
                            <label class="form-label fon" for="doa">Date of Arrival</label>
                            <input class="form-control" id="doa" name="dateOfArrival" type="date">

                        </div>
                        <div>
                            <label class="form-label fon" for="toa">time of Arrival</label>
                            <input class="form-control" id="toa" name="timeOfArrival" type="time">
                        </div>
                        <div>
                            <label class="form-label fon" for="flocation">Location</label>
                            <select class="form-select" name="location" id="flocation">
                                <option value="Baikonur Cosmodrome">Baikonur Cosmodrome</option>
                                <option value="Kennedy Space Center">Kennedy Space Center</option>
                                <option value="Boca Chica Starbase">Boca Chica Starbase</option>
                                <option value="Guiana Space Center Kourou">Guiana Space Center Kourou</option>
                            </select>
                        </div>
                        <div>
                            <label class="form-label fon" for="disc">Discriptian</label>
                            <textarea class="form-control" name="fdisc" id="disc" placeholder="Fly Discriptian"></textarea>
                        </div>
                        <div>
                            <label class="form-label fon" for="ffile">Upload Fly Pictures</label>
                            <input class="form-control" name="file" id="ffile" type="file">
                        </div>
                        <div>
                            <label class="form-label fon" for="tprice">Price</label>
                            <select class="form-select" name="price" id="tprice">
                                <option value="799000">799.000€</option>
                                <option value="1249000">1.249.000€</option>
                                <option value="5899000">5.899.000€</option>


                            </select>

                        </div>
                        <div class="butdiv">
                            <input class="btn btn-lg btn-info" type="submit" value="Save ">
                        </div>
                    </form>
                </div>
                <div class="col"></div>

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
@endsection