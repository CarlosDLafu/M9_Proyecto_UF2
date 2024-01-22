<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Customcontroller extends Controller
{
    public function mostrarTaketrip(Request $request)
    {
        // Obtener el valor del parámetro 'site' de la petición GET
        $site = $request->input('site');

        // Otros procesamientos que desees realizar con el valor de 'site'

        // Retornar la vista 'taketrip' con los datos necesarios
        return view('taketrip', ['site' => $site]);
    }
}