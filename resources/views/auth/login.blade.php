@extends('layouts.app')
@section('content')
    <h1 style="text-align: center">Login</h1>
    <form method="POST" action="{{route('login.perform')}}" style="width: 20vw; margin-left: 40vw; margin-top: 3vh">

        @csrf
        <div class="form-group">
            <label for = "username"> Email </label>
            <input type = "email" id="username" name = "username" placeholder = "email" class = "form-control" value="{{old('email')}}">

            @if ($errors -> has('username'))
                <span class = "text-danger"> {{$errors -> first('username')}} </span>
            @endif
        </div>

        <div class="form-group">
            <label for = "password"> Password </label>
            <input type = "password" id="password" name = "password" class = "form-control"">
        </div>

        <button type = "submit" class = "btn btn-primary" style="margin-left: 40%; margin-top: 5%"> Login </button>

    </form>

@endsection
