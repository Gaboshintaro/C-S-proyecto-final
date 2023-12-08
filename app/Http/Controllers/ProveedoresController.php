<?php

namespace App\Http\Controllers;
use App\Models\proveedores;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class ProveedoresController extends Controller
{
    /**
         * Display a listing of the resource.
         */
        public function index()
        {
          $proveedores = proveedores::all();
          return view("proveedores",compact("proveedores"));
        }
        public function pdf()
    {
        $proveedores = proveedores::all();
        $pdf= Pdf::loadView('pdf.proveedorpdf', compact('proveedores'));
        return $pdf->stream();
    }
    
        /**
         * Show the form for creating a new resource.
         */
        public function create()
        {
            return view('agregarproveedor');
        }
    
        /**
         * Store a newly created resource in storage.
         */
        public function store(Request $request)
        {
            $proveedor = new proveedores();
            $proveedor->nombre =$request->input('nombre');
            $proveedor->apellido =$request->input('apellido');
            $proveedor->edad =$request->input('edad');
            $proveedor->codigo =$request->input('codigo');
            $proveedor->fecha =$request->input('fecha');
            $proveedor->save();
            return redirect()->route('proveedores.index');
        }
    
        /**
         * Display the specified resource.
         */
        public function show(string $id)
        {
            $buscarproveedor= proveedores::find($id);
            return view('proveedores.index', compact('buscarproveedor'));
        }
    
        /**
         * Show the form for editing the specified resource.
         */
        public function edit($id)
        {
            $proveedores = proveedores::findOrFail($id);
            return view('proveedores.index', compact('proveedores'));
        }
    
        /**
         * Update the specified resource in storage.
         */
        public function update(Request $request, $id)
        {
            $proveedor = proveedores::findOrFail($id);
            $proveedor->nombre =$request->input('nombre');
            $proveedor->apellido =$request->input('apellido');
            $proveedor->edad =$request->input('edad');
            $proveedor->codigo =$request->input('codigo');
            $proveedor->fecha =$request->input('fecha');
            $proveedor->save();
            return redirect()->route('proveedores.index');
        }
    
        /**
         * Remove the specified resource from storage.
         */
        public function destroy($id)
        {
            proveedores::destroy($id);
            return redirect()->route('proveedores.index');
        }
    }