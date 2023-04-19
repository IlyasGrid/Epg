<?php

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

Route::get('/', function () {
    return view('index');
});
Route::get('/Bourse.php', function () {
    return view('Bourse');
});
Route::get('/contact.php', function () {
    return view('contact');
});
Route::get('/cours-soutien-informatique.php', function () {
    return view('cours-soutien-informatique');
});
Route::get('/A-propos.php', function () {
    return view('A-propos');
});
Route::get('//Documentations/Minha.pdf', function () {
    $filePath = public_path('assets/Minha.pdf');

    $file = new \SplFileInfo($filePath);

    return response()->file($file->getRealPath(), [
        'Content-Type' => 'application/pdf',
        'Content-Disposition' => 'attachment; filename="Minha.pdf"'
    ]);
});




Route::get('/', function () {
    return view('index');
});
Route::prefix('Diplomes')->group(function () {
    Route::get('/', function () {
        return view('Diplomes.index');
    });
    Route::get('/{diplome}', function ($diplome) {
        return 'hi to ' . $diplome;
    });
});
