<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Paquete;
use App\Models\User;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // Fetch all packages with their associated users
        $paquetes = Paquete::with('usuario')->get();

        // Fetch all users for the "Create Package" modal
        $usuarios = User::all();

        // Pass the data to the home view
        return view('home', compact('paquetes', 'usuarios'));
    }
}
