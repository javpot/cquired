<?php

namespace App\Http\Controllers;

use App\Models\agence_abonnement;
use Illuminate\Http\Request;


// SI CE CONTROLLER NE FONCTIONNE PAS, C'EST A CAUSE DU NOM DU MODEL


class AgenceAbonnementController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $agenceAbonnements = agence_abonnement::all();
        return view('agence_abonnements.index', compact('agenceAbonnements'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('agence_abonnements.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'agence_id' => 'required',
            'abonnement_id' => 'required',
        ]);

        agence_abonnement::create($validatedData);

        return redirect()->route('agence_abonnements.index')->with('success', 'Agence Abonnement created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(agence_abonnement $agenceAbonnement)
    {
        return view('agence_abonnements.show', compact('agenceAbonnement'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(agence_abonnement $agenceAbonnement)
    {
        return view('agence_abonnements.edit', compact('agenceAbonnement'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, agence_abonnement $agenceAbonnement)
    {
        $validatedData = $request->validate([
            'agence_id' => 'required',
            'abonnement_id' => 'required',
        ]);

        $agenceAbonnement->update($validatedData);

        return redirect()->route('agence_abonnements.index')->with('success', 'Agence Abonnement updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(agence_abonnement $agenceAbonnement)
    {
        $agenceAbonnement->delete();

        return redirect()->route('agence_abonnements.index')->with('success', 'Agence Abonnement deleted successfully.');
    }
}
