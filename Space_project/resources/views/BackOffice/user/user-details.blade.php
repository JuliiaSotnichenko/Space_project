<!-- Template include -->
@extends('BackOffice.bop-template')
<!-- Tab title -->
@section('title', 'User Details')
<!-- Section to inject to template -->
@section('content')

<style>
    main{
        height: 85vh;
    }
    .deleteButton{
        color: maroon;
    }

</style>



    <!-- User's info display -->
    <h2>User detail</h2>
    <hr>
    <li>Firstname: {{ $user->first_name }}</li>
    <li>Lastname: {{ $user->last_name }}</li>
    <li>Email: {{ $user->email }}</li>
    <li>Country: {{ $user->country }}</li>
    <li>Training Status: {{ $user->training_status }}</li>
    <!-- User's info edit button -->
    <li><a href="{{ url('/admin/edit/user', $user->id) }}">Edit User</a></li>
    <!-- Delete User button -->
    <li><button class="deleteButton" value="{{$user->id}}">Delete</button></li>
    <!-- Delete User Ajax logic -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script>
    $(function() {
        $('.deleteButton').click(function(e) {

        let route = '/delete/user/' + $(this).val();
        console.log(route);

            $.ajax({
                url: route,
                method: 'delete',
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            }).done(function(result) {
                console.log(result);
            }).fail(function(result) {
                console.log('Fail');
            });
        });
    });
</script>
@endsection


