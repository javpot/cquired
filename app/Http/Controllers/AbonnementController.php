<?php

namespace App\Http\Controllers;

use App\Models\Abonnement;
use Illuminate\Http\Request;

class AbonnementController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $abonnements = Abonnement::all();
        return view('abonnements.index', compact('abonnements'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('abonnements.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Abonnement::create($request->all());
        return redirect()->route('abonnements.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Abonnement $abonnement)
    {
        return view('abonnements.show', compact('abonnement'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Abonnement $abonnement)
    {
        return view('abonnements.edit', compact('abonnement'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Abonnement $abonnement)
    {
        $abonnement->update($request->all());
        return redirect()->route('abonnements.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Abonnement $abonnement)
    {
        $abonnement->delete();
        return redirect()->route('abonnements.index');
    }
}
