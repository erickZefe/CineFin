@extends('layouts.app')

@section('title', 'Agregar funcion')

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
        <form method="post" action="{{ route('funtiones.store') }}">
            @csrf

            <div>
                <label for="">Comienzo:</label>
                <input class="form-control" type="text" name="star" id="" required maxlength="100">
            </div>
            <div>
                <label for="">Final:</label>
                <input class="form-control" name="end" id="" cols="30" rows="5"></textarea>
            </div>
            <div>
                <label for="">Turno:</label>
                <select class="form-control" name="type" id="" required>
                    <option value="">Seleccione una opción de turno</option>
                    <option value="Mañana">Manaña</option>
                    <option value="Tarde">Tarde</option>
                    <option value="Noche">Noche</option>
                </select>
            </div>
            <div>
                <label for="">Disponibilidad:</label>
                <select class="form-control" name="available" id="" required>
                    <option value="">Seleccione una opción</option>
                    <option value="1">Disponible</option>
                    <option value="0">No disponible</option>
                </select>
            </div>

            <br><br>

            <input class="btn btn-primary" type="submit" value="Guardar">

        </form>
    </div>

@endsection
