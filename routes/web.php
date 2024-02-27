<?php

use Inertia\Inertia;
use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Application;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Session;

// Added manually. See line 48
use App\Http\Controllers\UserController;
use App\Http\Controllers\AgencyController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\GoogleAuthController;
use App\Http\Controllers\SubscriptionController;
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

Route::get('/', function () { // verif si user est connecter ou pas pour la redirection
    return Inertia::render('Accueil', [
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
// Route::apiResource('subscriptions', SubscriptionController::class); faut changer le controller et le model, car la table subscriptions quon utilise maintenant est celui generer par stripe
Route::apiResource('agencies', AgencyController::class);
Route::apiResource('clients', ClientController::class);
Route::apiResource('posts', PostController::class);

Route::get('auth/google/', [GoogleAuthController::class, 'redirect'])->name('google-auth');
Route::get('auth/google/callback', [GoogleAuthController::class, 'callbackGoogle']);
Route::get('/get-user-data', function () {
    return response()->json(Session::get('user_data'));
});

Route::post('/stripe/webhook', [StripeWebhookController::class, 'handleWebhook']);
Route::get('/product-checkout', function (Request $request) {
    return $request->user()->checkout('https://buy.stripe.com/test_9AQ03H6iecsu22I5kn')->name('basic-stripe');
});
Route::get('/subscription-basic', function (Request $request) {
    return $request->user()
    ->newSubscription('default','price_basic_monthly')
    ->checkout([
        'success_url' => route('/dashboard'),
        'cancel_url' => route('/register'),
    ])->name('subscription-basic');
});

Route::get('/subscription-business', function (Request $request) {
    return $request->user()
    ->newSubscription('default','price_business_monthly')
    ->checkout([
        'success_url' => route('/dashboard'),
        'cancel_url' => route('/register'),
    ])->name('subscription-business');
});

Route::get('/subscription-enterprise', function (Request $request) {
    return $request->user()
    ->newSubscription('default','price_enterprise_monthly')
    ->checkout([
        'success_url' => route('/dashboard'),
        'cancel_url' => route('/register'),
    ])->name('subscription-enterprise');
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


require __DIR__ . '/auth.php';
