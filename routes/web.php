<?php

use App\Http\Controllers\CategorieController;
use App\Http\Controllers\DiplomeController;
use App\Http\Controllers\FormationController;
use App\Http\Controllers\LangueController;
use App\Http\Controllers\NivLangueController;
use App\Http\Controllers\ProgFormationController;
use App\Http\Controllers\SubCategorieController;
use App\Http\Controllers\TarifFormationController;
use App\Http\Controllers\TarifLangueController;
use App\Http\Controllers\UserController;
use App\Models\Branche_Diplome;
use App\Models\Diplome;
use App\Models\Formation;
use App\Models\Langue;
use App\Models\Tarification_Langue;
use Illuminate\Database\Eloquent\Scope;
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
Route::get('/', function () {
    $diplomes = Diplome::all();

    return view('index', compact('diplomes'));
});
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
Route::resource('/Formations', CategorieController::class);

Route::get('/Formations/{category}/{sub_category}/{formation}', [CategorieController::class, 'show']);

Route::get('/Diplome/{diplome_name}/{branche_name}', function ($diplome_name, $branche_name) {

    $branche = Branche_Diplome::where('Fullname', '=', $branche_name)->get();
    $branche_info = $branche[0];
    return view('Diplomes.branche', ['diplome_name' => $diplome_name, 'branche_info' => $branche_info]);
});





Route::get('admin/register', [UserController::class, 'register'])->name('register');
Route::post('admin/register', [UserController::class, 'storeAdmin'])->name('storeAdmin');

Route::group(['middleware' => 'checkuser'], function () {

    Route::get('admin/login', [UserController::class, 'login'])->name('login');
    Route::post('admin/login',  [UserController::class, 'auth'])->name('auth');
});

