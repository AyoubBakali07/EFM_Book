<?php

namespace App\Http\Controllers;

use App\Models\Livre;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Widget 1 : Nombre total de livres
        $totalLivres = Livre::count();

        // Widget 2 : Les 5 derniers livres ajoutés (triés par date de création décroissante)
        $latestLivres = Livre::orderBy('created_at', 'desc')->take(5)->get();

        // Gestion d'erreur : s'il n'y a aucun livre, définir un message d'alerte
        $errorMessage = null;
        if ($totalLivres === 0) {
            $errorMessage = "Aucun livre n'a été trouvé.";
        }

        return view('dashboard', compact('totalLivres', 'latestLivres', 'errorMessage'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
