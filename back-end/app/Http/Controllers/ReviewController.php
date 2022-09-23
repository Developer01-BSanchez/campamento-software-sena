<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Review;

class ReviewController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Aqui se mostraran todos los reviews
        return Review::all();
        /**return "Aqui se mostraran todos los reviews";*/
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        /**return "Aqui se va a registrar un nuevo review";*/
        //capturo el payload
        //crear el nuevo review
        return Review::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        /**return "Aqui se va a buscar un review especifico por id";*/
        return Review::find($id);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        /**return "Actualiza un review cuyo id=$id";*/
        //1. Encontrar el review por id
        $b = Review::find($id);
        //2. Acrualizarlo
        $b->update($request->all());
        //3. Enviar response con el review actualizado
        return $b;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        /**return "Eliminar un review cuyo id=$id";*/
        //1. Encontrar el review por id
        $b=Review::find($id);
        //2. Eliminarlo
        $b->delete();
        //3. response con el objeto eliminado
        return $b;
    }
}
