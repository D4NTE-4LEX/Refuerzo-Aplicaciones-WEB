<?php

namespace App\Http\Controllers;

use App\Models\Paquete;
use App\Models\User;
use Illuminate\Http\Request;

class PaqueteController extends Controller
{
    public function index()
    {
        // Fetch all packages with their associated users
        $paquetes = Paquete::with('usuario')->get();

        // Fetch all users for the "Create Package" modal
        $usuarios = User::all();

        // Pass the data to the home view
        return view('home', compact('paquetes', 'usuarios'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'peso' => 'required|numeric',
            'dimensiones' => 'required|string',
            'estado' => 'required|string',
            'usuario_id' => 'required|exists:users,id',
        ]);

        Paquete::create($request->all());
        return redirect()->route('paquetes.index')->with('success', 'Paquete creado exitosamente.');
    }

    public function update(Request $request, Paquete $paquete)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'peso' => 'required|numeric',
            'dimensiones' => 'required|string',
            'estado' => 'required|string',
        ]);

        $paquete->update($request->all());
        return redirect()->route('paquetes.index')->with('success', 'Paquete actualizado exitosamente.');
    }

    public function destroy(Paquete $paquete)
    {
        $paquete->delete();
        return redirect()->route('paquetes.index')->with('success', 'Paquete eliminado exitosamente.');
    }
}
