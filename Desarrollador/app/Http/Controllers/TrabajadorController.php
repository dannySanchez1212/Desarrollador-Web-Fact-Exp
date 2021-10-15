<?php

namespace App\Http\Controllers;

use App\Models\trabajador;
use Illuminate\Http\Request;

class TrabajadorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $trabajador = trabajador::all();
        return $trabajador;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
          if(empty($request->name) || empty($request->description) || empty($request->departamento) ){
              return "Error de prticion todos los campos son obligatorios ";
        }
        //
        $trabajador = new trabajador();
        $trabajador->name = $request->name;
        $trabajador->description = $request->description;
        $trabajador->id_departamento = $request->departamento;
        
        $trabajador->save();
         
         if (!empty($trabajador)) {
             return $trabajador;
             
         } else {
            return "Error al guardar";
         }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\trabajador  $trabajador
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        //
        if(empty($request->id)){
              return "Error id es necesario ";
        }

        $trabajador = trabajador::findOrFail($request->id);

        return $trabajador;
    
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\trabajador  $trabajador
     * @return \Illuminate\Http\Response
     */
    public function edit(trabajador $trabajador)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\trabajador  $trabajador
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        //

        if(empty($request->name) || empty($request->description) || empty($request->departamento) || empty($request->id) ){
             
              return "Error de prticion todos los campos son obligatorios ";
        }

        $trabajador = trabajador::findOrFail($request->id);
        $trabajador->name = $request->name;
        $trabajador->description = $request->description;
        $trabajador->id_departamento= $request->departamento;
        $trabajador->save();

         if (!empty($trabajador)) {
             return $trabajador;
             
         } else {
            return "Error al guardar";
         }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\trabajador  $trabajador
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request,$id)
    {
        //
        if(empty($request->id)){
              return "Error id es necesario ";
        }
        $trabajador = trabajador::destroy($id);

        if ($trabajador) {
            return "eliminado";
        } else {
            return "Error al eliminar";
        }
    
    }
}
