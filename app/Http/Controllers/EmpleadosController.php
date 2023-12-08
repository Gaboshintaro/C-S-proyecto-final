<?php

namespace App\Http\Controllers;
use App\Models\empleados;
use App\Models\mesas;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class EmpleadosController extends Controller
{
/**
     * Display a listing of the resource.
     */

     public function index()
    {
      $datos= empleados::all();
      return view('empleados',compact('datos'));
    }
    public function pdf()
    {
        $datos= empleados::all();
        $pdf= Pdf::loadView('pdf.empleadopdf', compact('datos'));
        return $pdf->stream();
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $mesa = mesas::get();
        return view('agregarempleado', compact('mesa'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $empleado = new empleados();
        $empleado->nombre =$request->input('nombre');
        $empleado->apellido =$request->input('apellido');
        $empleado->platillo =$request->input('platillo');
        $empleado->edad =$request->input('edad');
        $empleado->area =$request->input('area');
        $empleado->mesas =$request->input('mesas');
        $empleado->save();
        return redirect()->route('empleados.index');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $buscarempleado= empleados::find($id);
    return view('empleados.index', compact('buscarempleado'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $datos = empleados::findOrFail($id);
        return view('empleados.index', compact('datos'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $empleado = empleados::findOrFail($id);
        $empleado->nombre =$request->input('nombre');
        $empleado->apellido =$request->input('apellido');
        $empleado->platillo =$request->input('platillo');
        $empleado->edad =$request->input('edad');
        $empleado->area =$request->input('area');
        $empleado->save();
        return redirect()->route('empleados.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        empleados::destroy($id);
        return redirect()->route('empleados.index');
    }
}
