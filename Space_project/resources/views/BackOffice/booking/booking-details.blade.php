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




<div class=" card">
    <div class="">

        <div>

            <span>Booking ID :</span> {{$booking->id}}
            <br>

            <span>Payment :</span> {{$booking->payment}}

        </div>

        <div>
            <span>Created:</span> {{$booking->created_at}}
            <br>
            <span>Updated:</span> {{$booking->updated_at}}

        </div>



    </div>
    <button class="mybutton" value="{{$booking->id}}">Delete</button>
</div>
</div>
@endforeach
@endif
@endsection

@section('script')
<script>
    $(function() {
        $('.mybutton').click(function(e) {
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