<?php

namespace App\Http\Controllers;

use App\Models\Agency;
use Illuminate\Http\Request;

class AgencyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $Agencies = Agency::all();
        return response()->json(['Agencies' => $Agencies])
            ->header('Content-Type', 'application/json')
            ->header('Access-Control-Allow-Origin', '*');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $Agency = Agency::create($request->all());
        return response()->json(['Agency' => $Agency], 201)
            ->header('Content-Type', 'application/json')
            ->header('Access-Control-Allow-Origin', '*');
    }

    /**
     * Display the specified resource.
     */
    public function show(Agency $Agency)
    {
        return response()->json(['Agency' => $Agency])
            ->header('Content-Type', 'application/json')
            ->header('Access-Control-Allow-Origin', '*');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Agency $Agency)
    {
        $Agency->update($request->all());
        return response()->json(['Agency' => $Agency])
            ->header('Content-Type', 'application/json')
            ->header('Access-Control-Allow-Origin', '*');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Agency $Agency)
    {
        $Agency->delete();
        return response()->json(null, 204)
            ->header('Content-Type', 'application/json')
            ->header('Access-Control-Allow-Origin', '*');
    }
}
