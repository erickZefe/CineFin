@extends('layouts.app')

@section('title', 'Agregar película')

@section('content')


    <div class="row">
        <div class="col-sm-10"><h1>Agregar entrada</h1></div>
        <div class="col-sm-2">
            <a href="{{ route('entrances.index') }}">
                <button class="btn btn-secondary">Cancelar</button>
            </a>
        </div>
    </div>


    <div class="jumbotron">
        <form method="post" action="{{ route('entrances.store') }}">
            @csrf

            <div>
                <label for="">Entradas:</label>
                <input class="form-control" type="text" name="name" id="" required maxlength="100">
            </div>
            <div>
                <label for="">Precio:</label>
                <input class="form-control" type="text" name="price" id="" required maxlength="100">
            </div>
            <div>
                <label for="">Hora de entrada:</label>
                <input class="form-control" type="text" name="hourEntrance" id="" required maxlength="30">
            </div>
            <br><br>

            <input class="btn btn-primary" type="submit" value="Guardar">

        </form>
    </div>

@endsection
