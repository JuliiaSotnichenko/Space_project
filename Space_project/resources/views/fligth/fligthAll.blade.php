@extends('BackOffice.bop-template')

@section('title','Fligth | All Fligth')

@section('content')

@if(count($allFligth) > 0)

@foreach($allFligth as $fligth)

    <style>
        .card {
            color: black;
        }
    </style>
<div class=" card">
    <div class="">
        <div>
            <img src="../uploads/{{$fligth->file}}" alt="">
        </div>
        <div>

            <span>Reference :</span> {{$fligth->fly_ref}}

        </div>

        <div>
            <span>Itinerary:</span> {{$fligth->itinerary}}
            <br>
            <span>Launch Location:</span> {{$fligth->location}}

        </div>
        <div>
            <span>Date of departure:</span> {{$fligth->depart_date}}
            <br>
            <span>Arrival date:</span> {{$fligth->arrival_date}}
            <br>

        </div>
        <div>
            <span>Departure time:</span> {{$fligth->depart_time}}
            <br>
            <span>Arrival time:</span> {{$fligth->arrival_time}}
        </div>
        <div>
            <span>Price:</span> {{$fligth->price}}
        </div>
        <div>
            <span>Description:</span> {{$fligth->description}}
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
            let but = '/fligth/deleteFligth/' + $(this).val()


            console.log(but)
            $.ajax({
                    url: but,
                    method: "delete",
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
