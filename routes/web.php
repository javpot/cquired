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
use App\Http\Controllers\ImageController;
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

Route::middleware('auth')->group(function () {
    Route::get('/agency-profile/{id}', [AgencyController::class, 'viewGuest']);
    Route::get('/agency-profile', [AgencyController::class, 'edit'])->name('agency-profile');
    Route::post('/agency-profile', [AgencyController::class, 'update'])->name('agency-profile');
    Route::delete('/agency-profile', [AgencyController::class, 'update'])->name('agency-profile');
});

Route::middleware('auth')->group(function () {
    Route::get('/client-profile/{id}', [ClientController::class, 'viewGuest']);
    Route::get('/client-profile', [ClientController::class, 'edit'])->name('client-profile');
    Route::post('/client-profile', [ClientController::class, 'update'])->name('client-profile');
    Route::delete('/client-profile', [ClientController::class, 'update'])->name('client-profile');
});

Route::get('/post-list', function () {
    return Inertia::render('Posts');
})->middleware(['auth', 'verified'])->name('post-list');

Route::middleware('auth')->group(function () {
    Route::get('/post', [PostController::class, 'edit'])->name('post');
    // Route::post('/post', [PostController::class, 'store']);
    // Route::delete('/post', [PostController::class, 'destroy']);
});

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

Route::middleware('auth')->group(function () {
// get picture
Route::get('/public/profile_images/{image}', [ImageController::class, 'getPicture']);
Route::get('/public/banner_images/{image}', [ImageController::class, 'getBanner']);
// get images visitor client
Route::get('/client-profile/public/profile_images/{image}', [ImageController::class, 'getPicture']);
Route::get('/client-profile/public/banner_images/{image}', [ImageController::class, 'getBanner']);
// get images visitor agency
Route::get('/agency-profile/public/profile_images/{image}', [ImageController::class, 'getPicture']);
Route::get('/agency-profile/public/banner_images/{image}', [ImageController::class, 'getBanner']);
// update picture
Route::post('/client-profile/picture', [ClientController::class, 'uploadPicture']);
Route::post('/agency-profile/picture', [AgencyController::class, 'uploadPicture']);
// update banner
Route::post('/client-profile/banner', [ClientController::class, 'uploadBanner']);
Route::post('/agency-profile/banner', [AgencyController::class, 'uploadBanner']);
// update status
Route::post('/client-profile/status', [ClientController::class, 'updateStatus']);
// update domain
Route::post('/client-profile/domain', [ClientController::class, 'updateDomain']);
// update bio
Route::post('/client-profile/bio', [ClientController::class, 'updateBio']);
Route::post('/agency-profile/bio', [AgencyController::class, 'updateBio']);
// remove picture
Route::delete('/client-profile/picture', [ClientController::class, 'deletePicture']);
Route::delete('/agency-profile/picture', [AgencyController::class, 'deletePicture']);
// remove banner
Route::delete('/client-profile/banner', [ClientController::class, 'deleteBanner']);
Route::delete('/agency-profile/banner', [AgencyController::class, 'deleteBanner']);
});


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

Route::post('/clients-domain', [ClientController::class, 'getClientsByDomain']);
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
