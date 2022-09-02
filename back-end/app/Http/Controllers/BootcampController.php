<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bootcamp;

class BootcampController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Aqui se mostraran todos los bootcamps
        return Bootcamp::all();
        /**return "Aqui se mostraran todos los bootcamps";*/
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        /**return "Aqui se va a registrar un nuevo bootcamp";*/
        //capturo el payload
        //crear el nuevo bootcamp
        return Bootcamp::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        /**return "Aqui se va a buscar un bootcamp especifico por id";*/
        return Bootcamp::find($id);
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
        /**return "Actualiza un bootcamp cuyo id=$id";*/
        //1. Encontrar el bootcamp por id
        $b = Bootcamp::find($id);
        //2. Acrualizarlo
        $b->update($request->all());
        //3. Enviar response con el bootcamp actualizado
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
        /**return "Eliminar un bootcamp cuyo id=$id";*/
        //1. Encontrar el bootcamp por id
        $b=Bootcamp::find($id);
        //2. Eliminarlo
        $b->delete();
        //3. response con el objeto eliminado
        return $b;
    }
}
