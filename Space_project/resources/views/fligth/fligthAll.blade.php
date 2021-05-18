@section('title','Fligth | All Fligth')


@if(count($allFligth) > 0)

@foreach($allFligth as $fligth)
<p>
<div class=" ">
    <div class="">
        <div>
            <span>Reference :</span> {{$fligth->fly_ref}}
        </div>

        <div>
            <span>Itinerary:</span> {{$fligth->name}}
            <br>
            <span>launch Location:</span> {{$fligth->lauch_location}}

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
            <a href="">Edit</a>
            <a href="">Delete</a>

        </div>

    </div>

</div>



@endforeach
@endif


@section('script')
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous">
</script>
<script>
    $(function() {
        $('.mybutton').click(function(e) {
            let but = 'deletFlower/' + $(this).val()

            //console.log(but)
            $.ajax({
                    url: but,
                    method: "get",
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