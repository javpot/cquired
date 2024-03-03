<?php

namespace App\Http\Controllers;

use App\Models\User;
use Inertia\Inertia;
use Inertia\Response;
use App\Models\Client;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;

class ImageController extends Controller
{

public function getPicture(Request $request, $image) {

    $picturePath = $image;

    if ($picturePath) {
        // Get the content of the picture file
        $pictureContent = Storage::get("/public/profile_images/" . $picturePath);

        // Set the appropriate content type header
        $contentType = Storage::mimeType($picturePath);
        
        // Return the binary data with the correct content type
        return response($pictureContent)
        ->header('Content-Type' , $contentType)
        ->header('Access-Control-Allow-Origin' , '*');
    } else {
        return response()->json(['message' => 'User does not have a picture'], 404);
    }
}

public function getBanner(Request $request, $image) {

    $picturePath = $image;

    if ($picturePath) {
        // Get the content of the picture file
        $pictureContent = Storage::get("/public/banner_images/" . $picturePath);

        // Set the appropriate content type header
        $contentType = Storage::mimeType($picturePath);
        
        // Return the binary data with the correct content type
        return response($pictureContent)
        ->header('Content-Type' , $contentType)
        ->header('Access-Control-Allow-Origin' , '*');
    } else {
        return response()->json(['message' => 'User does not have a picture'], 404);
    }
}

}