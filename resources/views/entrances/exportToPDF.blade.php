@extends('layout.layout')

@section('content')
<div>
    <h1>Lista de Entradas</h1>
</div>


<table class="table">
    <thead>
        <tr>
            <th>Id</th>
            <th>Precio</th>
            <th>Hora de entrada</th>
            <th>Id de salas</th>
            <th>Habilitada</th>
        </tr>
    </thead>

    @foreach ($entrances as $entrance)
    <tbody>
        <tr>
            <td>{{ $movie->id }}</td>
            <td>{{ $movie->price }}</td>
            <td>{{ $movie->hourEntrance }}</td>
            <td>{{ $movie->salas_id }}</td>
            <td>{{ $movie->timestamps }}</td>
        </tr>
    </tbody>
    @endforeach
</table>
    

@endsection