<?php

use App\Http\Controllers\DiplomeController;
use App\Http\Controllers\FormationController;
use App\Http\Controllers\LangueController;
use App\Models\Branche_Diplome;
use App\Models\Diplome;
use App\Models\Langue;
use App\Models\Tarification_Langue;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

$diplomes = Diplome::all();
Route::view('/', "index", ['diplomes' => $diplomes]);
// Route::get('/',function(){
//     return view('index');
// });
Route::view('/test', "components.layout");
Route::view('/contact.php', "contact");
Route::view('/cours-soutien-informatique.php', "cours-soutien-informatique");
Route::view('/Bourse.php', "Bourse");
Route::view('/A-propos.php', "A-propos");
Route::view('/services.php', "services");


Route::get('/Documentations/{name}', function ($name) {

    $filePath = public_path('assets/' . $name);
    $file = new \SplFileInfo($filePath);

    return response()->file($file->getRealPath(), [
        'Content-Type' => 'application/pdf',
        'Content-Disposition' => 'attachment; filename="' . $name . '"'
    ]);
});

// Route::group(['prefix' => 'Formations'], function () {
//     Route::view('/', "Formations.index");
// });

Route::resource('/Languages', LangueController::class);
<<<<<<< HEAD


Route::resource('/Diplomes', DiplomeController::class);
Route::resource('/Formations', FormationController::class);

=======
Route::resource('/Diplomes', DiplomeController::class);
Route::resource('/Formations', FormationController::class);

>>>>>>> daa08ba1287f16321074312f463eddda67c67991
// Route::get('/Diplome/{diplome_name?}/{branche_name?}', [LangueController::class,'ilyas'])->name('hhhhhh');



Route::get('/Diplome/{diplome_name}/{branche_name}', function ($diplome_name, $branche_name) {

    $branche = Branche_Diplome::where('Fullname', '=', $branche_name)->get();
    $branche_info = $branche[0];
    // dd($branche_info);

    return view('Diplomes.branche', ['diplome_name' => $diplome_name, 'branche_info' => $branche_info]);
});


<<<<<<< HEAD

Route::group(['prefix' => 'admin'], function () {

    Route::group(['prefix' => 'langues'], function () {
        Route::get('/create', [LangueController::class, 'create']);
        Route::get('/', [LangueController::class, 'adminShow']);
        Route::get('/edit/{id}', [LangueController::class, 'edit']);
        Route::put('/{id}', [LangueController::class, 'update']);
        Route::post('/', [LangueController::class, 'store']);
        Route::delete('/{id}', [LangueController::class, 'destroy']);
        // Tarification_Langue
        Route::get('/{id_langue}/tarification/create', [LangueController::class, 'createTarification']);
        Route::get('/{id_langue}/tarification', [LangueController::class, 'showTarification']);
        Route::get('/edit/{id_langue}/tarification/{id_tarif}', [LangueController::class, 'editTarification']);
        Route::put('/{id_langue}/tarification/{id_tarif}', [LangueController::class, 'updateTarification']);
        Route::post('/{id_langue}/tarification', [LangueController::class, 'storeTarification']);
        Route::delete('/{id_langue}/tarification/{id_tarif}', [LangueController::class, 'destroyTarification']);
        // NIveau_langue
        Route::get('/{id_langue}/niveau/create', [LangueController::class, 'createNiveau']);
        Route::get('/{id_langue}/niveau', [LangueController::class, 'showNiveau']);
        Route::get('/edit/{id_langue}/niveau/{id_tarif}', [LangueController::class, 'editNiveau']);
        Route::put('/{id_langue}/niveau/{id_tarif}', [LangueController::class, 'updateNiveau']);
        Route::post('/{id_langue}/niveau', [LangueController::class, 'storeNiveau']);
        Route::delete('/{id_langue}/niveau/{id_tarif}', [LangueController::class, 'destroyNiveau']);
    });
    Route::get('/home', [LangueController::class, 'adminHome']);
    // Route::view('/langues', "admin.langue");
});
=======
>>>>>>> daa08ba1287f16321074312f463eddda67c67991

Route::fallback(function () {
    return view("error");
});
