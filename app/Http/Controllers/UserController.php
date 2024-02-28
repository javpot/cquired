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
}
