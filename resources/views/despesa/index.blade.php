@extends('layouts.app')
@section('content')

    <div class="container">
        <div class="row">

            <div class="col-4">
                <a href="/despesa/create/post" class="btn btn-secondary"> Criar </a>
            </div>

            @forelse ($posts as $post)
                <ul>
                    <li> <a href="./despesa/{{$post->id}}"> {{$post->nome}}: {{ $post -> quantidade }}€ </a> </li>
                </ul>
            @empty
                <p class="text-warning"> Sem despesas registadas </p>
            @endforelse

        </div>
    </div>

@endsection
