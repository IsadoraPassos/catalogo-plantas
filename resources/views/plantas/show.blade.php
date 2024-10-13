@extends('layouts.app')

@section('title', 'Detalhes da Planta')

@section('content')
    <h1>Detalhes da Planta: {{ $planta->nome_comum }}</h1>

    <div>
        <strong>Nome Científico:</strong>
        <p>{{ $planta->nome_cientifico }}</p>
    </div>

    <div>
        <strong>Nome Comum:</strong>
        <p>{{ $planta->nome_comum }}</p>
    </div>

    <div>
        <strong>Bioma:</strong>
        <p>{{ $planta->bioma }}</p>
    </div>

    <div>
        <strong>Descrição:</strong>
        <p>{{ $planta->descricao ? $planta->descricao : 'Nenhuma descrição disponível.' }}</p>
    </div>

    <div>
        <a href="{{ route('plantas.edit', $planta->id) }}">Editar</a>

        <form action="{{ route('plantas.destroy', $planta->id) }}" method="POST" style="display: inline;">
            @csrf
            @method('DELETE')
            <button type="submit">Excluir</button>
        </form>
    </div>
@endsection
