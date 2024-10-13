@extends('layouts.app')

@section('title', 'Editar Planta')

@section('content')
    <h1>Editar Planta: {{ $planta->nome_comum }}</h1>

    <form action="{{ route('plantas.update', $planta->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div>
            <label for="nome_cientifico">Nome Científico</label>
            <input type="text" id="nome_cientifico" name="nome_cientifico" value="{{ old('nome_cientifico', $planta->nome_cientifico) }}">
            @error('nome_cientifico')
                <div class="error">{{ $message }}</div>
            @enderror
        </div>

        <div>
            <label for="nome_comum">Nome Comum</label>
            <input type="text" id="nome_comum" name="nome_comum" value="{{ old('nome_comum', $planta->nome_comum) }}">
            @error('nome_comum')
                <div class="error">{{ $message }}</div>
            @enderror
        </div>

        <div>
            <label for="bioma">Bioma</label>
            <input type="text" id="bioma" name="bioma" value="{{ old('bioma', $planta->bioma) }}">
            @error('bioma')
                <div class="error">{{ $message }}</div>
            @enderror
        </div>

        <div>
            <label for="descricao">Descrição (opcional)</label>
            <textarea id="descricao" name="descricao">{{ old('descricao', $planta->descricao) }}</textarea>
        </div>

        <button type="submit">Atualizar Planta</button>
    </form>
@endsection
