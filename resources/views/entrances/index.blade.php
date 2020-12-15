@extends('layouts.app')
@section('title', 'Entradasas')
@section('content')

<div class="row">
    <div class="col-sm-2">
        <a href="{{ route('entrances.create') }}">
            <button class="btn btn-primary">Agregar</button>
        </a>
    </div>
    <div class="col-sm-10"><h1>Entradas registradas</h1></div>
</div>

<div class="col-6">
    <h1>Listado de Entradas</h1>
    <div class="btn-group col-4" role="group" aria-label="Basic example">
    <a href="{{route('entrances.pdf')}}" class="btn btn-dark">PDF</a>
        <a href="entrancesXLS" class="btn btn-secondary">XLS<a>
        <a href="entrancesCSV" class="btn btn-success">CSV</a>
      </div>
</div>


@forelse($entrances as $entrance)
    <div class="row">
        <div class="card col-sm bg-light" style="width: 18rem;">
            <img src="..." class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">{{ $entrance->price }}</h5>
                <p class="card-text text-muted">{{ $entrance->hourEntrance }}</p>
                <form action="{{ route('entrances.destroy', $entrance->id) }}" method="post">
                    <a class="btn btn-secondary" href="{{ route('entrances.show', $entrance->id) }}">Ver</a>
                    <a class="btn btn-secondary" href="{{ route('entrances.edit', $entrance->id) }}">Editar</a>
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Eliminar</button>
                </form>
            </div>
        </div>
    </div>
    <br>
@empty
    <div><h3>No hay registro de entradas</h3></div>
@endforelse

{{ $entrances->links() }}

@endsection


