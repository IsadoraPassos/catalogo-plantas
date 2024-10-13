@extends('layouts.app')

@section('title', 'Listagem de Plantas')

@section('content')
    <h1>Plantas Cadastradas</h1>

    <table>
        <thead>
            <tr>
                <th>Nome Científico</th>
                <th>Nome Comum</th>
                <th>Bioma</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($plantas as $planta)
                <tr>
                    <td>{{ $planta->nome_cientifico }}</td>
                    <td>{{ $planta->nome_comum }}</td>
                    <td>{{ $planta->bioma }}</td>
                    <td>
                        <a href="{{route('plantas.show', $planta->id)}}">Detalhes</a>
                        <a href="{{ route('plantas.edit', $planta->id) }}">Editar</a>
                        <form action="{{ route('plantas.destroy', $planta->id) }}" method="POST" style="display: inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" id="button-delete">Excluir</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
