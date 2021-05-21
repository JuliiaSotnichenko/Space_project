 <h2>all Package</h2>

 @foreach($allFligth as $fligth)

 <div class="card" style="width: 18rem;">
     <img src="..." class="card-img-top" alt="...">
     <div class="card-body">
         <h5 class="card-title">{{$fligth->itinerary}}</h5>
         <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
         <a href="#" class="btn btn-primary">Go somewhere</a>
     </div>
 </div>
 @endforeach