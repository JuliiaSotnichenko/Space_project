@extends('templates.template')

@section('title','Fligth | All Fligth')


<p>
    <style>
        .card {
            color: black;
        }
    </style>
<div class=" card">
    <div class="">
        <div>
            <span>id :</span> {{$fligth->id}}<br>
            <span>Reference :</span> {{$fligth->fly_ref}}
        </div>

        <div>
            <span>Itinerary:</span> {{$fligth->itinerary}}
            <br>
            <span>launch Location:</span> {{$fligth->location}}

        </div>
        <div>
            <span>Depart date:</span> {{$fligth->depart_date}}
            <br>
            <span>Arrival date:</span> {{$fligth->arrival_date}}
            <br>

        </div>
        <div>
            <span>Departe time:</span> {{$fligth->depart_time}}
            <br>
            <span>Arrival time:</span> {{$fligth->arrival_time}}
        </div>
        <div>

            <a href="{{ url('', $fligth->id) }}">Bay</a>
            <!-- go to payment page and insert in the data base -->


        </div>

    </div>

</div>