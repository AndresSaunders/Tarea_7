<?php

namespace App\Http\Controllers;

use App\Models\Materias;
use Illuminate\Http\Request;

class MateriasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $datos['Materias'] = Materias::paginate(5);
        return view('Materias.index',$datos);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Materias.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $datosMaterias = request()->except('_token');
        Materias::insert($datosMaterias);
        return response()->json($datosMaterias);
    }

    /**
     * Display the specified resource.
     */
    public function show(Materias $materias)
    {
        return view('Materias.show');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $materias=Materias::findOrFail($id);
        return view('Materias.edit', compact('materias'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {

        $datosMaterias = request()->except('_token','_method');
        Materias::where('id','=',$id)->update($datosMaterias);

        $materias=Materias::findOrFail($id);
        return view('Materias.edit', compact('materias'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Materias::destroy($id);
        return redirect('Materias');
    }
}
