<?php

namespace App\Http\Controllers;

use App\Models\Mascota;
use Illuminate\Http\Request;

class MascotaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $mascotas = Mascota::all();
        return view('mascotas.index-mascota', compact('mascotas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('mascotas.create-mascota');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => ['required', 'max:255'],
            'tipo' => ['required'],
            'sexo' => ['required'],
            'edad' => ['required'],
            'vacunas' => ['required'],
            'padecimientos' => ['required'],
        ]);
        $mascota = Mascota::create($request->all());
        return redirect()->route('mascota.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Mascota $mascota)
    {
        return view('mascotas.show-mascota', compact('mascota'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Mascota $mascota)
    {
        return view('mascotas.edit-mascota', compact('mascota'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Mascota $mascota)
    {
        $mascota->update($request->all());

        return redirect()->route('mascota.show', $mascota);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Mascota $mascota)
    {
        $mascota->delete();

        return redirect()->route('mascota.index');
    }
}
