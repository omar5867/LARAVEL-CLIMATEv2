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
 
        return redirect()->route('puntos')->with('success', 'Product added successfully');
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
        $punto=$id;
        return view('points.show', compact('data','punto'));
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
  
        return redirect()->route('puntos')->with('success', 'product updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $punto = Puntos::findOrFail($id);
  
        $punto->delete();
  
        return redirect()->route('puntos')->with('success', 'product deleted successfully');
    }
}
