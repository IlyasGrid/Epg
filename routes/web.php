<?php

use App\Http\Controllers\LangueController;
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
Route::view('/services.php', "services.services");

Route::group(['prefix' => 'Documentations'], function () {
    Route::get('/Minha.pdf', function () {
        $filePath = public_path('assets/Minha.pdf');
        $file = new \SplFileInfo($filePath);

        return response()->file($file->getRealPath(), [
            'Content-Type' => 'application/pdf',
            'Content-Disposition' => 'attachment; filename="Minha.pdf"'
        ]);
    });
    Route::get('/Pieces à Fournire(Etr au maroc-1er année).pdf', function () {
        $filePath = public_path('assets/Pieces à Fournire(Etr au maroc-1er année).pdf');
        $file = new \SplFileInfo($filePath);

        return response()->file($file->getRealPath(), [
            'Content-Type' => 'application/pdf',
            'Content-Disposition' => 'attachment; filename="Pieces à Fournire(Etr au maroc-1er année).pdf"'
        ]);
    });
    Route::get('/Réglement-Intérieur.pdf', function () {
        $filePath = public_path('assets/Réglement-Intérieur.pdf');
        $file = new \SplFileInfo($filePath);

        return response()->file($file->getRealPath(), [
            'Content-Type' => 'application/pdf',
            'Content-Disposition' => 'attachment; filename="Réglement-Intérieur.pdf"'
        ]);
    });
    Route::get('/Pieces à Fournire(Etr).pdf', function () {
        $filePath = public_path('assets/Pieces à Fournire(Etr).pdf');
        $file = new \SplFileInfo($filePath);

        return response()->file($file->getRealPath(), [
            'Content-Type' => 'application/pdf',
            'Content-Disposition' => 'attachment; filename="Pieces à Fournire(Etr).pdf"'
        ]);
    });
    Route::get('/Pieces à Fournire(Etr au maroc-2em année).pdf', function () {
        $filePath = public_path('assets/Pieces à Fournire(Etr au maroc-2em année).pdf');
        $file = new \SplFileInfo($filePath);

        return response()->file($file->getRealPath(), [
            'Content-Type' => 'application/pdf',
            'Content-Disposition' => 'attachment; filename="Pieces à Fournire(Etr au maroc-2em année).pdf"'
        ]);
    });
    // Route::get('/.pdf', function () {
    //     $filePath = public_path('assets/.pdf');
    //     $file = new \SplFileInfo($filePath);

    //     return response()->file($file->getRealPath(), [
    //         'Content-Type' => 'application/pdf',
    //         'Content-Disposition' => 'attachment; filename=".pdf"'
    //     ]);
    // });
});


Route::group(['prefix' => 'Formations'], function () {
    Route::view('/', "Formations.index");
});

Route::resource('/Languages',LangueController::class);

Route::group(['prefix' => 'Diplomes'], function () {

    Route::group(['prefix' => 'technicienSpecialise'], function () {
        Route::view('/Technicien-Spécialisé-Développement-Informatique.php', "Diplomes.technicienSpecialise.Technicien-Spécialisé-Développement-Informatique");
    });
    Route::view('/', "Diplomes.index");
    Route::fallback(function () {
        return view("Diplomes.workingonit");
    });
});



Route::fallback(function () {
    return view("error");
});
