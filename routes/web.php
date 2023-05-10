<?php

use App\Http\Controllers\DiplomeController;
use App\Http\Controllers\FormationController;
use App\Http\Controllers\LangueController;
use App\Models\Branche_Diplome;
use App\Models\Diplome;
use App\Models\Langue;
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


Route::view('/', "index");
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
Route::resource('/Diplomes', DiplomeController::class);
Route::resource('/Formations', FormationController::class);

// Route::get('/Diplome/{diplome_name?}/{branche_name?}', [LangueController::class,'ilyas'])->name('hhhhhh');



Route::get('/Diplome/{diplome_name}/{branche_name}', function ($diplome_name, $branche_name) {

    $branche = Branche_Diplome::where('Fullname', '=', $branche_name)->get();
    $branche_info = $branche[0];
    // dd($branche_info);

    return view('Diplomes.branche', ['diplome_name' => $diplome_name, 'branche_info' => $branche_info]);
});





Route::fallback(function () {
    return view("error");
});
