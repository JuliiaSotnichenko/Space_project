<h2> fligth update form</h2>
<div>
    <form action="" method="post">
        @csrf
        <div>
            <label for="">Fly Ref</label>
            <input id="fly" name="flyref" type="text" placeholder="Fly Ref: ex:A1" value="{{$fligth->fly_ref}}">

        </div>
        <div>
            <label for="fitinerary">Itinerary</label>
            <select name="itinerary" id="fitinerary">
                <option value="{{$fligth->itinerary}}">{{$fligth->itinerary}}</option>
                <option value="Earth">Earth</option>
                <option value="Moon">Moon</option>
                <option value="Mars">Mars</option>
            </select>


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
            <select name="location" id="flocation">
                <option value="{{$fligth->location}}">{{$fligth->location}}</option>
                <option value="Baikonur Cosmodrome">Baikonur Cosmodrome</option>
                <option value="Kennedy Space Center">Kennedy Space Center</option>
                <option value="Boca Chica Starbase">Boca Chica Starbase</option>
            </select>

        </div>
        <div>
            <label for="tprice">Price</label>
            <input id="tprice" name="price" type="text" value="{{$fligth->price}}">
        </div>
        <div>
            <label for="disc">Discriptian</label>
            <textarea name="fdisc" id="disc" placeholder="Fly Discription">{{$fligth->description}}</textarea>
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