@extends('layouts.app')
@section('title', 'Editar sala')
@section('content')

    <div class="row">
        <div class="col-sm-10"><h1>Agregar sala</h1></div>
        <div class="col-sm-2">
            <a href="{{ route('rooms.index') }}">
                <button class="btn btn-secondary">Cancelar</button>
            </a>
        </div>
    </div>

    <div class="jumbotron">
        <form method="post" action="{{ route('rooms.update', $room->id) }}">
            @csrf
            @method('PUT')

            <div>
                <label for="">Asientos:</label>
                <input class="form-control" type="text" value="{{ $room->chairs }}" name="chairs" id="" required maxlength="100">
            </div>
            <div>
                <label for="">Locacion:</label>
                <input class="form-control" name="location" id="" cols="30" rows="5">{{ $room->location }}</input>
            </div>
            <div>
                <label for="">Capacidad:</label>
                <input class="form-control" type="text" value="{{ $room->capacity }}" name="capacity" id="" required maxlength="100">
            </div>
           

            <br><br>

            <input class="btn btn-primary" type="submit" value="Guardar cambios">

        </form>
    </div>

@endsection
