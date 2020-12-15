@extends('layout.layout')

@section('content')
<div>
    <h1>Lista de Funciones</h1>
</div>


<table class="table">
    <thead>
        <tr>
            <th>Id</th>
            <th>Tiempo inicio</th>
            <th>Tiempo fin</th>
            <th>En función</th>
            <th>Horario</th>
            <th>Duración</th>
            <th>Existe</th>
        </tr>
    </thead>

    @foreach ($funtions as $funtion)
    <tbody>
        <tr>
            <td>{{ $movie->id }}</td>
            <td>{{ $movie->start }}</td>
            <td>{{ $movie->end }}</td>
            <td>{{ $movie->available }}</td>
            <td>{{ $movie->type }}</td>
            <td>{{ $movie->timestamps }}</td>
        </tr>
    </tbody>
    @endforeach
</table>
    

@endsection