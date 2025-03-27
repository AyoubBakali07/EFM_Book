<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreLivreRequest;
use App\Models\Livre;
use Illuminate\Http\Request;

class LivreController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $livres = Livre::orderBy('created_at', 'desc')->paginate(10);
        return view('livres.index', compact('livres'));
    }
    
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('livres.create');
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreLivreRequest $request)
    {
        Livre::create($request->validated());
        return redirect()->route('livres.index')
                         ->with('success', 'Livre ajouté avec succès!');
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

