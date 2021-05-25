@extends('BackOffice.bop-template')

@section('title','Pakage | Add Pakage')

<style>
    .success {
        background-color: #fff;
        color: #243B7B;
        position: absolute;
        width: 400px;
        top: 200px;
        left: 450px;
        text-align: center;
        padding: 20px;
        border-radius: 5px;
        box-shadow: 10px 10px 10px 5px black;


    }

    .success a {
        padding: 5px 20px;
        color: white;
        background-color: blue;
        border-radius: 10px;
        text-decoration: none;
    }

    .success a:hover {
        box-shadow: 5px 5px 5px black;
        color: white;
    }

    .success img {
        width: 80px;
    }
</style>



@section('content')
@if($message = Session::get('success'))
<strong class="success">
    <img src="/images/done.png" alt="img">
    <p>Well Done</p>
    <p>{{$message}}</p>
    <a href="{{ url('/fligth/InsertFligth') }}">Continue</a>
</strong>
@endif
<h2> fligth insert form</h2>
<div>
    @if($message=Session::get('success'))
    <div>
        {{$message}}
    </div>
    @endif
    <form action="" method="post" enctype="multipart/form-data">
        @csrf
        <div>
            <label for="">Fly Ref</label>
            <input id="fly" name="flyref" type="text" placeholder="Fly Ref: ex:A1">

        </div>
        <div>
            <label for="fitinerary">Itinerary</label>
            <select name="itinerary" id="fitinerary">
                <option value="Orbital Hotel">Orbital Hotel</option>
                <option value="Space Station V">Space Station V</option>
                <option value="Floshton Paradise">Floshton Paradise</option>
            </select>

        </div>
        <div>
            <label for="dod">Date of Departe</label>
            <input id="dod" name="dateOfDepart" type="date">

        </div>
        <div>
            <label for="tod">Time of Departe</label>
            <input id="tod" name="timeOfDepart" type="time">

        </div>
        <div>
            <label for="doa">Date of Arrival</label>
            <input id="doa" name="dateOfArrival" type="date">

        </div>
        <div>
            <label for="toa">time of Arrival</label>
            <input id="toa" name="timeOfArrival" type="time">
        </div>
        <div>
            <label for="flocation">Location</label>
            <select name="location" id="flocation">
                <option value="Baikonur Cosmodrome">Baikonur Cosmodrome</option>
                <option value="Kennedy Space Center">Kennedy Space Center</option>
                <option value="Boca Chica Starbase">Boca Chica Starbase</option>
                <option value="Guiana Space Center Kourou">Guiana Space Center Kourou</option>
            </select>
        </div>
        <div>
            <label for="disc">Discriptian</label>
            <textarea name="fdisc" id="disc" placeholder="Fly Discriptian"></textarea>
        </div>
        <div>
            <label for="ffile">Upload Fly Pictures</label>
            <input name="file" id="ffile" type="file">
        </div>
        <div>
            <label for="tprice">Price</label>
            <select name="price" id="tprice">
                <option value="799000">799.000€</option>
                <option value="1249000">1.249.000€</option>
                <option value="5899000">5.899.000€</option>


            </select>

        </div>
        <div>
            <input type="submit" value="Add Fligth">
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
@endsection