<style>

    
</style>





@foreach($allFligth as $fligth)

<div class="card mycard" style="width: 18rem;">
        <div class="imag">
            <img src="uploads/{{$fligth->file}}" class="card-img-top" alt="...">
        </div>
        <div class="card-body bodyCard">
            <h3 class="card-title">Pakage to {{$fligth->itinerary}}</h3>
            <h5 class="card-subtitle mb-2 text-muted">Fly Ref: {{$fligth->fly_ref}}</h5>
            <p class="card-text"><span>Depart :</span> {{$fligth->depart_date}} at {{$fligth->depart_time}}</p>
            <a href="{{ url('/bookingDitail', $fligth->id) }}">Details</a>
        </div>
    </div>
    @endforeach
     
  


 
 



