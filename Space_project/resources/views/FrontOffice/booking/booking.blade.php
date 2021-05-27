@extends('templates/template')
<meta name="_token" content="{{ csrf_token() }}">
<!-- Style -->
@section('style')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
<link href="{{ asset('css/booking.css') }}" rel="stylesheet">
@endsection
@section('title', 'Pakages')


@section('content')


<div class="container">
<div class="row">
<div class="panel panel-default">
<div class="panel-heading">
<h3>Packages info </h3>
</div>
<div class="panel-body">
    <div class="form-group">
        <input type="text" class="form-controller" id="search" name="search"></input>
    </div>
<table class="table table-bordered table-hover">
<thead>
<tr>
<th>ID</th>
<th>Packages Name</th>
<th>Accomodation</th>
<th>Price</th>
</tr>
</thead>
<tbody>
</tbody>
</table>
</div>
</div>
</div>
</div>



@if(count($allFligth) > 0)
<div class="titleh2">
    <h1> Pakages</h1>
</div>
<div class="bigcard">
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
</div>
@endif
@endsection


<script type="text/javascript">
$('#search').on('keyup',function(){
$value=$(this).val();
$.ajax({
type : 'get',
url : "{{URL('/search')}}",
data:{'search':$value},
success:function(data){
$('tbody').html(data);
}
});
})
</script>
<script type="text/javascript">
$.ajaxSetup({ headers: { 'csrftoken' : '{{ csrf_token() }}' } });
</script>


@section('script')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
@endsection