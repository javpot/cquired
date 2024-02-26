<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

// Added manually. See line 48
use App\Http\Controllers\SubscriptionController;
use App\Http\Controllers\AgencyController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\GoogleAuthController;
use App\Http\Controllers\UserController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
| To get all routes : php artisan route:list
|
*/

Route::get('/', function () { // verif si user est connecter ou pas pour la redirection
    return Inertia::render('Auth/Login', [
    ]);
});

Route::get('/login', function () {
    return Inertia::render('Auth/Login');
})->name('login');

Route::get('/register', function () {
    return Inertia::render('Auth/Register');
})->name('register');

// est ce quon utilise signup encore??? et la page aussi.
Route::post('/signup', [UserController::class, 'verifyEmail'])->name('signup.verify'); // Creer cette methode dans UserController elle check dans la table users si cette email existe

Route::get('/messages', function () {
    return Inertia::render('Messages');
})->middleware(['auth', 'verified'])->name('messages');

Route::get('/agency-profile', function () {
    return Inertia::render('AgencyDetails');
})->middleware(['auth', 'verified'])->name('agency-profile');

Route::get('/client-profile', function () {
    return Inertia::render('ClientDetails');
})->middleware(['auth', 'verified'])->name('client-profile');

Route::get('/client-list', function () {
    return Inertia::render('Clients');
})->middleware(['auth', 'verified'])->name('client-list');

Route::get('/post-list', function () {
    return Inertia::render('Posts');
})->middleware(['auth', 'verified'])->name('post-list');

Route::get('/post', function () {
    return Inertia::render('Post');
})->middleware(['auth', 'verified'])->name('post');

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/explore', function () {
    return Inertia::render('Explore');
})->middleware(['auth', 'verified'])->name('explore');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Added manually
Route::apiResource('subscriptions', SubscriptionController::class);
Route::apiResource('agencies', AgencyController::class);
Route::apiResource('clients', ClientController::class);
Route::apiResource('posts', PostController::class);

Route::get('auth/google/', [GoogleAuthController::class, 'redirect'])->name('google-auth');
Route::get('auth/google/callback', [GoogleAuthController::class, 'callbackGoogle']);

/* COMMENT Route::apiResource fonctionne:

GET /resource
GET /resource/{id}
POST /resource + JSON {
    "attribute1": "value1",
    "attribute2": "value2",
    // Additional attributes...
}
PUT /resource/{id} + JSON {
    "attribute1": "new_value1",
    "attribute2": "new_value2",
    // Additional attributes...
}


*/


require __DIR__ . '/auth.php';
