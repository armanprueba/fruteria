<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Fruta;

class FrutaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $frutas = Fruta::get();
        return view('frutas.index', compact('frutas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $fruta = new Fruta();
        $fruta->nombre = $request->nombre;
        $fruta->temporada = $request->temporada;
        $fruta->precio = $request->precio;
        $fruta->stock = $request->stock;
        $fruta->save();
        return response()->json($fruta, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $fruta = Fruta::findOrFail($id);
        $fruta->nombre = $request->nombre;
        $fruta->temporada = $request->temporada;
        $fruta->precio = $request->precio;
        $fruta->stock = $request->stock;
        $fruta->save();
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Fruta::findOrFail($id)->delete();
        $frutas = Fruta::get();
        return view('frutas.index', compact('frutas'));
    }
}
