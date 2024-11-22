<?php

namespace App\Http\Controllers;

use App\Models\Mascota;
use Illuminate\Http\Request;
use Illuminate\Routing\Controllers\HasMiddleware;
use Illuminate\Routing\Controllers\Middleware;
use Illuminate\Support\Facades\Auth;

class MascotaController extends Controller implements HasMiddleware
{
    public static function middleware(): array
    {
        return [
            new Middleware('auth', except: ['index', 'show']),
        ];
    }
    
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

        $request->merge([
            'user_id' => Auth::id(),
        ]);

        //Auth::user()->mascotas()->create($request->all());

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
        $validatedData = $request->validate([
            'nombre' => 'required|string',
            'tipo' => 'required|string|in:Perro,Gato,Raton,Huron,Reptil,Tortuga,Pez',
            'sexo' => 'required|string|in:Macho,Hembra',
            'edad' => 'required|string|min:0',
            'vacunas' => 'required|string',
            'padecimientos' => 'required|string',
        ]);

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
