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

@if(count($allFligth) > 0)

@foreach($allFligth as $fligth)


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

            <a href="{{ url('/fligth/editFligth', $fligth->id) }}">Edit</a>
            <button class="mybutton" value="{{$fligth->id}}">Delete</button>

        </div>
    </div>
</div>
@endforeach
@endif
@endsection

@section('script')
<script>
    $(function() {
        $('.mybutton').click(function(e) {
            let but = '/fligth/deleteFligth/' + $(this).val()

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