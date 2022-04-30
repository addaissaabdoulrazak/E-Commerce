<?php

use App\Http\Controllers\CategorieController;
use App\Http\Controllers\clientController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;

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
    return view('welcome');
});

// Route::get('/home',function(){
//     return view('pages.home');
// });
Route::get('/apropos', 'App\Http\Controllers\PagesController@apropos');
 Route::get('/services',  [PagesController::class, 'services'])->name('home.services');



// ??--===================================== Client ========================================--

route::get('/home', [clientController::class, 'home']);
route::get('/panier', [clientController::class, 'panier']);
route::get('/paiyement' ,[clientController::class,'paiyement']);
route::get('/shop', [clientController::class,'shop']);
route::get('/client_login',[clientController::class, 'client_login']);
route::get('/register', [clientController::class,'register']);


// !!--====================================== Admin =============================================--

route::get('/administrateur', "App\Http\Controllers\AdminController@dashboard");

//*--======================================= Gestion des Categories ===============================--

Route::prefix("Categories")->group(function(){

    route::get('/ajouter',[CategorieController::class,'ajouter']);
    route::get('/save',[CategorieController::class,'save'])->name('save');
});
