@extends('BackOffice.bop-template')

@section('title','Flight | All Flight')

@section('content')

@if(count($allFlight) > 0)

@foreach($allFlight as $flight)

    <style>
        .card {
            color: black;
        }
    </style>
<div class=" card">
    <div class="">
        <div>
            <img src="../uploads/{{$flight->file}}" alt="">
        </div>
        <div>

            <span>Reference :</span> {{$flight->fly_ref}}

        </div>

        <div>
            <span>Itinerary:</span> {{$flight->itinerary}}
            <br>
            <span>Launch Location:</span> {{$flight->location}}

        </div>
        <div>
            <span>Date of departure:</span> {{$flight->depart_date}}
            <br>
            <span>Arrival date:</span> {{$flight->arrival_date}}
            <br>

        </div>
        <div>
            <span>Departure time:</span> {{$flight->depart_time}}
            <br>
            <span>Arrival time:</span> {{$flight->arrival_time}}
        </div>
        <div>
            <span>Price:</span> {{$flight->price}}
        </div>
        <div>
            <span>Description:</span> {{$flight->description}}
        </div>
        <div>

            <a class="edit" href="{{ url('/fligth/editFligth', $fligth->id) }}">Edit</a>
            <button class="mybutton delete" value="{{$fligth->id}}">Delete</button>

        </div>

    </div>

</div>



@endforeach
@endif

@endsection


@section('script')
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous">
</script>
<script>
    $(function() {
        $('.mybutton').click(function(e) {
            let but = '/flight/deleteFlight/' + $(this).val()


            console.log(but)
            $.ajax({
                    url: but,
                    method: "delete",
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                }).done(function(result) {

                    $('body').html(result)
                })
                .fail(function(result) {
                    console.log('Fail')

                })
        })
    });
</script>
@endsection
