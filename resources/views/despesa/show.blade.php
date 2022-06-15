@extends('layouts.app')
@section('content')

    <div class="container">
        <div class="row">

            <a href="/{{ Auth::user()->id }}/despesa" class="btn btn-outline-secondary"> Voltar </a>

            <h1> {{$post -> nome}} </h1>

            <p> {!!$post -> quantidade!!} €</p>

            <hr>

            <a href="/{{ Auth::user()->id }}/despesa/{{$post -> id}}/edit" class="btn btn-outline-secondary"> Editar </a>

            <br><br>

            <form id="delete-frm" action="" method="POST">

                @method('DELETE')
                @csrf

                <button class="btn btn-danger" style="margin-top: 1%;"> Remover </button>

            </form>

        </div>
    </div>

@endsection
