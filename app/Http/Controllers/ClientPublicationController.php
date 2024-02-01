<?php

namespace App\Http\Controllers;

use App\Models\client_publication;
use Illuminate\Http\Request;

// SI CE CONTROLLER NE FONCTIONNE PAS, C'EST A CAUSE DU NOM DU MODEL

class ClientPublicationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $clientPublications = client_publication::all();
        return view('client_publications.index', compact('clientPublications'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('client_publications.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        client_publication::create($request->all());
        return redirect()->route('client_publications.index')->with('success', 'Client Publication created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(client_publication $client_publication)
    {
        return view('client_publications.show', compact('client_publication'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(client_publication $client_publication)
    {
        return view('client_publications.edit', compact('client_publication'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, client_publication $client_publication)
    {
        $client_publication->update($request->all());
        return redirect()->route('client_publications.index')->with('success', 'Client Publication updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(client_publication $client_publication)
    {
        $client_publication->delete();
        return redirect()->route('client_publications.index')->with('success', 'Client Publication deleted successfully.');
    }
}
