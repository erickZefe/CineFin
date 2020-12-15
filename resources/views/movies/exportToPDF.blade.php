@extends('layout.layout')

@section('content')
<div>
    <h1>Lista de Clientes</h1>
</div>


<table class="table">
    <thead>
        <tr>
            <th>Id</th>
            <th>Nombre</th>
            <th>Simopsis</th>
            <th>Director</th>
            <th>Genero</th>
            <th>Duración</th>
            <th>Existe</th>
        </tr>
    </thead>

    @foreach ($movies as $movie)
    <tbody>
        <tr>
            <td>{{ $movie->id }}</td>
            <td>{{ $movie->name }}</td>
            <td>{{ $movie->synopsis }}</td>
            <td>{{ $movie->director }}</td>
            <td>{{ $movie->genre }}</td>
            <td>{{ $movie->duration }}</td>
            <td>{{ $movie->available }}</td>
        </tr>
    </tbody>
    @endforeach
</table>
    

@endsection