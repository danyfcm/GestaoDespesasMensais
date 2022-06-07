@extends('layouts.app')
@section('content')

    <form method="POST" action="{{route('login.perform')}}">

        @csrf
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
        </div>

        <button type = "submit" class = "btn btn-primary"> Login </button>

    </form>

@endsection
