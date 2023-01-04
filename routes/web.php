<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Partner\EstablishmentController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    // return view('welcome');
    return view('pages.home');
});
Route::get('/search', function () {
    // return view('welcome');
    return view('pages.search');
});
Route::group(['prefix'=>'customers'],function(){

    Route::get('/inscription', function () {
        return view('pages.inscription');
    })->name('customers.register');
    
    Route::get('/connexion', function () {
        return view('pages.connexion');
    })->name('customers.login');
});




Route::group(['prefix' => 'partners','middleware' => ['auth', 'verified']], function () {
        Route::resource('establishment',EstablishmentController::class);
        // Route::get('/login',[EstablishmentController::class,'create'])->name('establishment.type');
        
        // Route::get('/create', function () {
        //     return view('pages.coordonnees');
        // })->name('establishment.create');
    
});

Route::group(['prefix'=>'partners'],function(){
    Auth::routes(['verify'=>true]);
    
});


// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
