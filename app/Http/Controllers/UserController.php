<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    /**
     * Checks if email exists
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function verifyEmail(Request $request)
    {
        $email = $request->input('email');

        $exists = User::where('email', $email)->exists();

        if ($exists) {
            return response()->json([
                'success' => false,
                'message' => 'Email already exists',
            ]);
        }

        return response()->json([
            'success' => true,
            'message' => 'Email does not exist',
        ]);
    }
    public function addCategory(Request $request){
        $user = auth()->user();
        if (!$user) {
            // Gérer le cas où l'utilisateur n'est pas trouvé / n'est pas authentifié
            return response()->json(['message' => 'User not authenticated'], 401);
        }
    
        $category = $request->input('category');
        $user->category = $category;
        $user->save();
    
        return response()->json(['message' => 'Category updated successfully']);
    }
    
}
