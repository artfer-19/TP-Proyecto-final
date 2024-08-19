<?php

namespace App\Http\Controllers;

use App\Models\Publicacion;
use App\Models\Comentario;
use Illuminate\Http\Request;


class PublicacionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $publicaciones = Publicacion::all();
        return view('publicaciones.index')->with('publicaciones', $publicaciones);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $publicaciones = Publicacion::all();
        return view('publicaciones.crearPublicacion')->with('publicaciones', $publicaciones);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        return "Se recibio el formulario";
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
        //
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
        //
    }
}
