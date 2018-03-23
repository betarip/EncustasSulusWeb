<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Encuestador;

class EncuestadorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $encuestados = Encuestador::all();
        return response(array(
                'error' => false,
                'encuestados' =>$encuestados->toArray(),
               ),200);     
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('Encuestador.crear');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $this->validate($request, [
           'nombre' => 'required',
           'apellidoPaterno' => 'required',
           'apellidoMaterno' => 'required',
           'telefono' => 'required|numeric',
           'municipio' => 'required',
           'cve_elector' => 'required|max:60',
           'curp' => 'required|size:18',
           'cp' => 'required|digits:5',
           'cve_estado' => 'required|numeric',
           'cve_municipio' => 'required|numeric',
           'cve_seccion' => 'required|numeric',
       ]);
       $encuestador = new Encuestador;
       $encuestador->nombre = $request->input('nombre');
       $encuestador->app1 = $request->input('apellidoPaterno');
       $encuestador->app2 = $request->input('apellidoMaterno');
       $encuestador->telefono = $request->input('telefono');
       $encuestador->municipio = $request->input('municipio');
       $encuestador->cve_elector = $request->input('cve_elector');
       $encuestador->curp = $request->input('curp');
       $encuestador->cp = $request->input('cp');
       $encuestador->cve_estado = $request->input('cve_estado');
       $encuestador->cve_municipio = $request->input('cve_municipio');
       $encuestador->cve_seccion = $request->input('cve_seccion');


       $encuestador->save();

       return redirect('/encuestador/create')->with('success', 'Encuestador Creado');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }


    public function jsonAll(){
        
    }
}
