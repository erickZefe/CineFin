@extends('layouts.app')
@section('title', 'Editar Entrada')
@section('content')

    <div class="row">
        <div class="col-sm-10"><h1>Agregar entrada</h1></div>
        <div class="col-sm-2">
            <a href="{{ route('movies.index') }}">
                <button class="btn btn-secondary">Cancelar</button>
            </a>
        </div>
    </div>

    <div class="jumbotron">
        <form method="post" action="{{ route('entrances.update', $entrance->id) }}">
            @csrf
            @method('PUT')

            <div>
                <label for="">Precio:</label>
                <textarea class="form-control" name="price" id="" cols="30" rows="5">{{ $movie->price }}</textarea>
            </div>
            <div>
                <label for="">Hora de entrada:</label>
                <input class="form-control" type="hourEntrance" value="{{ $entrance->hourEntrance }}" name="director" id="" required maxlength="100">
            </div>
            
            <br><br>

            <input class="btn btn-primary" type="submit" value="Guardar cambios">

        </form>
    </div>

@endsection
