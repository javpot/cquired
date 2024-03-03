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
use Illuminate\Support\Facades\Storage;

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
    public function edit(Request $request)
    {
        return Inertia::render('ClientDetails');
    }

        public function getClientByEmail($email)
    {
        $client = Client::where('email', $email)->first();

        return $client;
    }

    /**
     * Update the client's profile information. 
     */
public function update(ClientUpdateRequest $request): RedirectResponse {
        //MODIFY FOR CLIENT !!!!
        $request->user()->fill($request->validated());

        if ($request->user()->isDirty('email')) {
            $request->user()->email_verified_at = null;
        }

        $request->user()->save();

        return Redirect::route('profile.edit');
}

public function uploadPicture(Request $request) {
    $user = auth()->user();
    $userEmail = $user->email;

    $client = $this->getClientByEmail($userEmail);
        if (!$client) {
            // Gérer le cas où le client n'est pas trouvé / n'est pas authentifié
            return response()->json(['message' => 'Client not authenticated'], 401);
        }
    $path = $request->file('picture')->store('public/profile_images');
    $client->picture = $path;
    $client->save();

        return response()->json(['message' => 'picture updated successfully']);
}

public function deletePicture(Request $request) {
    $user = auth()->user();
    $userEmail = $user->email;

    $client = $this->getClientByEmail($userEmail);
    if (!$client) {
        // Gérer le cas où le client n'est pas trouvé / n'est pas authentifié
        return response()->json(['message' => 'Client not authenticated'], 401);
    }

    $currentPicture = $client->picture;

    if ($currentPicture) {
        // Delete the picture from storage
        Storage::delete($currentPicture);

        $client->picture = null; // instead of null we could have a default image

        $client->save();

        return response()->json(['message' => 'Picture deleted successfully']);
    } else {
        return response()->json(['message' => 'Client does not have a picture'], 400);
    }
}

public function uploadBanner(Request $request) {
    $user = auth()->user();
    $userEmail = $user->email;

    $client = $this->getClientByEmail($userEmail);
        if (!$client) {
            // Gérer le cas où le client n'est pas trouvé / n'est pas authentifié
            return response()->json(['message' => 'Client not authenticated'], 401);
        }
    $path = $request->file('banner')->store('public/banner_images');
    $client->banner = $path;
    $client->save();

        return response()->json(['message' => 'picture updated successfully']);
}

public function deleteBanner(Request $request) {
    $user = auth()->user();
    $userEmail = $user->email;

    $client = $this->getclientByEmail($userEmail);
    if (!$client) {
        // Gérer le cas où le client n'est pas trouvé / n'est pas authentifié
        return response()->json(['message' => 'client not authenticated'], 401);
    }

    $currentBanner = $client->banner;

    if ($currentBanner) {
        // Delete the Banner from storage
        Storage::delete($currentBanner);

        $client->banner = null; // instead of null we could have a default image

        $client->save();

        return response()->json(['message' => 'Banner deleted successfully']);
    } else {
        return response()->json(['message' => 'client does not have a banner'], 400);
    }
}

public function updateStatus(Request $request) {
    $user = auth()->user();
    $userEmail = $user->email;

    $client = $this->getClientByEmail($userEmail);
        if (!$client) {
            // Gérer le cas où le client n'est pas trouvé / n'est pas authentifié
            return response()->json(['message' => 'Client not authenticated'], 401);
        }
    $status = $request->input('status');
    $client->status = $status;
    $client->save();

        return response()->json(['message' => 'status updated successfully']);

}

public function updateBio(Request $request) {
    $user = auth()->user();
    $userEmail = $user->email;

    $client = $this->getClientByEmail($userEmail);
        if (!$client) {
            // Gérer le cas où le client n'est pas trouvé / n'est pas authentifié
            return response()->json(['message' => 'Client not authenticated'], 401);
        }
    $bio = $request->input('bio');
    $client->bio = $bio;
    $client->save();

        return response()->json(['message' => 'bio updated successfully']);

}


/**
 * Remove the specified resource from storage.
 */
public function destroy(Client $client) {
        $client->delete();
        return response()->json(null, 204)
            ->header('Content-Type', 'application/json')
            ->header('Access-Control-Allow-Origin', '*');
    }
}
