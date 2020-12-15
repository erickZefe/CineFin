<?php


namespace App\Exports;

use App\Funtion;
use Mattwebsite\Excel\Concers\FromCollection;
use Mattwebsite\Excel\Concers\WhitHeadings;
use DB;

class MoviesExport implements FromCollection{

    public function collection()
    {
        $funtions = DB::table('funtions')->select('id', 'start', 'end', 'available', 'type', 'timestamps')->get();
        return $funtions;
    }
    public function headings():array{
        return[
            'Id',
            'hora inicio',
            'hora fin',
            'En función',
            'Horario',
            'Duración',
            'Existe'
        ];
    }
}