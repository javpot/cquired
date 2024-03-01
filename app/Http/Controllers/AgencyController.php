<?php

namespace App\Http\Controllers;

use App\Models\Agency;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests\AgencyUpdateRequest;


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
     * Update the client's profile information. 
     */
    public function update(AgencyUpdateRequest $request): RedirectResponse
    {
        //MODIFY FOR AGENCY !!!!
        $request->user()->fill($request->validated());

        if ($request->user()->isDirty('email')) {
            $request->user()->email_verified_at = null;
        }

        $request->user()->save();

        return Redirect::route('profile.edit');
    }

    public function uploadImage(Request $request)
{
    // ERROR agency does not exist
    $agency = auth()->agency();
        if (!$agency) {
            // Gérer le cas où le client n'est pas trouvé / n'est pas authentifié
            return response()->json(['message' => 'Agency not authenticated'], 401);
        }
    $path = $request->file('picture')->store();
    $agency->picture = $path;
    $agency->save();

        return response()->json(['message' => 'picture updated successfully']);
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
