@extends('layouts.app')
@section('content')

    <div class="container">
        <div class="row">
            <div class="col-12 text-center">

                <h1>{{ config('app.name') }}</h1>

                <p>Para ver as despesas clique no botão</p>
                <a href="/despesa" class="btn btn-outline-primary"> Ver Despesas </a>

            </div>
        </div>
    </div>

@endsection
