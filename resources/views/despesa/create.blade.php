@extends('layouts.app')
@section('content')

    <div class="container">
        <div class="row">

            <a href="/blog" class="btn btn-outline-secondary" style="margin-bottom: 0.5%"> Voltar </a>

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
                        <input class="form-control" type="number" id="quantidade" name="quantidade" placeholder="Escreva a quantidade"  required></input>

                    </div>
                    <div class="control-group">

                        <label for="data"> Data </label>
                        <input class="form-control" type="date" id="data" name="data" required></input>

                    </div>
                    <div class="control-group">

                        <button id="btn-submit" class="btn btn-secondary" style="margin-top: 0.5%; margin-bottom: 0.5%"> Criar </button>

                    </div>

                </form>

            </div>

        </div>
    </div>

@endsection
