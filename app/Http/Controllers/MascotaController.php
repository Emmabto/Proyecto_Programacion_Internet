<?php

namespace App\Http\Controllers;

use App\Models\Mascota;
use App\Models\Vacuna;
use Illuminate\Http\Request;
use Illuminate\Routing\Controllers\HasMiddleware;
use Illuminate\Routing\Controllers\Middleware;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;

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
        $mascotas = Mascota::with('vacunas')->with('user:id,name,email')->get();
        return view('mascotas.index-mascota', compact('mascotas'));
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('mascotas.create-mascota', [
            'vacunas' => Vacuna::all(),
        ]);
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

        $mascota = Mascota::create($request->all());

        $mascota->vacunas()->attach($request->vacunas);

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
        Gate::authorize('update', $mascota);

        $vacunas = Vacuna::all();
        return view('mascotas.edit-mascota', compact('mascota', 'vacunas'));
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
            'vacunas' => 'required|array',
            'padecimientos' => 'required|string',
        ]);

        Gate::authorize('update', $mascota);

        $mascota->update($request->all());
        $mascota->vacunas()->sync($request->vacunas);
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
