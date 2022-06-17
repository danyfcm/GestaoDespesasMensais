@extends('layouts.app')
@section('content')

    <div class="container">
        <div class="row">

            <a href="/{{ Auth::user()->id }}/despesa" class="btn btn-outline-secondary" style="margin-bottom: 0.5%"> Voltar </a>

            <div class="border rounded">

                <h1> Criar </h1>

                <hr>

                <form action="" method="POST">
                    @csrf

                    <div class="control-group">

                        <label for="nome"> Nome </label>
                        <input class="form-control" type="text" name="nome" id="nome" placeholder="Escreva o nome" required>

                    </div>
                    <div class="control-group">

                        <label for="quantidade"> Quantidade </label>
                        <input class="form-control" type="number" id="quantidade" name="quantidade" placeholder="Escreva a quantidade" step=".01"  required></input>

                    </div>
                    <div class="control-group">

                        <label for="data"> Data </label>
                        <input class="form-control" type="date" id="data" name="data" required></input>

                    </div>

                    <input class="form-control" type="number" id="userId" name="userId" value={{ $userId }} hidden></input>

                    <button id="btn-submit" class="btn btn-outline-secondary" style="margin-top: 1%; margin-bottom: 1%; width: 100%"> Criar </button>

                </form>

            </div>

        </div>
    </div>

@endsection
