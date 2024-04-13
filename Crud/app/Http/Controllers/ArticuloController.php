<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//models
use App\Models\Articulo;

class ArticuloController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       $articulo = Articulo::all();
       return $articulo;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    //Funcion Guardar
    public function store(Request $request)
    {
        //instancia capturar datos
        $articulo = new Articulo();
        $articulo->descripcion = $request->descripcion;
        $articulo->precio = $request->precio;
        $articulo->stock = $request->stock;

        $articulo->save();
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
    public function update(Request $request)
    {
        $articulo = Articulo::findOrfail($request->id);
         
        $articulo->descripcion = $request->descripcion;
        $articulo->precio = $request->precio;
        $articulo->stock = $request->stock;
 
        $articulo->save();

        return $articulo;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        $articulo = Articulo:: destroy($request->id);
        return $articulo;
    }
}
