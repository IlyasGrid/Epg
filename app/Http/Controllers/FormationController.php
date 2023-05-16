<?php

namespace App\Http\Controllers;

use App\Models\Langue;
use App\Models\Tarification_Langue;
use Illuminate\Http\Request;

class FormationController extends Controller
{

    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $langues = Langue::all();

        foreach ($langues as $langue) {
            $langue->tarifs = Tarification_Langue::where('langue_id', $langue->id)->get();
        }

        // dd($langues);
        return view('Formations.test', ['langues' => $langues]);

        // return view("Formations.index");
    }

    /**
     * Display a single resource.
     */
    public function show()
    {
        return view("Formations.show");
    }
}
