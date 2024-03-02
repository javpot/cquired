<?php

namespace App\Http\Controllers;

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


    /**
     * Update the agency's profile information. 
     */
public function update(AgencyUpdateRequest $request): RedirectResponse {
        //MODIFY FOR AGENCY !!!!
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

    $agency = $this->getAgencyByEmail($userEmail);
        if (!$agency) {
            // Gérer le cas où le agency n'est pas trouvé / n'est pas authentifié
            return response()->json(['message' => 'Agency not authenticated'], 401);
        }
    $path = $request->file('picture')->store();
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

        $agency->picture = null; // instead of null we could have a default image

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
    $path = $request->file('banner')->store();
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

        $agency->banner = null; // instead of null we could have a default image

        $agency->save();

        return response()->json(['message' => 'Banner deleted successfully']);
    } else {
        return response()->json(['message' => 'agency does not have a picture'], 400);
    }
}

public function getPicture(Request $request) {
    $user = auth()->user();
    $userEmail = $user->email;

    $agency = $this->getagencyByEmail($userEmail);
        if (!$agency) {
            // Gérer le cas où le agency n'est pas trouvé / n'est pas authentifié
            return response()->json(['message' => 'agency not authenticated'], 401);
        }

    $picturePath = $agency->picture;

    if ($picturePath) {
        // Get the content of the picture file
        $pictureContent = Storage::get($picturePath);

        // Convert the binary content to base64 for inclusion in JSON response
        $base64Picture = base64_encode($pictureContent);

        return response()->json([
            'picture' => $base64Picture,
        ])->header('Content-Type', 'application/json')
          ->header('Access-Control-Allow-Origin', '*');
    } else {
        return response()->json(['message' => 'agency does not have a picture'], 404);
    }
}

public function getBanner(Request $request) {
    $user = auth()->user();
    $userEmail = $user->email;

    $agency = $this->getagencyByEmail($userEmail);
        if (!$agency) {
            // Gérer le cas où le agency n'est pas trouvé / n'est pas authentifié
            return response()->json(['message' => 'agency not authenticated'], 401);
        }

    $bannerPath = $agency->banner;

    if ($bannerPath) {
        // Get the content of the picture file
        $bannerContent = Storage::get($bannerPath);

        // Convert the binary content to base64 for inclusion in JSON response
        $base64Banner = base64_encode($bannerContent);

        return response()->json([
            'banner' => $base64Banner,
        ])->header('Content-Type', 'application/json')
          ->header('Access-Control-Allow-Origin', '*');
    } else {
        return response()->json(['message' => 'agency does not have a banner'], 404);
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
