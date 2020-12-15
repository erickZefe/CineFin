@extends('layouts.app')
@section('title', 'Funciones')
@section('content')

<div class="row">
    <div class="col-sm-2">
        <a href="{{ route('funtipns.create') }}">
            <button class="btn btn-primary">Agregar</button>
        </a>
    </div>
    <div class="col-sm-10"><h1>Funciones registradas</h1></div>
</div>

<div class="col-6">
    <h1>Listado de Funciones</h1>
    <div class="btn-group col-4" role="group" aria-label="Basic example">
    <a href="{{route('funtions.pdf')}}" class="btn btn-dark">PDF</a>
        <a href="/funtionsXLS" class="btn btn-secondary">XLS<a>
        <a href="/funtionsCSV" class="btn btn-success">CSV</a>
      </div>
</div>


@forelse($funtions as $funtion)
    <div class="row">
        <div class="card col-sm bg-light" style="width: 18rem;">
            <img src="..." class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">{{ $funtion->start }}</h5>
                <h3 class="card-text">{{ $funtion->end }}</h3>
                <p class="card-text">{{ $funtion->type }}</p>
                <p class="card-text text-muted">{{ $funtion->available }}</p>
                <form action="{{ route('funtions.destroy', $funtion->id) }}" method="post">
                    <a class="btn btn-secondary" href="{{ route('funtions.show', $funtion->id) }}">Ver</a>
                    <a class="btn btn-secondary" href="{{ route('funtions.edit', $funtion->id) }}">Editar</a>
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Eliminar</button>
                </form>
            </div>
        </div>
    </div>
    <br>
@empty
    <div><h3>NO HAY REGISTROS DE PELÍCULAS EN LA BASE DE DATOS</h3></div>
@endforelse

{{ $movies->links() }}

@endsection


