<?php

namespace App\Http\Controllers;
use App\Models\mesas;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class MesasController extends Controller
{
/**
     * Display a listing of the resource.
     */
    public function index()
    {
        $mesas = mesas::all();
        return view('mesas', compact('mesas'));
    }
    public function pdf()
    {
        $mesas = mesas::all();
        $pdf= Pdf::loadView('pdf.mesaspdf', compact('mesas'));
        return $pdf->stream();
    }
   

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('agregarmesas');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //guardas una nueva mesa
        $mesa = new mesas();
        $mesa->tipo =$request->input('tipo');
        $mesa->num =$request->input('num');
        $mesa->silla =$request->input('silla');
        $mesa->ocupacion =$request->input('ocupacion');
        $mesa->save();
        return redirect()->route('mesas.index');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $buscarmesa= mesas::find($id);
        return view('mesas.show', compact('buscarmesa'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $mesaEdit = mesas::findOrFail($id);
        return view('mesas', compact('mesaEdit'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $mesa = mesas::findOrFail($id);
        $mesa->tipo=$request->input('tipo');
        $mesa->num=$request->input('num'); 
        $mesa->silla=$request->input('silla');
        $mesa->ocupacion=$request->input('ocupacion');
        $mesa->save();
        return redirect()->route('mesas.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        mesas::destroy($id);
        return redirect()->route('mesas.index');
    }
}
