<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Puntos;
use App\Models\Datos;

class ControlPuntos extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $punto = Puntos::orderBy('created_at')->get();
        return view('points.index', compact('punto'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('points.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Puntos::create($request->all());
 
        return redirect()->route('puntos')->with('success', 'Punto añadido correctamente');
    }
    public function add(Request $request)
    {
        $t=$request->t;
        $h=$request->h;
        $ubicación=$request->u;

        $thm = new Datos;
        $thm->punto = $ubicación;
        $thm->temperatura = $t;
        $thm->humedad = $h;
        $thm->save();
        return 'great';
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $data = Datos::where('punto', $id)->get();
        $idpunto=$id;
        return view('points.show', compact('data','idpunto'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $punto = Puntos::findOrFail($id);
  
        return view('points.edit', compact('punto'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $punto = Puntos::findOrFail($id);
  
        $punto->update($request->all());
  
        return redirect()->route('puntos')->with('success', 'Punto editado correctamente');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $punto = Puntos::findOrFail($id);
  
        $punto->delete();
  
        return redirect()->route('puntos')->with('success', 'Punto eliminado correctamente');
    }

    public function editdata(string $id)
    {
        $dato = Datos::findOrFail($id);
  
        return view('points.editdata', compact('dato','id'));
    }

    public function updatedata(Request $request, string $id)
    {
        $dato = Datos::findOrFail($id);
  
        $dato->update($request->all());
  
        return redirect()->route('puntos')->with('success', 'Dato editado correctamente');
    }

    public function destroydata(string $id)
    {
        $dato = Datos::findOrFail($id);
  
        $dato->delete();
  
        return redirect()->route('puntos')->with('success', 'Valor eliminado correctamente');
    }

    public function createdata(string $idpunto)
    {
        return view('points.createdata',compact('idpunto'));
    }

    public function storedata(Request $request, string $idpunto)
    {
        $t=$request->temperatura;
        $h=$request->humedad;

        $thm = new Datos;
        $thm->punto = $idpunto;
        $thm->temperatura = $t;
        $thm->humedad = $h;
        $thm->save();
        return redirect()->route('puntos')->with('success', 'Dato añadido correctamente');
    }
}
