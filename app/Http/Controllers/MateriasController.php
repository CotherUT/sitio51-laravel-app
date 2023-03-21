<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Materias;

class MateriasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        // Variable con un arreglo de las materias
        // $var_materias = [['nombre' => 'Aplicaciones Web'], ['nombre' => 'Desarrollo Movil'], ['nombre' => 'Integradora'], ['nombre' => 'Base de datos en la Nube'], ['nombre' => 'Ingles']];
        // return view('Materias', compact('var_materias'));

        $var_materias = Materias::get();
        return view("Materias.index", compact('var_materias'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //Retornar la vista alta, que se encuentra en la carpeta Materias
        return view('Materias.alta');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Guardar la informacion de la materia en la bd
        Materias::create([
            'nombre'=>request('tbNombre'),
            'descripcion'=>request('tbDescripcion')
        ]);
        //Redirigir a la ruta materias_index
        return redirect()->route('materias_index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //Hacer consultas de informacion
        return View('Materias.show', ['i'=>Materias::findorFail($id)]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //obtener el valor desde la bd en la migracion
        $i = Materias::findorFail($id);
        return view('Materias.edicion', compact('i'));
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
        $i=Materias::findorFail($id);
        $i->nombre=$request->tbNombre;
        $i->descripcion=$request->tbDescripcion;
        $i->save();
        return redirect()->route('materias.show',$i);
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
}
