<?php

namespace App\Http\Controllers;

use App\Models\User;
use Inertia\Inertia;
use Inertia\Response;
use App\Models\Agency;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests\AgencyUpdateRequest;
use Illuminate\Support\Facades\Storage;



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

    public function getAgencyByEmail($email)
    {
        $agency = Agency::where('email', $email)->first();

        return $agency;
    }

    public function getAgencyById($id)
    {
        $agency = Agency::where('id', $id)->first();

        return $agency;
    }

    public function edit(Request $request) 
    {
        return Inertia::render('AgencyDetails');
    }
    
public function viewGuest(Request $request, $id) {
    $agency = $this->getAgencyById($id);

    if (!$agency) {
        return response()->json(['error' => 'Agency not found'], 404);
    }

    return Inertia::render('AgencyDetailsVisitor', [
        'agency' => $agency,
    ]);
}

public function uploadPicture(Request $request) {
    $user = auth()->user();
    $userEmail = $user->email;

    $agency = $this->getAgencyByEmail($userEmail);
        if (!$agency) {
            // Gérer le cas où le agency n'est pas trouvé / n'est pas authentifié
            return response()->json(['message' => 'Agency not authenticated'], 401);
        }
    $path = $request->file('picture')->store('public/profile_images');
    $agency->picture = $path;
    $agency->save();

        return response()->json(['message' => 'picture updated successfully']);
}

public function deletePicture(Request $request) {
    $user = auth()->user();
    $userEmail = $user->email;

    $agency = $this->getAgencyByEmail($userEmail);
    if (!$agency) {
        // Gérer le cas où le agency n'est pas trouvé / n'est pas authentifié
        return response()->json(['message' => 'agency not authenticated'], 401);
    }

    $currentPicture = $agency->picture;

    if ($currentPicture) {
        // Delete the picture from storage
        Storage::delete($currentPicture);

        $defaultPic = 'public/profile_images/pfp-icon.png';
        $agency->picture = $defaultPic;

        $agency->save();

        return response()->json(['message' => 'Picture deleted successfully']);
    } else {
        return response()->json(['message' => 'agency does not have a picture'], 400);
    }
}

public function uploadBanner(Request $request) {
    $user = auth()->user();
    $userEmail = $user->email;

    $agency = $this->getAgencyByEmail($userEmail);
        if (!$agency) {
            // Gérer le cas où le agency n'est pas trouvé / n'est pas authentifié
            return response()->json(['message' => 'Agency not authenticated'], 401);
        }
    $path = $request->file('banner')->store('public/banner_images');
    $agency->banner = $path;
    $agency->save();

        return response()->json(['message' => 'picture updated successfully']);
}

public function deleteBanner(Request $request) {
    $user = auth()->user();
    $userEmail = $user->email;

    $agency = $this->getAgencyByEmail($userEmail);
    if (!$agency) {
        // Gérer le cas où le agency n'est pas trouvé / n'est pas authentifié
        return response()->json(['message' => 'agency not authenticated'], 401);
    }

    $currentBanner = $agency->banner;

    if ($currentBanner) {
        // Delete the Banner from storage
        Storage::delete($currentBanner);

        $defaultPic = 'public/banner_images/clientImgAccueil.jpg';
        $agency->banner = $defaultPic;

        $agency->save();

        return response()->json(['message' => 'Banner deleted successfully']);
    } else {
        return response()->json(['message' => 'agency does not have a picture'], 400);
    }
}

public function updateBio(Request $request) {
    $user = auth()->user();
    $userEmail = $user->email;

    $agency = $this->getAgencyByEmail($userEmail);
        if (!$agency) {
            // Gérer le cas où le agency n'est pas trouvé / n'est pas authentifié
            return response()->json(['message' => 'Agency not authenticated'], 401);
        }
        $bio = $request->input('bio');
        $agency->bio = $bio;
        $agency->save();
    
            return response()->json(['message' => 'bio updated successfully']);
    }

public function saveClient(Request $request, $clientId) {
    $user = auth()->user();
    $userEmail = $user->email;

    $agency = $this->getAgencyByEmail($userEmail);
        if (!$agency) {
            // Gérer le cas où le agency n'est pas trouvé / n'est pas authentifié
            return response()->json(['message' => 'Agency not authenticated'], 401);
        }

    $saved = $agency->saved;
    array_push($saved['saved'], $clientId);
    $agency->saved = $saved;
    $agency->save();

    }

public function deleteClient(Request $request, $clientId) {
    $user = auth()->user();
    $userEmail = $user->email;

    $agency = $this->getAgencyByEmail($userEmail);
        if (!$agency) {
            // Gérer le cas où le agency n'est pas trouvé / n'est pas authentifié
            return response()->json(['message' => 'Agency not authenticated'], 401);
        }
    $saved = $agency->saved;
    $key = array_search($clientId, $saved['saved']);
    unset($saved['saved'][$key]);
    $newSaved = $saved;
    $agency->saved = $newSaved;
    $agency->save();

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
