<?php

namespace App\Http\Controllers;

use App\Models\User;
use Inertia\Inertia;
use Inertia\Response;
use App\Models\Client;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests\ClientUpdateRequest;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $clients = Client::all();
        return response()->json(['clients' => $clients])
            ->header('Content-Type', 'application/json')
            ->header('Access-Control-Allow-Origin', '*');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $client = Client::create($request->all());
        return response()->json(['client' => $client], 201)
            ->header('Content-Type', 'application/json')
            ->header('Access-Control-Allow-Origin', '*');
    }

    /**
     * Display the specified resource.
     */
    public function show(Client $client)
    {
        return response()->json(['client' => $client])
            ->header('Content-Type', 'application/json')
            ->header('Access-Control-Allow-Origin', '*');
    }

    /**
     * Display the user's profile form.
     */
    public function edit(Request $request): Response
    {
        return Inertia::render('ClientDetails', [
            'mustVerifyEmail' => $request->user() instanceof MustVerifyEmail,
            'status' => session('status'),
        ]);
    }


    /**
     * Update the client's profile information. 
     */
    public function update(ClientUpdateRequest $request): RedirectResponse
    {
        //MODIFY FOR CLIENT !!!!
        $request->user()->fill($request->validated());

        if ($request->user()->isDirty('email')) {
            $request->user()->email_verified_at = null;
        }

        $request->user()->save();

        return Redirect::route('profile.edit');
    }

    public function uploadImage(Request $request)
{
    // ERROR client does not exist
    $client = auth()->client();
        if (!$client) {
            // Gérer le cas où le client n'est pas trouvé / n'est pas authentifié
            return response()->json(['message' => 'Client not authenticated'], 401);
        }
    $path = $request->file('picture')->store();
    $client->picture = $path;
    $client->save();

        return response()->json(['message' => 'picture updated successfully']);
}

// a changer
    public function loadImage(Client $client)
    {
        return response()->json(['client' => $client])
            ->header('Content-Type', 'application/json')
            ->header('Access-Control-Allow-Origin', '*');
}

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Client $client)
    {
        $client->delete();
        return response()->json(null, 204)
            ->header('Content-Type', 'application/json')
            ->header('Access-Control-Allow-Origin', '*');
    }
}
