<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use Illuminate\Http\Request;

class CategoriaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        $Categoria = Categoria::all();
        return $Categoria;
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
        //
         if(empty($request->name) || empty($request->description) ){
              return "Error de prticion todos los campos son obligatorios ";
        }

        $Categoria = new Categoria();
        $Categoria->name = $request->name;
        $Categoria->description = $request->description;
        $Categoria->save();
         
         if (empty($Categori)) {
             return $Categoria;
             
         } else {
            return "Error al guardar";
         }
         
          

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Categoria  $categoria
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        if(empty($request->id)){
              return "Error id es necesario ";
        }
        //
        $Categoria = Categoria::findOrFail($request->id);

        return $Categoria;

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Categoria  $categoria
     * @return \Illuminate\Http\Response
     */
    public function edit(Categoria $categoria)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Categoria  $categoria
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        if(empty($request->name) || empty($request->description)  || empty($request->id) ){
             
              return "Error de prticion todos los campos son obligatorios ";
        }
        //
        $Categoria = Categoria::findOrFail($request->id);
        $Categoria->name = $request->name;
        $Categoria->description = $request->description;
        $Categoria->save();

         if (empty($Categori)) {
             return $Categoria;
             
         } else {
            return "Error al guardar";
         }
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Categoria  $categoria
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request,$id)
    {
        if(empty($request->id)){
              return "Error id es necesario ";
        }
        
        $Categoria = Categoria::destroy($id);

        if ($Categoria) {
            return "eliminado";
        } else {
            return "Error al eliminar";
        }
        
        
    }
}
