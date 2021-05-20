<h2>all pakage for the user </h2>
@if(count($allFligth) > 0)

@foreach($allFligth as $fligth)

<div class="card" style="width: 18rem;">
    <img src="uploads/{{$fligth->file}}" class="card-img-top" alt="...">
    <div class="card-body">
        <h5 class="card-title">Fly to {{$fligth->itinerary}}</h5>
        <h6 class="card-subtitle mb-2 text-muted">Fly Ref: {{$fligth->fly_ref}}</h6>
        <p class="card-text"><span>Depart date:</span> {{$fligth->depart_date}}</p>
        <p class="card-text"><span>Departe time:</span> {{$fligth->depart_time}}</p>
        <a href="{{ url('/bookingditail', $fligth->id) }}">Details</a>
    </div>
</div>
<hr>

@endforeach
@endif