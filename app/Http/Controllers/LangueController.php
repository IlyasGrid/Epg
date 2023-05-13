<?php

namespace App\Http\Controllers;

use App\Models\Langue;
use App\Models\Niveau_Langue;
use App\Models\Tarification_Langue;
use Illuminate\Database\Eloquent\Casts\Json;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Lang;
use Illuminate\Validation\Rule;

class LangueController extends Controller
{
    // site visitor 


    public function index()
    {
        $langues = Langue::all();
        return view("Languages.index", compact('langues'));
    }


    public function show($langueName)
    {

        $langue = Langue::where('Name', '=', $langueName)->get();
        if ($langue->count() > 0) {

            // Tarif
            $tarif = Tarification_Langue::where('langue_id', '=', $langue[0]->id)->get();
            if ($tarif->count() == 0) {
                $langue = $langue[0];
                $courses = null;
                $niveaux = null;
                return view('Languages.show', compact('langue', 'courses', 'niveaux'));
            }

            $courses = $tarif;


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





    // -------------------------------------admin-------------------------------------

    public function adminHome()
    {
        return view('admin.test');
    }

    public function adminShow()
    {
        $langues = Langue::all();
        return view("admin.langue.show", compact('langues'));
    }


    public function create()
    {
        return view('admin.langue.create');
    }


    public function store(Request $request)
    {
        $formFields = $request;
        $formFields = $request->validate([
            'Name' => ['required', Rule::unique('langues', 'Name')],
            'Subtitle' => 'required',
            'Motivation' => 'required',
        ]);
        Langue::create($formFields);

        return redirect()->action([LangueController::class, 'adminHome']);
    }


    public function edit($id)
    {
        $langue = Langue::where('id', '=', $id)->get();
        $langue = $langue[0];
        $message = null;

        return view('admin.langue.edit', ['langue' => $langue, 'message' => $message]);
    }



    public function update(Request $request, Langue $langue)
    {
        $langue = Langue::find($request->id);
        $formFields = $request;
        $formFields = $request->validate([
            'Name' => 'required',
            'Subtitle' => 'required',
            'Motivation' => 'required',
            'Raisons' => 'nullable',
            'Piece_frais' => 'nullable',
            'Conditions_Etudes' => 'nullable',
            'Conditions_Formations' => 'nullable',
            'Conditions_Cherche_Emploi' => 'nullable'
        ]);
        // dd($formFields);
        // $langue->save();
        $langue->update($formFields);

        return redirect()->action([LangueController::class, 'adminShow']);
    }

    public function destroy($id)
    {
        $language = Langue::find($id);
        $language->delete();
        return redirect()->action([LangueController::class, 'adminHome']);
    }

    //------------------------------- Tarification---------------------------------------------


    public function editTarification($id_langue, $id_tarif)
    {
        $langue = Langue::where('id', '=', $id_langue)->get();
        $langue = $langue[0];

        $tarif = Tarification_Langue::where('id', '=', $id_tarif)
            ->where('langue_id', '=', $id_langue)
            ->get();

        if ($tarif->isEmpty()) {
            return redirect()->action([LangueController::class, 'showTarification'], ['id_langue' => $id_langue]);
        }

        $tarif = $tarif[0];
        return view('admin.langue.tarification.edit', compact('langue', 'tarif'));
    }


    public function updateTarification(Request $request, $id_langue, $id_tarif)
    {
        // dd($request);
        $tarif = Tarification_Langue::where('langue_id', '=', $id_langue)
            ->where('id', '=', $id_tarif)
            ->get();


        if ($tarif->isEmpty()) {
            return redirect()->action([LangueController::class, 'showTarification'], ['id_langue' => $id_langue]);
        }
        $tarif = $tarif[0];

        $formFields = $request;

        if ($tarif) {
            $formFields = $request->validate([
                'Type' => 'required',
                'Volume_Horraire' => 'required',
                'Temps' => 'required',
                'Price' => 'required',
            ]);

            // dd($tarif);

            $tarif->update($formFields);
        }


        return redirect()->action([LangueController::class, 'showTarification'], ['id_langue' => $id_langue]);
    }


    public function showTarification($id_langue)
    {
        // $langue = Langue::where('id', '=', $id_langue);
        // $langue = Langue::all()->get($id_langue - 1);
        $langue = Langue::findOrFail($id_langue);
        $tarifs = Tarification_Langue::where('langue_id', '=', $id_langue)->get();
        return view("admin.langue.tarification.show", compact('langue', 'tarifs'));
    }

    public function createTarification($id_langue)
    {
        return view('admin.langue.tarification.create', ['id_langue' => $id_langue]);
    }

    public function storeTarification(Request $request, $id_langue)
    {

        $formFields = $request;
        $formFields = $request->validate([
            'Type' => 'required',
            'Volume_Horraire' => 'required',
            'Temps' => 'required',
            'Price' => 'required'
        ]);

        Tarification_Langue::create(array_merge($formFields, ['langue_id' => $id_langue]));

        return redirect()->action([LangueController::class, 'showTarification'], ['id_langue' => $id_langue]);
    }
    public function destroyTarification($id_langue, $id_tarif)
    {
        $tarif = Tarification_Langue::find($id_tarif);
        $tarif->delete();
        return redirect()->action([LangueController::class, 'showTarification'], ['id_langue' => $id_langue]);
    }


    //------------------------------- Niveau---------------------------------------------

    public function showNiveau($id_langue)
    {
        // $langue = Langue::where('id', '=', $id_langue);
        // $langue = Langue::all()->get($id_langue);
        $langue = Langue::findOrFail($id_langue);
        $niveaux = Niveau_Langue::where('langue_id', '=', $id_langue)->get();
        return view("admin.langue.niveau.show", compact('langue', 'niveaux'));
    }

    public function editNiveau($id_langue, $id_niveau)
    {
        $langue = Langue::where('id', '=', $id_langue)->get();
        $langue = $langue[0];

        $niveau = Niveau_Langue::where('id', '=', $id_niveau)
            ->where('langue_id', '=', $id_langue)
            ->get();
        if ($niveau->isEmpty()) {
            return redirect()->action([LangueController::class, 'showNiveau'], ['id_langue' => $id_langue]);
        }

        $niveau = $niveau[0];
        return view('admin.langue.niveau.edit', compact('langue', 'niveau'));
    }


    public function updateNiveau(Request $request, $id_langue, $id_niveau)
    {
        $niveau = Niveau_Langue::where('langue_id', '=', $id_langue)
            ->where('id', '=', $id_niveau)
            ->get();


        if ($niveau->isEmpty()) {
            return redirect()->action([LangueController::class, 'showNiveau'], ['id_langue' => $id_langue]);
        }

        $niveau = $niveau[0];

        $formFields = $request;

        if ($niveau) {
            $formFields = $request->validate([
                'Niveau' => 'required',
                'Duree_Cours_Normal' => 'required',
                'Duree_Cours_Soir' => 'required',
                'Duree_Cours_Accelerer' => 'required',
                'Duree_Cours_Rapide' => 'required',
            ]);

            // dd($niveau);

            $niveau->update($formFields);
        }


        return redirect()->action([LangueController::class, 'showNiveau'], ['id_langue' => $id_langue]);
    }



    public function createNiveau($id_langue)
    {
        return view('admin.langue.niveau.create', ['id_langue' => $id_langue]);
    }

    public function storeNiveau(Request $request, $id_langue)
    {

        $formFields = $request;
        $formFields = $request->validate([
            'Niveau' => 'required',
            'Duree_Cours_Normal' => 'required',
            'Duree_Cours_Soir' => 'required',
            'Duree_Cours_Accelerer' => 'required',
            'Duree_Cours_Rapide' => 'required'
        ]);

        Niveau_Langue::create(array_merge($formFields, ['langue_id' => $id_langue]));

        return redirect()->action([LangueController::class, 'showNiveau'], ['id_langue' => $id_langue]);
    }
    public function destroyNiveau($id_langue, $id_niveau)
    {
        $niveau = Niveau_Langue::find($id_niveau);
        $niveau->delete();
        return redirect()->action([LangueController::class, 'showNiveau'], ['id_langue' => $id_langue]);
    }
}
