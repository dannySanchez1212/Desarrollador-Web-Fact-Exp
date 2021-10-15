<?php

namespace App\Http\Controllers;

use App\Models\departamento;
use Illuminate\Http\Request;

class DepartamentoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
       $departamento = departamento::all();
        return $departamento;
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

        if(empty($request->name) || empty($request->description) || empty($request->categoria) ){
              return "Error de prticion todos los campos son obligatorios ";
        }
        //
        $departamento = new departamento();
        $departamento->name = $request->name;
        $departamento->description = $request->description;
        $departamento->id_categoria= $request->categoria;
        $departamento->save();


         
         if (!empty($departamento)) {
             return $departamento;
             
         } else {
           return "Error al guardar";
         }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\departamento  $departamento
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        //

        if(empty($request->id)){
              return "Error id es necesario ";
        }

        $departamento = departamento::findOrFail($request->id);

        return $departamento;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\departamento  $departamento
     * @return \Illuminate\Http\Response
     */
    public function edit(departamento $departamento)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\departamento  $departamento
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        //

        if(empty($request->name) || empty($request->description) || empty($request->categoria) || empty($request->id) ){
             
              return "Error de prticion todos los campos son obligatorios ";
        }

        $departamento = departamento::findOrFail($request->id);
        $departamento->name = $request->name;
        $departamento->description = $request->description;
        $departamento->id_categoria= $request->categoria;
        $departamento->save();

         if (!empty($departamento)) {
             return $departamento;
             
         } else {
            return "Error al guardar";
         }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\departamento  $departamento
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request,$id)
    {
        //
       if(empty($request->id)){
              return "Error id es necesario ";
        }
        $departamento = departamento::destroy($id);

        if ($departamento) {
            return "eliminado";
        } else {
            return "Error al eliminar";
        }
    }
}
