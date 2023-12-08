<?php

namespace App\Http\Controllers;
use App\Models\registro;
use Illuminate\Http\Request;

class RegistroController extends Controller
{
    /**
         * Display a listing of the resource.
         */
        public function index()
        {
          $registros= registro::get();
          return view("registro",compact("registros"));
        }
    
        /**
         * Show the form for creating a new resource.
         */
        public function create()
        {
            return view('registro');
        }
    
        /**
         * Store a newly created resource in storage.
         */
        public function store(Request $request)
        {
            $registros = new registro();
            $registros->usuario =$request->input('usuario');
            $registros->coreo =$request->input('coreo');
            $registros->contrasena =$request->input('contrasena');
            $registros->save();
            return redirect()->route('welcome');
        }
    
        /**
         * Display the specified resource.
         */
        public function show(string $id)
        {
            //
        }
    
        /**
         * Show the form for editing the specified resource.
         */
        public function edit(string $id)
        {
            //
        }
    
        /**
         * Update the specified resource in storage.
         */
        public function update(Request $request, string $id)
        {
            //
        }
    
        /**
         * Remove the specified resource from storage.
         */
        public function destroy(string $id)
        {
            //
        }
}
