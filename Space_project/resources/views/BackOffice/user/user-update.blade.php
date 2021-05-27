@extends('BackOffice.bop-template')

@section('title', 'Update User')

@section('content')

<div class="container">
    <div class="bgform">
        <h2 class="t2">Update user</h2>
        <div class="row rowall">

            <div class="col">
                <form action="" method="POST">
                    @csrf
                    <div>
                        @method('PUT')
                        <!-- Update Firstname -->
                        <input class="form-control" type="text" name="first_name" placeholder="First name" value="{{$user->first_name}}"><br>
                        @error('firstname')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror

                    </div>
                    <div>

                        <!-- Update Lastname -->
                        <input class="form-control" type="text" name="last_name" placeholder="Lastname" value="{{$user->last_name}}"><br>
                        @error('lastname')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div>
                        <!-- Update Country -->
                        <input class="form-control" type="text" name="country" placeholder="Country" value="{{$user->country}}"><br>
                        @error('country')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror

                    </div>
                    <div>
                        <!-- Update Email -->
                        <input class="form-control" type="text" name="email" placeholder="Email" value="{{$user->email}}"><br>
                        @error('email')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror

                    </div>
                    <div>
                        <select class="form-select" name="training_status" id="training_status">
                            <option value="Pre-Training">Pre-Training</option>
                            <option value="Training Phase 1">Training Phase 1</option>
                            <option value="Training Phase 2">Training Phase 2</option>
                            <option value="Training Phase 3">Training Phase 3</option>
                            <option value="Training Complete">Training Complete</option>
                            <option value="Training Approved">Training Approved</option>

                        </select>
                        @error('training_status')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror

                    </div>
                    <div>
                        <input class="btn btn-lg btn-info" type="submit" value="INSERT">

                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection