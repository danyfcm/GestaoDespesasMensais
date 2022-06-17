@extends('layouts.app')
@section('content')

    <div class="container">
        <div class="row">

            <a href="/{{ Auth::user()->id }}/despesa" class="btn btn-outline-secondary"> Voltar </a>

            <div class="card bg-dark border-light w-auto text-center mx-auto my-4">

                <div class="card-header"> <h3> {{$post -> nome}} </h3> </div>

                <div class="card-body"> <h5> Quantidade:</h5> <h6> {!!$post -> quantidade!!} € </h6> </div>
                <div class="card-body"> <h5> Data:</h5> <h6> {!!$post -> data!!} </h6> </div>

            </div>

            <a href="/{{ Auth::user()->id }}/despesa/{{$post -> id}}/edit" class="btn btn-outline-secondary"> Editar </a>

            <br><br>

            <form id="delete-frm" action="" method="POST">

                @method('DELETE')
                @csrf

                <button class="btn btn-outline-danger mt-3" style="width: 100%"> Remover </button>

            </form>

        </div>
    </div>

@endsection
