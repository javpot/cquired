<?php

namespace App\Http\Middleware;

use Illuminate\Http\Request;
use App\Models\Client;
use App\Models\Agency;
use Inertia\Middleware;

class HandleInertiaRequests extends Middleware
{
    /**
     * The root template that is loaded on the first page visit.
     *
     * @var string
     */
    protected $rootView = 'app';

    /**
     * Determine the current asset version.
     */
    public function version(Request $request): string|null
    {
        return parent::version($request);
    }

public function share(Request $request): array
{
    $user = $request->user(); // Récupère l'utilisateur authentifié

    $clientInfo = null; // Initialiser la variable pour stocker les informations du client
    $agencyInfo = null; // Initialiser la variable pour stocker les informations du agency

    if ($user) {
        $email = $user->email; // Utiliser l'email de l'utilisateur authentifié
        $category = $user->category; // category du user: Client/Agency/Freelancer
        
        if ($category == 'Client') {
        $client = Client::where('email', $email)->first(); // Trouver le client correspondant
        if ($client) {
            // Si un client est trouvé, utiliser ses données directement
            // Vous pourriez vouloir limiter les informations partagées pour des raisons de sécurité
            $clientInfo = $client;
        }else {
            return 'Client pas trouver';
        }

        } else {
        $agency = Agency::where('email', $email)->first(); // Trouver le agency correspondant
        if ($agency) {
            // Si un agency est trouvé, utiliser ses données directement
            // Vous pourriez vouloir limiter les informations partagées pour des raisons de sécurité
            $agencyInfo = $agency;
        } else {
            return 'Agency pas trouver';
        }

        }

    }

    return [
        ...parent::share($request),
        'auth' => [
            'user' => $user,
            'client' => $clientInfo,
            'agency' => $agencyInfo,
        ],
    ];
}}
