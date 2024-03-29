@extends('layouts.app')
@section('content')
    <h1 style="text-align: center">Registar</h1>
    <form method="POST" action="{{route('register.perform')}}" style="width: 20vw; margin-left: 40vw; margin-top: 3vh">

        @csrf

        <div class="form-group">
            <label for = "name"> Name </label>
            <input type = "text" id="name" name = "name" placeholder = "name" class = "form-control" value="{{old('name')}}">

            @if ($errors -> has('name'))
                <span class = "text-danger"> {{$errors -> first('name')}} </span>
            @endif
        </div>

        <div class="form-group">
            <label for = "email"> Email </label>
            <input type = "email" id="email" name = "email" placeholder = "email" class = "form-control" value="{{old('email')}}">

            @if ($errors -> has('email'))
                <span class = "text-danger"> {{$errors -> first('email')}} </span>
            @endif
        </div>

        <div class="form-group">
            <label for = "password"> Password </label>
            <input type = "password" id="password" name = "password" class = "form-control"">

            @if ($errors -> has('password'))
                <span class = "text-danger"> {{$errors -> first('password')}} </span>
            @endif
        </div>

        <div class="form-group">
            <label for = "password_confirmation"> Password Confirmation </label>
            <input type = "password" id="password_confirmation" name = "password_confirmation" class = "form-control">

            @if ($errors -> has('password_confirmation'))
                <span class = "text-danger"> {{$errors -> first('password_confirmation')}} </span>
            @endif
        </div>

        <button type = "submit" class = "btn btn-primary" style="margin-left: 40%; margin-top: 5%"> Register </button>

    </form>

@endsection
