@extends('layouts.app')
@section('content')

    <div class="container">
        <div class="row">
            <div class="col-12 text-center">

                <h1>{{ config('app.name') }}</h1>

                <p>Para ver as despesas clique no botão</p>
                <a href="/despesa" class="btn btn-outline-primary"> Ver Despesas </a>
                <br>
                @if (session()->has('email'))
                     <a href="/logout" class="btn btn-outline-primary" style="margin: 1vh"> Logout </a>
                @endif
                <a href="/login" class="btn btn-outline-primary" style="margin: 1vh"> Login </a>
                <a href="/register" class="btn btn-outline-primary"> Registar </a>

            </div>
        </div>
    </div>

@endsection
