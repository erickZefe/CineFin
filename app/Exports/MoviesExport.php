<?php


namespace App\Exports;

use App\Movie;
use Mattwebsite\Excel\Concers\FromCollection;
use Mattwebsite\Excel\Concers\WhitHeadings;
use DB;

class MoviesExport implements FromCollection{

    public function collection()
    {
        $movies = DB::table('movies')->select('id', 'name ', 'synopsis', 'director', 'genre', 'duration', 'available')->get();
        return $movies;
    }
    public function headings():array{
        return[
            'Id',
            'Nombre',
            'Sinopsis',
            'Director',
            'Genero',
            'Duración',
            'Existe'
        ];
    }
}