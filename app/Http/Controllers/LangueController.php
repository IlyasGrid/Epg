<?php

namespace App\Http\Controllers;

use App\Models\Langue;
use App\Models\Niveau_Langue;
use App\Models\Tarification_Langue;
use Illuminate\Database\Eloquent\Casts\Json;
use Illuminate\Http\Request;

class LangueController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view("Languages.index");
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show($langueName)
    {

        $langue = Langue::where('Name', '=', $langueName)->get();
        if ($langue->count() > 0) {



            // Tarif
            $tarif = Tarification_Langue::where('langue_id', '=', $langue[0]->id)->get();

            $cour_normal = $tarif[0];
            $cour_soir = $tarif[1];
            $cour_rapide = $tarif[2];
            $cour_accelere = $tarif[3];
            $courses = [$cour_normal, $cour_soir, $cour_rapide, $cour_accelere];

            //  Niveau
            $niveaux = null;
            if ($langue[0]->Name == 'allemand') {
                $niveaux = Niveau_Langue::all();
            }

            $langue = $langue[0];


            return view('Languages.show', compact('langue', 'courses', 'niveaux'));
        } else {
            return view('error',);
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Langue $langue)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Langue $langue)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Langue $langue)
    {
        //
    }
}
