<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;

class CursoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Aqui se mostraran todos los cursos
        return Course::all();
        /**return "Aqui se mostraran todos los cursos";*/
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        /**return "Aqui se va a registrar un nuevo curso";*/
        //capturo el payload
        //crear el nuevo curso
        return Course::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        /**return "Aqui se va a buscar un curso especifico por id";*/
        return Course::find($id);
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
        /**return "Actualiza un curso cuyo id=$id";*/
        //1. Encontrar el curso por id
        $b = Course::find($id);
        //2. Acrualizarlo
        $b->update($request->all());
        //3. Enviar response con el curso actualizado
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
        /**return "Eliminar un curso cuyo id=$id";*/
        //1. Encontrar el curso por id
        $b=Course::find($id);
        //2. Eliminarlo
        $b->delete();
        //3. response con el objeto eliminado
        return $b;
    }
}
