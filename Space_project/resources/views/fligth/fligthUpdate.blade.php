<h2> fligth insert form</h2>
<div>
    <form action="" method="post">
        @csrf
        <div>
            <label for="">Fly Ref</label>
            <input id="fly" name="flyref" type="text" placeholder="Fly Ref: ex:A1" value="{{$fligth->fly_ref}}">

        </div>
        <div>
            <label for="fitinerary">Itinerary</label>


        </div>
        <div>
            <label for="dod">Date of Departe</label>
            <input id="dod" name="dateOfDepart" type="date" value="{{$fligth->depart_date}}">

        </div>
        <div>
            <label for="tod">Time of Departe</label>
            <input id="tod" name="timeOfDepart" type="time" value="{{$fligth->depart_time}}">

        </div>
        <div>
            <label for="doa">Date of Arrival</label>
            <input id="doa" name="dateOfArrival" type="date" value="{{$fligth->arrival_date}}">

        </div>
        <div>
            <label for="toa">time of Arrival</label>
            <input id="toa" name="timeOfArrival" type="time" value="{{$fligth->arrival_time}}">
        </div>
        <div>
            <label for="flocation">Location</label>

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