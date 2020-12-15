<?php

namespace App\Http\Controllers;

use App\Entrance;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade as PDF;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\EntrancesExport;

class EntranceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $entrances = DB::table('entrances')->paginate(2);
        return view('entrances.index', compact('entrances'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('entrances.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Entrance::create($request->all());
        return redirect()->route('entrances.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Funtion  $funtion
     * @return \Illuminate\Http\Response
     */
    public function show(Entrance $entrance)
    {
        return view('entrances.show', compact('entrance'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Funtion  $funtion
     * @return \Illuminate\Http\Response
     */
    public function edit(Entrance $entrance)
    {
        return view('entrances.edit', compact('entrance'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Funtion  $funtion
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Entrance $entrance)
    {
        $request->validate( [
        'price' => 'required',
        'hourEntrance' => 'required',
        'salas_id' => 'required' ]
        ); 
        $entrance->update($request->all());

        return redirect()->route('entrances.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Funtion  $funtion
     * @return \Illuminate\Http\Response
     */
    public function destroy(Entrance $entrance)
    {
        $entrance->delete();
        return redirect()->route('entrances.index');
    }

    public function exportToPDF(){
        $entrances=Entrance::get();
        $pdf=PDF::loadView('entrancess.exportToPDF', compact('entrances'));
        return $pdf->download('ListadoEntradas.pdf');
    }

    public function exportToXls(){
        return Excel::dowload(new EntrancesExport, 'entrances.xlsx');
    }

    public function exportToCsv(){
        return Excel::dowload(new MoviesExport, 'entrances.csv');
    }
}
