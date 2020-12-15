@extends('layouts.app')
@section('title', 'Editar funcion')
@section('content')

    <div class="row">
        <div class="col-sm-10"><h1>Agregar funcion</h1></div>
        <div class="col-sm-2">
            <a href="{{ route('funtions.index') }}">
                <button class="btn btn-secondary">Cancelar</button>
            </a>
        </div>
    </div>

    <div class="jumbotron">
        <form method="post" action="{{ route('funtions.update', $funtion->id) }}">
            @csrf
            @method('PUT')

            <div>
                <label for="">Comienzo:</label>
                <input class="form-control" type="" value="{{ $funtion->start }}" name="start" id="" required maxlength="100">
            </div>
            <div>
                <label for="">Final:</label>
                <textarea class="form-control" name="end" id="" cols="30" rows="5">{{ $funtion->end }}</textarea>
            </div>
            <div>
                <label for="">Turno:</label>
                <select class="form-control" name="type" id="" required>
                    <option value="{{ $funtion->type }}">{{ $funtion->type }}</option>
                    <option value="Mañana">Mañana</option>
                    <option value="Tarde">Tarde</option>
                    <option value="Noche">Noche</option>
                </select>
            </div>
            <div>
                <label for="">Disponibilidad:</label>
                <select class="form-control" name="available" id="" required>
                    <option value="{{ $funtion->available }}">{{ $funtion->available }}</option>
                    <option value="1">Disponible</option>
                    <option value="0">No disponible</option>
                </select>
            </div>

            <br><br>

            <input class="btn btn-primary" type="submit" value="Guardar cambios">

        </form>
    </div>

@endsection
