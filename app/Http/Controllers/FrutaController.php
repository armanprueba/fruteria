<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use App\Models\Fruta;

class FrutaController extends Controller
{
    /**
     * Display a listing of the resource.
     */

     public function __construct()
     {
     $this->middleware('auth',
     ['only' => ['create', 'store', 'edit', 'update', 'destroy']]);
     }
     
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
        return view('frutas.create');
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
        $fruta->imagen = $request->imagen;
        $fruta->save();

        /*
        Si no usasemos redirect necesitariamos usar esto:
        $frutas = Fruta::get();
        return view('frutas.index', compact('frutas'));
        
        Lo cual nos haría que al recargar la página, justo después de crear una fruta,
        se vuelva a añadir la fruta en la página por cada vez que recargasemos
        */

        return redirect()->route('Frutas.index');
        
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
      
        return view('frutas.update',compact('fruta'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $fruta = Fruta::findOrFail($id);
        $fruta->nombre = $request->nombre;
        $fruta->temporada = $request->temporada;
        $fruta->precio = $request->precio;
        $fruta->stock = $request->stock;
        $fruta->imagen = $request->imagen;
        $fruta->save();
        return redirect()->route('Frutas.index');
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
