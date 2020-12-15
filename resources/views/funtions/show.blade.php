@extends('layouts.app')

@section('title', 'Ver detalles de la funcion')

@section('content')


        <div class="row">
            <div class="card col-sm bg-light" style="width: 18rem;">
                <img src="..." class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">{{ $funtion->start }}</h5>
                    <h3 class="card-text">{{ $funtion->end }}</h3>
                    <p class="card-text">{{ $funtion->type }}</p>
                    <p class="card-text text-muted">{{ $funtion->available }}</p>
                    <form action="{{ route('funtions.destroy', $funtion->id) }}" method="post">
                        <a class="btn btn-secondary" href="{{ route('funtions.index', $funtion->id) }}">Volver</a>
                        <a class="btn btn-secondary" href="{{ route('funtions.edit', $funtion->id) }}">Editar</a>
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Eliminar</button>
                    </form>


                </div>
            </div>
        </div>

        <br>

@endsection


