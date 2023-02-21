<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MateriaController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        //
        // Variable con un arreglo de las materias
        $var_materias[
            ['nombre'=>'Aplicaciones Web'],
            ['nombre'=>'Desarrollo Movil'],
            ['nombre'=>'Integradora'],
            ['nombre'=>'Base de datos en la Nube'],
            ['nombre'=>'Ingles']
        ];
        return view('Materias', compact('var_materias'));
    }
}
