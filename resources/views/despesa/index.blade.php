@extends('layouts.app')
@section('content')

    <div class="col-12 text-center" style="margin-bottom: 1%">
        <h1>{{ config('app.name') }} de {{ $user -> name }}</h1>
    </div>

    <div class="container">
        <div class="row">

            <a href="/" class="btn btn-outline-secondary" style="margin-bottom: 0.5%"> Voltar </a>

            <div class="table-responsive" style="margin-top: 2%; margin-bottom: 2% ">

                <table class="table table-hover table-striped table-dark">

                    <thead class="thead-light">

                        <tr>
                        <th scope="col">Descrição</th>
                        <th scope="col">Quantidade</th>
                        <th scope="col">Data</th>
                        </tr>

                    </thead>

                    <p hidden>{{ $total = 0 }}</p>

                    <tbody>

                @forelse ($posts as $post)

                    <tr>
                        <td class="card-body"><a href="./despesa/{{$post->id}}" class="alert-link" style="text-decoration: none;"> {{$post->nome}}</td>
                        <td>{{ $post -> quantidade }} €</td>
                        <td>{{ $post -> data }}</td>
                    </tr>

                    <p hidden>{{ $total = $total + $post -> quantidade }}</p>

                @empty

                    <p class="text-warning"> Sem despesas registadas </p>

                @endforelse

                    <tr>
                        <th>Total</th>
                        <th>{{ $total }} €</th>
                        <td></td>
                    </tr>

                    </tbody>

                </table>

            </div>

            <a href="./despesa/create/post" class="btn btn-outline-secondary" style="margin-bottom: 0.5%"> Nova Despesa </a>

        </div>
    </div>

@endsection