Route::middleware(['auth'])->group(function () {

    Route::get('admin/dashboard', [UserController::class, 'show'])->name('dashboard');
    Route::post('admin/logout', [UserController::class, 'logout'])->name('logout');


    Route::group(['prefix' => 'admin'], function () {


        Route::group(['prefix' => 'langues'], function () {

            Route::get('/', [LangueController::class, 'adminShow']);
            Route::get('/create', [LangueController::class, 'create']);
            Route::get('/edit/{id}', [LangueController::class, 'edit']);
            Route::put('/{id}', [LangueController::class, 'update']);
            Route::post('/', [LangueController::class, 'store']);
            Route::delete('/{id}', [LangueController::class, 'destroy']);
            Route::get('/trashed', [LangueController::class, 'trashed']);
            Route::get('/restore/{id}', [LangueController::class, 'restore']);

            // Tarification_Langue
            Route::group(['prefix' => '{id_langue}/tarification'], function () {
                Route::get('/create', [TarifLangueController::class, 'create']);
                Route::get('/', [TarifLangueController::class, 'show']);
                Route::get('/edit/{id_tarif}', [TarifLangueController::class, 'edit']);
                Route::put('/{id_tarif}', [TarifLangueController::class, 'update']);
                Route::post('', [TarifLangueController::class, 'store']);
                Route::delete('/{id_tarif}', [TarifLangueController::class, 'destroy']);
                Route::get('/trashed', [TarifLangueController::class, 'trashed']);
                Route::get('/restore/{id}', [TarifLangueController::class, 'restore']);
            });

            // NIveau_langue
            Route::group(['prefix' => '{id_langue}/niveau'], function () {
                Route::get('/create', [NivLangueController::class, 'create']);
                Route::get('/', [NivLangueController::class, 'show']);
                Route::get('/edit/{id_niveau}', [NivLangueController::class, 'edit']);
                Route::put('/{id_niveau}', [NivLangueController::class, 'update']);
                Route::post('', [NivLangueController::class, 'store']);
                Route::delete('/{id_niveau}', [NivLangueController::class, 'destroy']);
                Route::get('/trashed', [NivLangueController::class, 'trashed']);
                Route::get('/restore/{id}', [NivLangueController::class, 'restore']);
            });
        });


        Route::group(['prefix' => 'diplomes'], function () {
            Route::get('/create', [DiplomeController::class, 'create']);
            Route::get('/', [DiplomeController::class, 'adminShow']);
            Route::get('/edit/{id}', [DiplomeController::class, 'edit']);
            Route::put('/{id}', [DiplomeController::class, 'update']);
            Route::post('/', [DiplomeController::class, 'store']);
            Route::delete('/{id}', [DiplomeController::class, 'destroy']);
            Route::get('/trashed', [DiplomeController::class, 'trashed']);
            Route::get('/restore/{id}', [DiplomeController::class, 'restore']);

            // Branche
            Route::get('/{id_diplome}/branche/create', [DiplomeController::class, 'createBranche']);
            Route::get('/{id_diplome}/branche', [DiplomeController::class, 'showBranche']);
            Route::get('/edit/{id_diplome}/branche/{id_branche}', [DiplomeController::class, 'editBranche']);
            Route::put('/{id_diplome}/branche/{id_branche}', [DiplomeController::class, 'updateBranche']);
            Route::post('/{id_diplome}/branche', [DiplomeController::class, 'storeBranche']);
            Route::delete('/{id_diplome}/branche/{id_branche}', [DiplomeController::class, 'destroyBranche']);
            Route::get('/{id_diplome}/branche/trashed', [DiplomeController::class, 'trashedBranche']);
            Route::get('/{id_diplome}/branche/restore/{id}', [DiplomeController::class, 'restoreBranche']);
        });



        Route::group(['prefix' => 'categories'], function () {
            Route::get('/', [CategorieController::class, 'adminShow']);
            Route::get('/create', [CategorieController::class, 'create']);
            Route::get('/edit/{id}', [CategorieController::class, 'edit']);
            Route::put('/{id}', [CategorieController::class, 'update']);
            Route::post('/', [CategorieController::class, 'store']);
            Route::delete('/{id}', [CategorieController::class, 'destroy']);
            Route::get('/trashed', [CategorieController::class, 'trashed']);
            Route::get('/restore/{id}', [CategorieController::class, 'restore']);

            // subCategorie
            Route::group(['prefix' => '{id_categorie}/subCategorie'], function () {
                Route::get('/create', [SubCategorieController::class, 'create']);
                Route::get('/', [SubCategorieController::class, 'show']);
                Route::get('/edit/{id_subCategorie}', [SubCategorieController::class, 'edit']);
                Route::put('/{id_subCategorie}', [SubCategorieController::class, 'update']);
                Route::post('/', [SubCategorieController::class, 'store']);
                Route::delete('/{id_subCategorie}', [SubCategorieController::class, 'destroy']);
                Route::get('/trashed', [SubCategorieController::class, 'trashed']);
                Route::get('/restore/{id}', [SubCategorieController::class, 'restore']);

                // formation
                Route::group(['prefix' => '{id_subCategorie}/formation'], function () {
                    Route::get('/create', [FormationController::class, 'create']);
                    Route::get('/', [FormationController::class, 'show']);
                    Route::get('/edit/{id_formation}', [FormationController::class, 'edit']);
                    Route::put('/{id_formation}', [FormationController::class, 'update']);
                    Route::post('/', [FormationController::class, 'store']);
                    Route::delete('/{id_formation}', [FormationController::class, 'destroy']);
                    Route::get('/trashed', [FormationController::class, 'trashed']);
                    Route::get('/restore/{id_formation}', [FormationController::class, 'restore']);
                    // tarification
                    Route::group(['prefix' => '{id_formation}/tarif'], function () {
                        Route::get('/create', [TarifFormationController::class, 'create']);
                        Route::get('/', [TarifFormationController::class, 'show']);
                        Route::get('/edit/{id_tarif}', [TarifFormationController::class, 'edit']);
                        Route::put('/{id_tarif}', [TarifFormationController::class, 'update']);
                        Route::post('/', [TarifFormationController::class, 'store']);
                        Route::delete('/{id_tarif}', [TarifFormationController::class, 'destroy']);
                        Route::get('/trashed', [TarifFormationController::class, 'trashed']);
                        Route::get('/restore/{id_tarif}', [TarifFormationController::class, 'restore']);
                    });
                    // programme
                    Route::group(['prefix' => '{id_formation}/programme'], function () {
                        Route::get('/create', [ProgFormationController::class, 'create']);
                        Route::get('/', [ProgFormationController::class, 'show']);
                        Route::get('/edit/{id_programme}', [ProgFormationController::class, 'edit']);
                        Route::put('/{id_programme}', [ProgFormationController::class, 'update']);
                        Route::post('/', [ProgFormationController::class, 'store']);
                        Route::delete('/{id_programme}', [ProgFormationController::class, 'destroy']);
                        Route::get('/trashed', [ProgFormationController::class, 'trashed']);
                        Route::get('/restore/{id_programme}', [ProgFormationController::class, 'restore']);
                    });
                });
            });
        });
    });
});
Route::fallback(function () {
    return view("error");
});
