<?php

namespace App\Http\Controllers;

use App\Models\Modulo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ModulosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $files = Modulo::all();
        return view('img.modulos', compact('files'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'file' => 'required|image'
        ]);

        $img = $request->file('file')->store('public/imagenes/modulos');

        $url = Storage::url($img);


        Modulo::create([
            'nombre' => $request->nombre,
            'img' => $url
        ]);

        return redirect()->route('modulos.index')->with('create', 'la imagen se guardo correctamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Modulo  $modulos
     * @return \Illuminate\Http\Response
     */
    public function show(Modulo $modulos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Modulo  $modulos
     * @return \Illuminate\Http\Response
     */
    public function edit(Modulo $modulos)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Modulo  $modulos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Modulo $modulos)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Modulo  $modulos
     * @return \Illuminate\Http\Response
     */
    public function destroy(Modulo $modulos)
    {
        //
    }
}
