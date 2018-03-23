<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\municipio;
use App\seccion;

class municipioController extends Controller
{
    ////
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id_municipio)
    {
        $municipios = municipio::find($id_municipio);
        $secciones = seccion::select("seccion")->where('fk_municipio', '=', $id_municipio)->get();
        $municipios["secciones"] = array();
        foreach ($secciones as $key => $value) {
            # code...
            $municipios["secciones"][] = $value;
        }
        
        return $municipios;
    }
}
