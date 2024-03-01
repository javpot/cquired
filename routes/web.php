<?php

use Inertia\Inertia;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;


// Added manually. See line 48
use App\Http\Controllers\UserController;
use App\Http\Controllers\AgencyController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\GoogleAuthController;
use App\Http\Controllers\StripeWebhookController;


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

// temporaire, nous n'avons pas une page d'accueil sans login
Route::get('/', function () {
    return Inertia::render('Auth/Register');
});

Route::get('/login', function () {
    return Inertia::render('Auth/Login');
})->name('login');

Route::get('/register', function () {
    return Inertia::render('Auth/Register');
})->name('register');

// inutile
Route::post('/signup', [UserController::class, 'verifyEmail'])->name('signup.verify'); // Creer cette methode dans UserController elle check dans la table users si cette email existe

Route::get('/messages', function () {
    return Inertia::render('Messages');
})->middleware(['auth', 'verified'])->name('messages');

// pourrait etre comme le group du profile
Route::get('/agency-profile', function () {
    return Inertia::render('AgencyDetails');
})->middleware(['auth', 'verified'])->name('agency-profile');

// pourrait etre comme le group du profile
Route::get('/client-profile', function () {
    return Inertia::render('ClientDetails');
})->middleware(['auth', 'verified'])->name('client-profile');

Route::get('/post-list', function () {
    return Inertia::render('Posts');
})->middleware(['auth', 'verified'])->name('post-list');

// pour la creation dun post sa devrait etre comme celui du profile settings
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

Route::post('/client-profile/image', [ClientController::class, 'uploadImage'])->middleware(['auth', 'verified']);
Route::post('/agency-profile/image', [AgencyController::class, 'uploadImage'])->middleware(['auth', 'verified']);


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

// API DATA
Route::apiResource('agencies', AgencyController::class);
Route::apiResource('clients', ClientController::class);
Route::apiResource('posts', PostController::class);

Route::get('/validate-email', [UserController::class, 'verifyEmail']);

Route::get('/add-category', [UserController::class, 'addCategory']);

// API GOOGLE
Route::get('auth/google/', [GoogleAuthController::class, 'redirect'])->name('google-auth');
Route::get('auth/google/callback', [GoogleAuthController::class, 'callbackGoogle']);
Route::get('/get-user-data', function () {
	$res = response()->json(null);
	if (Session::get('usedGoogle') == false) {
		$res = response()->json(Session::get('user_data'));
		Session::forget('usedGoogle');
		Session::put('usedGoogle', true);
	} else {
		$res = response()->json(null);
		Session::forget('user_data');
		Session::forget('usedGoogle');
		Session::put('usedGoogle', false);
	}
    return $res;
});


// API STRIPE
Route::post('/stripe/ourwebhook', [StripeWebhookController::class, 'handleWebhook']);

Route::get('/subscription-starter', function (Request $request) {
    $request->user()
        ->newSubscription('starter', 'price_1Ooq5uH95x8ZWvcZMXBs6NPq')->create(null);
    return Inertia::render('Dashboard');
    })->name('subscription-starter');

Route::get('/subscription-basic', function (Request $request) {
    return $request->user()
        ->newSubscription('basic', 'price_1On0tLH95x8ZWvcZshsoURrW')
        ->checkout([
            'success_url' => route('dashboard'),
            'cancel_url' => route('register'),
        ]);
        
})->name('subscription-basic');

Route::get('/subscription-business', function (Request $request) {
    return $request->user()
    ->newSubscription('business','price_1On0yiH95x8ZWvcZ2dpAv8ka')
    ->checkout([
        'success_url' => route('dashboard'),
        'cancel_url' => route('register'),
    ]);
})->name('subscription-business');

Route::get('/subscription-enterprise', function (Request $request) {
    return $request->user()
    ->newSubscription('enterprise','price_1On10FH95x8ZWvcZOcBBfjUk')
    ->checkout([
        'success_url' => route('dashboard'),
        'cancel_url' => route('register'),
    ]);
})->name('subscription-enterprise');
 
// Route pour qu'un agency ou freelance puisse modifer son abonnement
Route::get('/billing', function (Request $request) {
    return $request->user()->redirectToBillingPortal(route('dashboard'));
})->middleware(['auth'])->name('billing');

require __DIR__ . '/auth.php';
