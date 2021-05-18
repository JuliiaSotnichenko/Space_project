<form action="" method="post">
    @csrf
    <div>
        <label for="">Fly Ref</label>
        <input id="fly" name="flyref" type="text" value="{{$upShow->fly_ref}}">

    </div>
    <div>
        <label for="fitinerary">Itinerary</label>


    </div>
    <div>
        <label for="dod">Date of Departe</label>
        <input id="dod" name="dateOfDepart" type="date" value="{{$upShow->name}}">

    </div>

    <div>
        <label for="tod">Time of Departe</label>
        <input id="tod" name="timeOfDepart" type="time" value="{{$upShow->name}}>

    </div>
    <div>
        <label for=" doa">Date of Arrival</label>
        <input id="doa" name="dateOfArrival" type="date" value="{{$upShow->name}}>

    </div>
    <div>
        <label for=" toa">time of Arrival</label>
        <input id="toa" name="timeOfArrival" type="time" value="{{$upShow->name}}>
    </div>
    <div>
        <label for=" flocation">Location</label>

    </div>
    <div>
        <input type="submit" value="Add Fligth">
    </div>
</form>
<div>
    <button>Edite Fligth</button>
    <button>Delete Fligth</button>
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