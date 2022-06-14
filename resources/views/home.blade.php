@extends('layouts.app')
@section('content')

    <div class="container">
        <div class="row">
            <div class="col-12 text-center">

                <h1>{{ config('app.name') }}</h1>

                @if (Auth::user() != null)

                    <p>Para ver as despesas clique no botão</p>
                    <a href="/despesa" class="btn btn-outline-primary"> Ver Despesas </a>
                    <br>

                    <a href="{{ route('logout.perform') }}" class="btn btn-outline-primary" style="margin: 1vh"> Logout </a>

                @else
                    <a href="/login" class="btn btn-outline-primary" style="margin: 1vh"> Login </a>
                    <a href="/register" class="btn btn-outline-primary"> Registar </a>
                @endif
            </div>
        </div>
    </div>

@endsection
