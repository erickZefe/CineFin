<?php


namespace App\Exports;

use App\Consumable;
use Mattwebsite\Excel\Concers\FromCollection;
use Mattwebsite\Excel\Concers\WhitHeadings;
use DB;

class MoviesExport implements FromCollection{

    public function collection()
    {
        $consumables = DB::table('consumables')->select('id', 'name', 'price', 'quantity', 'timestamps')->get();
        return $consumables;
    }
    public function headings():array{
        return[
            'Id',
            'Nombre',
            'Precio',
            'Cantidad',
            'Existe en el menú'
        ];
    }
}