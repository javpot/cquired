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

Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Added manually
Route::apiResource('subscription', SubscriptionController::class);
Route::apiResource('agency', AgencyController::class);
Route::apiResource('client', ClientController::class);
Route::apiResource('post', PostController::class);

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
