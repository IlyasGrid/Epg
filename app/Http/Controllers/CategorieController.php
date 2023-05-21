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

class CategorieController extends Controller
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


    public function show($category, $sub_category = null, $formation = null)
    {
        if (!$formation && !$sub_category) {

            $category = FormationCategorie::where('Name', $category)->firstOrFail();

            // dd($category);


            $subCategories = FormationSubCategorie::where('formation_categories_id', $category->id)->get();

            foreach ($subCategories as $subCategory) {
                $formations = Formation::where('formation_sub_categories_id', $subCategory->id)->get();

                $subCategory->formations = $formations;
            }

            $category->subCategories = $subCategories;


            return view('Formations.onecategorieshow', ['category' => $category]);

        } else {
            $formation = Formation::where('Name', $formation)->firstOrFail();

            $formation->programmes = Formation_Programme::where('formations_id', $formation->id)->get();
            $formation->tarifs = Formation_Tarification::where('formations_id', $formation->id)->get();

            return view("Formations.show", compact('formation'));
        }
    }


    // -------------admin


    public function adminShow()
    {
        $categories = FormationCategorie::all();

        foreach ($categories as $category) {
            $category->subCategories = FormationSubCategorie::where('formation_categories_id', $category->id)->get();
        }

        return view("admin.categorie.show", compact('categories'));
    }


    public function create()
    {
        return view('admin.categorie.create');
    }


    public function store(Request $request)
    {
        $formFields = $request;
        $formFields = $request->validate([
            'Name' => ['required', Rule::unique('formation_categories', 'Name')],
        ]);
        FormationCategorie::create($formFields);

        return redirect()->action([CategorieController::class, 'adminShow']);
    }


    public function edit($id)
    {
        $categorie = FormationCategorie::where('id', '=', $id)->get();
        $categorie = $categorie[0];

        return view('admin.categorie.edit', ['categorie' => $categorie]);
    }



    public function update(Request $request)
    {
        $categorie = FormationCategorie::find($request->id);
        $formFields = $request;
        $formFields = $request->validate([
            'Name' => ['required', Rule::unique('formation_categories', 'Name')]
        ]);
        $categorie->update($formFields);

        return redirect()->action([CategorieController::class, 'adminShow']);
    }

    public function destroy($id)
    {
        $categorie = FormationCategorie::find($id);
        $categorie->delete();
        return redirect()->action([CategorieController::class, 'adminShow']);
    }

    public function trashed()
    {
        $categories = FormationCategorie::onlyTrashed()->get();
        return view("admin.categorie.trashed", compact('categories'));
    }

    public function restore($id)
    {
        $categorie = FormationCategorie::withTrashed()->find($id);
        $categorie->restore();

        return redirect()->action([CategorieController::class, 'trashed']);
    }
}
