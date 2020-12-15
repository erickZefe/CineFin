<?php


namespace App\Exports;

use App\Entrance;
use Mattwebsite\Excel\Concers\FromCollection;
use Mattwebsite\Excel\Concers\WhitHeadings;
use DB;

class MoviesExport implements FromCollection{

    public function collection()
    {
        $entrances = DB::table('entrances')->select('id', 'price', 'hourEntrance', 'salas_id', 'timestamps')->get();
        return $entrances;
    }
    public function headings():array{
        return[
            'Id',
            'Precio',
            'Hora de entrada',
            'Id de salas',
            'Habilitada'
        ];
    }
}