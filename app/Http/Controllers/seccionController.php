<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\municipio;
use App\seccion;

class seccionController extends Controller
{
    public function show($id_municipio)
    {
       
        $secciones = seccion::where('fk_municipio',$id_municipio);
        
        return $secciones;
    }
}
