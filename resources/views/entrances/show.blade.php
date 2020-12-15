@extends('layouts.app')

@section('title', 'Ver detalles de película')

@section('content')


        <div class="row">
            <div class="card col-sm bg-light" style="width: 18rem;">
                <img src="..." class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">{{ $entrance->price }}</h5>
                    <p class="card-text text-muted">{{ $entrance->hourEntrance }}</p>
                    <form action="{{ route('entrances.destroy', $entrance->id) }}" method="post">
                        <a class="btn btn-secondary" href="{{ route('entrances.index', $entrance->id) }}">Volver</a>
                        <a class="btn btn-secondary" href="{{ route('entrances.edit', $entrance->id) }}">Editar</a>
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Eliminar</button>
                    </form>


                </div>
            </div>
        </div>

        <br>

@endsection


