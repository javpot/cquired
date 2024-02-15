<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    /**
     * Vérifie si l'email existe déjà dans la base de données.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function verifyEmail(Request $request)
    {
        // Récupère l'email du formulaire
        $email = $request->input('email');

        // Vérifie si un utilisateur avec cet email existe déjà
        $exists = User::where('email', $email)->exists();

        if ($exists) {
            // Si l'email existe déjà, retourne une réponse indiquant que l'email est déjà pris
            return response()->json([
                'success' => false,
                'message' => 'Cet email est déjà utilisé par un autre compte.',
            ]);
        }

        // Si l'email n'existe pas, retourne une réponse positive
        return response()->json([
            'success' => true,
            'message' => 'Cet email est disponible.',
        ]);
    }
}
