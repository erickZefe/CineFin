@extends('layout.layout')

@section('content')
<div>
    <h1>Lista de Consumibles</h1>
</div>


<table class="table">
    <thead>
        <tr>
            <th>Id</th>
            <th>Nombre</th>
            <th>Precio</th>
            <th>Cantidad</th>
            <th>Exite en el menú</th>
        </tr>
    </thead>

    @foreach ($consumables as $consumable)
    <tbody>
        <tr>
            <td>{{ $movie->id }}</td>
            <td>{{ $movie->name }}</td>
            <td>{{ $movie->price }}</td>
            <td>{{ $movie->quantity }}</td>
            <td>{{ $movie->timestamps }}</td>
        </tr>
    </tbody>
    @endforeach
</table>
    

@endsection