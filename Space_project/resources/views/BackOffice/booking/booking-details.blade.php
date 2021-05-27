@extends('BackOffice.bop-template')

@section('title','Pakage | All Pakage')
@section('style')
<style>
    .success {
        background-color: #fff;
        color: #243B7B;
        position: absolute;
        top: 200px;
        transform: translateX(-50%);
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
    }

    .success img {
        width: 80px;
    }
</style>
@endsection

@section('content')
@if($message = Session::get('success'))
<strong class="success">
    <img src="/images/done.png" alt="img">
    <p>Well Done</p>
    <p>{{$message}}</p>
    <a href="{{ url('/dashboard') }}">Continue</a>
</strong>
@endif

@if(count($allBookings) > 0)

@foreach($allBookings as $booking)
<div class="container">
    <div class="for">
        <div>
            <div class="t3">
                <h2>User</h2>
            </div>

            <p><span>First Name - </span>{{$booking->user->first_name}}</p>
            <p><span>Last Name - </span>{{$booking->user->last_name}}</p>
            <p><span>Email - </span>{{$booking->user->email}}</p>
            <p><span>Country - </span>{{$booking->user->country}}</p>
            <p><span>training Status - </span>{{$booking->user->training_status}}</p>
        </div>
        <div>
            <h2 class="t3"> Pakage</h2>
            <p><span>Departe - </span>{{$booking->flight->depart_date}} at {{$booking->flight->depart_time}}</p>
            <p><span>Arrival - </span>{{$booking->flight->arrival_date}} at {{$booking->flight->arrival_time}}</p>
            <p><span>Itinerary - </span>{{$booking->flight->itinerary}}</p>
            <p><span>Location - </span>{{$booking->flight->location}}</p>
            {{$booking->flight->fly_ref}}

        </div>
    </div>
    <div class="butcont">
        <button class="btn btn-primary" value="{{$booking->id}}">Edit</button>
        <button class="btn btn-danger mbutton" value="{{$booking->id}}">Delete</button>
    </div>



</div>

@endforeach
@endif
@endsection

@section('script')
<script>
    $(function() {
        $('.mbutton').click(function(e) {
            let but = '/booking/form' + $(this).val()

            console.log(but)
            $.ajax({
                    url: but,
                    method: "post",
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                }).done(function(result) {
                    //console.log(result)
                    $('body').html(result)
                })
                .fail(function(result) {
                    console.log('Fail')

                })
        })
    });
</script>
@endsection