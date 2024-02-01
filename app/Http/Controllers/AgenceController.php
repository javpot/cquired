<?php

namespace App\Http\Controllers;

use App\Models\Agence;
use Illuminate\Http\Request;

class AgenceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $agences = Agence::all();
        return view('agences.index', compact('agences'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('agences.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Agence::create($request->all());
        return redirect()->route('agences.index')->with('success', 'Agence created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Agence $agence)
    {
        return view('agences.show', compact('agence'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Agence $agence)
    {
        return view('agences.edit', compact('agence'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Agence $agence)
    {
        $agence->update($request->all());
        return redirect()->route('agences.index')->with('success', 'Agence updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Agence $agence)
    {
        $agence->delete();
        return redirect()->route('agences.index')->with('success', 'Agence deleted successfully.');
    }
}
