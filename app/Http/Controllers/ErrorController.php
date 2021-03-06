<?php

namespace App\Http\Controllers;

use App\Models\Error;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ErrorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $files = Error::all();
        return view('img.errores', compact('files'));
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

        $img = $request->file('file')->store('public/imagenes/errores');

        $url = Storage::url($img);


        Error::create([
            'nombre' => $request->nombre,
            'img' => $url
        ]);

        return redirect()->route('errores.index')->with('create', 'la imagen se guardo correctamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Error  $error
     * @return \Illuminate\Http\Response
     */
    public function show(Error $error)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Error  $error
     * @return \Illuminate\Http\Response
     */
    public function edit(Error $error)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Error  $error
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Error $error)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Error  $error
     * @return \Illuminate\Http\Response
     */
    public function destroy(Error $error)
    {
        //
    }
}
