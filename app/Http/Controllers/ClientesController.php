<?php

namespace App\Http\Controllers;
use App\Models\clientes;
use App\Models\empleados;
use App\Models\mesas;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class ClientesController extends Controller
{
 /**
     * Display a listing of the resource.
     */
    public function index()
{
    $cliente = clientes::all();
    return view('clientes',compact('cliente'));
}
public function pdf()
    {
        $cliente = clientes::all();
        $pdf= Pdf::loadView('pdf.clientepdf', compact('cliente'));
        return $pdf->stream();
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $mesas = mesas::get();
        $pedidos = empleados::get();
        return view('agregarcliente', compact('pedidos', 'mesas'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $cliente = new clientes();
        $cliente->nombre =$request->input('nombre');
        $cliente->apellido =$request->input('apellido');
        $cliente->edad =$request->input('edad');
        $cliente->mesa =$request->input('mesa');
        $cliente->persona =$request->input('persona');
        $cliente->visita =$request->input('visita');
        $cliente->pedido =$request->input('pedido');
        $cliente->save();
        return redirect()->route('clientes.index');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        //$buscarcliente= clientes::find($id);
        //return view('clientes.index', compact('buscarcliente'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $cliente = clientes::findOrFail($id);
        return view('clientes.index', compact('cliente'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $cliente = clientes::findOrFail($id);
        $cliente->nombre =$request->input('nombre');
        $cliente->apellido =$request->input('apellido');
        $cliente->edad =$request->input('edad');
        $cliente->mesa =$request->input('mesa');
        $cliente->persona =$request->input('persona');
        $cliente->visita =$request->input('visita');
        $cliente->save();
        return redirect()->route('clientes.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        clientes::destroy($id);
        return redirect()->route('clientes.index');
    }
}
