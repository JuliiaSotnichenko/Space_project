@extends('BackOffice.bop-template')

@section('title','Pakage | All Pakage')
@section('style')
<link href="{{ asset('css/backend.css') }}" rel="stylesheet">

@endsection

@section('content')
@if($message = Session::get('success'))
<strong class="success">
    <img src="/images/done.png" alt="img">
    <p>Well Done</p>
    <p>{{$message}}</p>
    <a href="{{ url('/fligth/Allfligth') }}">Continue</a>
</strong>
@endif

@if(count($allFligth) > 0)



<div class=" bigCard ">
    @foreach($allFligth as $fligth)
    <div class="maincard">
        <div class="titlepak">
            {{$fligth->itinerary}}
        </div>
        <div class="cardcontent">
            <div class="cardImag">
                <img src="../uploads/{{$fligth->file}}" alt="">
            </div>
            <div class="carddesc">
                <span>Launch Location:</span> {{$fligth->location}}
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

            </div>

        </div>


        <div>

            <span>Ref </span> {{$fligth->fly_ref}}

        </div>



        <div class="butlink">

            <a class="" href="{{ url('/fligth/editFligth', $fligth->id) }}">Edit</a>
            <br>
            <button class="deletbut" value="{{$fligth->id}}">Delete</button>

        </div>
    </div>
</div>
@endforeach
@endif
@endsection

@section('script')
<script>
    $(function() {
        $('.deletbut').click(function(e) {
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