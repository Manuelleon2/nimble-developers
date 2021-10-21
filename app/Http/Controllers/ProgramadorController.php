<?php

namespace App\Http\Controllers;

use App\Models\Programador;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProgramadorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $files = Programador::all();
        return view('img.programadores', compact('files'));
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

        $img = $request->file('file')->store('public/imagenes/programadores');

        $url = Storage::url($img);


        Programador::create([
            'nombre' => $request->nombre,
            'img' => $url
        ]);

        return redirect()->route('programadores.index')->with('create', 'la imagen se guardo correctamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Programador  $programador
     * @return \Illuminate\Http\Response
     */
    public function show(Programador $programador)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Programador  $programador
     * @return \Illuminate\Http\Response
     */
    public function edit(Programador $programador)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Programador  $programador
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Programador $programador)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Programador  $programador
     * @return \Illuminate\Http\Response
     */
    public function destroy(Programador $programador)
    {
        //
    }
}
