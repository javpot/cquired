<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

// Added manually. See line 48
use App\Http\Controllers\AbonnementController;
use App\Http\Controllers\AgenceAbonnementController;
use App\Http\Controllers\AgenceController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\ClientPublicationController;
use App\Http\Controllers\PublicationController;

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
Route::resource('abonnements', AbonnementController::class);
Route::resource('agence_abonnements', AgenceAbonnementController::class);
Route::resource('agences', AgenceController::class);
Route::resource('clients', ClientController::class);
Route::resource('client_publications', ClientPublicationController::class);
Route::resource('publications', PublicationController::class);


/* COMMENT Route::resource fonctionne:
src: https://laravel.com/docs/10.x/controllers#restful-naming-resource-routes:~:text=This%20route%20definition%20will%20define%20the%20following%20routes%3A

Method        | URI                        | Action   | Route Name
--------------|----------------------------|----------|-----------------
GET           | /resourceName              | index    | resourceName.index
GET           | /resourceName/create       | create   | resourceName.create
POST          | /resourceName              | store    | resourceName.store
GET           | /resourceName/{resource}   | show     | resourceName.show
GET           | /resourceName/{resource}/edit | edit   | resourceName.edit
PUT/PATCH     | /resourceName/{resource}   | update   | resourceName.update
DELETE        | /resourceName/{resource}   | destroy  | resourceName.destroy

En gros, chaque URI fais reference aux CRUD's dans le controller. 
On peut utiliser resource pour definir les routes de chaque methode CRUD.
Ensuite, une variable est utilisee pour faire reference au PATH complet de la route (Route Name).
Par exemple, dans AbonnementController.php, on redirect vers le [Route Name] et non le URI

*/


require __DIR__ . '/auth.php';
