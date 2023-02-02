<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ProjectController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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

Route::middleware(['auth', 'verified'])
    ->prefix('admin') //porzione uri
    ->name('admin.')    //name rotta
    ->group(function (){
        // READ- legge tutti gli elementi della mia tabella
        //Route::get("/comics", [DashboardController::class, "index"])->name("comics.index");
        //CREATE- attraverso un form chiediamo informazioni per creare una nuova istanza/elemento della mia tabella Comics
        //Route::get("/comics/create", [DashboardController::class, "create"])->name("comics.create");
        //SHOW- mostra una singola istanza/elemento, passo valore dinamico: id
        //Route::get("/comics/{comic}", [DashboardController::class, "show"])->name('comics.show');
        //STORE- salva i dati inseriti tramite comics.create nel mio db
        //Route::post("/comics", [DashboardController::class, "store"])->name("comics.store");
        //EDIT - Aggiorno i dati di una risorsa/istanza con un form 
        //Route::get("/comics/{comic}/edit", [DashboardController::class, "edit"])->name("comics.edit"); 
        //UPDATE- ricevo dati del from edit e aggiorno DB
        //Route::put("/comics/{comic}", [DashboardController::class, "update"])->name("comics.update");
        //DELETE- cancello dati
        //Route::delete("/comics/{comic}",[DashboardController::class, "destroy"])->name("comics.destroy");
    
        Route::resource("categories", CategoryController::class);
        //queste iniziano tutte con nomi :admin. rotte: admin/
        // php artisan route:list
    });

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';


