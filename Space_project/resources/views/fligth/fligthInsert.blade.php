<h2> fligth insert form</h2>
<div>
    <form action="" method="post">
        @csrf
        <div>
            <label for="">Fly Ref</label>
            <input id="fly" name="flyref" type="text" placeholder="Fly Ref: ex:A1">

        </div>
        <div>
            <label for="fitinerary">Itinerary</label>
            <select name="itinerary" id="fitinerary">
                @foreach($data as $row)
                <option value="{{$row->id}}">{{$row->name}}</option>
                @endforeach
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
                @foreach($selBox as $row)
                <option value="{{$row->id}}">{{$row->lauch_location}}</option>
                @endforeach
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