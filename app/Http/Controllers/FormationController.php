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
        return view('admin.formation.create');
    }


    public function store(Request $request)
    {
        $formFields = $request;
        $formFields = $request->validate([
            'Name' => ['required', Rule::unique('langues', 'Name')],
        ]);
        FormationCategorie::create($formFields);

        return redirect()->action([FormationController::class, 'adminShow']);
    }


    public function edit($id)
    {
        $categorie = FormationCategorie::where('id', '=', $id)->get();
        $categorie = $categorie[0];

        return view('admin.formation.edit', ['categorie' => $categorie]);
    }



    public function update(Request $request)
    {
        $categorie = FormationCategorie::find($request->id);
        $formFields = $request;
        $formFields = $request->validate([
            'Name' => ['required', Rule::unique('langues', 'Name')]
        ]);
        $categorie->update($formFields);

        return redirect()->action([FormationController::class, 'adminShow']);
    }

    public function destroy($id)
    {
        $categorie = FormationCategorie::find($id);
        $categorie->delete();
        return redirect()->action([FormationController::class, 'adminShow']);
    }

    public function trashed()
    {
        $categories = FormationCategorie::onlyTrashed()->get();
        return view("admin.formation.trashed", compact('categories'));
    }

    public function restore($id)
    {
        $categorie = FormationCategorie::withTrashed()->find($id);
        $categorie->restore();

        return redirect()->action([FormationController::class, 'trashed']);
    }

    //------------------------------- SubCategorie---------------------------------------------

    public function showSubCategorie($id_categorie)
    {
        $categorie = FormationCategorie::findOrFail($id_categorie);
        $categorie->subCategories = FormationSubCategorie::where('formation_categories_id', '=', $id_categorie)->get();
        return view("admin.formation.subCategorie.show", compact('categorie'));
    }

    public function editSubCategorie($id_langue, $id_tarif)
    {
        $langue = Langue::where('id', '=', $id_langue)->get();
        $langue = $langue[0];

        $tarif = FormationSubCategorie::where('id', '=', $id_tarif)
            ->where('langue_id', '=', $id_langue)
            ->get();

        if ($tarif->isEmpty()) {
            return redirect()->action([LangueController::class, 'showSubCategorie'], ['id_langue' => $id_langue]);
        }

        $tarif = $tarif[0];
        return view('admin.langue.SubCategorie.edit', compact('langue', 'tarif'));
    }

    public function createSubCategorie($id_categorie)
    {
        return view('admin.formation.SubCategorie.create', ['id_langue' => $id_categorie]);
    }

    public function updateSubCategorie(Request $request, $id_langue, $id_tarif)
    {
        // dd($request);
        $tarif = FormationSubCategorie::where('langue_id', '=', $id_langue)
            ->where('id', '=', $id_tarif)
            ->get();


        if ($tarif->isEmpty()) {
            return redirect()->action([LangueController::class, 'showSubCategorie'], ['id_langue' => $id_langue]);
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


        return redirect()->action([LangueController::class, 'showSubCategorie'], ['id_langue' => $id_langue]);
    }


    public function storeSubCategorie(Request $request, $id_langue)
    {

        $formFields = $request;
        $formFields = $request->validate([
            'Type' => 'required',
            'Volume_Horraire' => 'required',
            'Temps' => 'required',
            'Price' => 'required'
        ]);

        FormationSubCategorie::create(array_merge($formFields, ['langue_id' => $id_langue]));

        return redirect()->action([LangueController::class, 'showSubCategorie'], ['id_langue' => $id_langue]);
    }

    public function destroySubCategorie($id_categorie, $id_subCategorie)
    {
        $subCategory = FormationSubCategorie::find($id_subCategorie);
        $subCategory->delete();
        return redirect()->action([FormationController::class, 'showSubCategorie'], ['id_categorie' => $id_categorie]);
    }

    public function trashedSubCategorie($id_categorie)
    {
        $categorie = FormationCategorie::findOrFail($id_categorie);

        $categorie->subCategories = FormationSubCategorie::onlyTrashed()->where('formation_categories_id', '=', $id_categorie)->get();

        return view("admin.formation.SubCategorie.trashed", compact('categorie'));
    }

    public function restoreSubCategorie($id_categorie, $id)
    {

        $subCategory = FormationSubCategorie::withTrashed()->find($id);
        $subCategory->restore();


        return redirect()->action([FormationController::class, 'trashedSubCategorie'], ['id_categorie' => $id_categorie]);
    }
}
