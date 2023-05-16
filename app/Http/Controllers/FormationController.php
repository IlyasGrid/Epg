<?php

namespace App\Http\Controllers;

use App\Models\Formation;
use App\Models\Formation_Programme;
use App\Models\Formation_Tarification;
use App\Models\FormationCategorie;
use App\Models\FormationSubCategorie;
use App\Models\Langue;
use App\Models\Tarification_Langue;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class FormationController extends Controller
{


    public function index()
    {

        $categories = FormationCategorie::all();

        foreach ($categories as $category) {
            $subCategories = FormationSubCategorie::where('formation_categories_id', $category->id)->get();


            foreach ($subCategories as $subCategory) {
                $formations = Formation::where('formation_sub_categories_id', $subCategory->id)->get();

                $subCategory->formations = $formations;
            }

            $category->subCategories = $subCategories;
        }

        return view('Formations.test', ['categories' => $categories]);
    }


    public function show($category, $sub_category, $formation)
    {
        $formation = Formation::where('Name', $formation)->firstOrFail();

        $formation->programmes = Formation_Programme::where('formations_id', $formation->id)->get();
        $formation->tarifs = Formation_Tarification::where('formations_id', $formation->id)->get();

        return view("Formations.show", compact('formation'));
    }


    // -------------admin


    public function adminShow()
    {
        $categories = FormationCategorie::all();

        foreach ($categories as $category) {
            $category->subCategories = FormationSubCategorie::where('formation_categories_id', $category->id)->get();
        }

        return view("admin.formation.show", compact('categories'));
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
            'Raisons' => 'nullable',
            'Piece_frais' => 'nullable',
            'Conditions_Etudes' => 'nullable',
            'Conditions_Formations' => 'nullable',
            'Conditions_Cherche_Emploi' => 'nullable',
        ]);
        Langue::create($formFields);

        return redirect()->action([LangueController::class, 'adminShow']);
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
        $langue->update($formFields);

        return redirect()->action([LangueController::class, 'adminShow']);
    }

    public function destroy($id)
    {
        $language = Langue::find($id);
        $language->delete();
        return redirect()->action([LangueController::class, 'adminShow']);
    }

    public function trashed()
    {
        $langues = Langue::onlyTrashed()->get();
        return view("admin.langue.trashed", compact('langues'));
    }

    public function restore($id)
    {
        $langue = Langue::withTrashed()->find($id);
        $langue->restore();

        return redirect()->action([LangueController::class, 'trashed']);
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

    public function trashedTarification($id_langue)
    {
        $langue = Langue::findOrFail($id_langue);

        $tarifs = Tarification_Langue::onlyTrashed()->where('langue_id', '=', $id_langue)->get();

        return view("admin.langue.tarification.trashed", compact('langue', 'tarifs'));
    }

    public function restoreTarification($id_langue, $id)
    {

        $tarif = Tarification_Langue::withTrashed()->find($id);
        $tarif->restore();



        return redirect()->action([LangueController::class, 'trashedTarification'], ['id_langue' => $id_langue]);
    }
}
