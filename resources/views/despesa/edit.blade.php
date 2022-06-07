@extends('layouts.app')
@section('content')

    <div class="container">
        <div class="row">

            <a href="/despesa" class="btn btn-outline-secondary"> Voltar </a>

            <div class="border rounded" style="padding: 1%; margin-top:0.5%">

                <h1> Editar Despesa </h1>

                <hr>

                <form action="" method="POST">

                    @method('PUT')
                    @csrf

                    <div class="row">

                        <div class="control-group">

                            <label for="nome"> Nome </label>
                            <input class="form-control" type="text" id="nome"  name="nome" value="{{$post -> nome}}">

                        </div>
                        <div class="control-group">

                            <label for="quantidade"> Quantidade </label>
                            <input class="form-control" type="number" id="quantidade" name="quantidade" value="{{$post -> quantidade}}"> </input>

                        </div>
                        <div class="control-group">

                            <label for="data"> Data </label>
                            <input class="form-control" type="date" id="data" name="data" value="{{ $post -> data }}"> </input>

                        </div>

                        <div class="control-group">

                            <button id="btn-submit" class="btn btn-secondary" style="margin-top: 0.5%"> Atualizar </button>

                        </div>

                    </div>

                </form>

            </div>

        </div>
    </div>

@endsection
