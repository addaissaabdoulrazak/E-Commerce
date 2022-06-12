<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategorieController;
use App\Http\Controllers\clientController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\ProduitController;
use App\Http\Controllers\SliderController;


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

Route::prefix("categorie")->group(function(){

    route::get('/ajouter',[CategorieController::class,'ajouter']);
    route::get('/edit/{id}', [CategorieController::class, 'edit'])->name('categorie.edit');
    route::post('/update', [CategorieController::class, 'update'])->name('categorie.update');
    route::post('/save',[CategorieController::class,'save'])->name('save')->name('Produit_name');
    route::get('/categories',[CategorieController::class,'categorie']);
});


//*--======================================= Gestion des Produits ===============================--
Route::prefix("produit")->group(function(){
    route::get('/ajouter',[ProduitController::class,'ajouter']);
    route::post('/save',[ProduitController::class,'save']);
    route::get('/produits',[ProduitController::class,'produits']);
});

//*--======================================= Gestion des Slider ===============================--
Route::prefix("slider")->group(function(){
    route::get('/ajouter',[SliderController::class,'ajouter']);
    route::post('/save',[SliderController::class,'save']);
    route::get('/sliders',[SliderController::class,'sliders']);
});
//*--======================================= Gestion des Commandes ===============================--
route::prefix('commande')->group(function(){
    route::get('/commandes', [AdminController::class,'commandes']);
});