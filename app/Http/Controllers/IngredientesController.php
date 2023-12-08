<?php

namespace App\Http\Controllers;
use App\Models\ingredientes;
use App\Models\proveedores;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class IngredientesController extends Controller
{
     /**
         * Display a listing of the resource.
         */
        public function index()
        {
          $ingredientes = ingredientes::all();
          return view("ingredientes",compact("ingredientes"));
        }
        public function pdf()
        {
            $ingredientes = ingredientes::all();
            $pdf= Pdf::loadView('pdf.ingredientespdf', compact('ingredientes'));
            return $pdf->stream();
        }
    
        /**
         * Show the form for creating a new resource.
         */
        public function create()
        {
            $vendedores = proveedores::get();
            return view('agregaringrediente', compact('vendedores'));
        }
    
        /**
         * Store a newly created resource in storage.
         */
        public function store(Request $request)
        {
            $ingrediente = new ingredientes();
            $ingrediente->nombre =$request->input('nombre');
            $ingrediente->precio =$request->input('precio');
            $ingrediente->cantidad =$request->input('cantidad');
            $ingrediente->codigopro =$request->input('codigopro');
            $ingrediente->compra =$request->input('compra');
            $ingrediente->vendedor =$request->input('vendedor');
            $ingrediente->save();
            return redirect()->route('ingredientes.index');
        }
    
        /**
         * Display the specified resource.
         */
        public function show(string $id)
        {
            $buscaringrediente= ingredientes::find($id);
    return view('ingredientes.index', compact('buscaringrediente'));
        }
    
        /**
         * Show the form for editing the specified resource.
         */
        public function edit($id)
        {
            $ingredientes = ingredientes::findOrFail($id);
            return view('ingredientes.index', compact('ingredientes'));
        }
    
        /**
         * Update the specified resource in storage.
         */
        public function update(Request $request, string $id)
        {
            $ingrediente = ingredientes::findOrFail($id);
            $ingrediente->nombre =$request->input('nombre');
            $ingrediente->precio =$request->input('precio');
            $ingrediente->cantidad =$request->input('cantidad');
            $ingrediente->codigopro =$request->input('codigopro');
            $ingrediente->compra =$request->input('compra');
            $ingrediente->save();
            return redirect()->route('ingredientes.index');
        }
    
        /**
         * Remove the specified resource from storage.
         */
        public function destroy(string $id)
        {
            ingredientes::destroy($id);
            return redirect()->route('ingredientes.index');
        }
}
