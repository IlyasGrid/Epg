<?php

namespace App\Http\Controllers;

use App\Models\FormationCategorie;
use App\Models\FormationSubCategorie;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class SubCategorieController extends Controller
{

    public function create($id_categorie)
    {
        $categorie = FormationCategorie::findOrFail($id_categorie);
        return view('admin.categorie.subCategorie.create', ['categorie' => $categorie]);
    }


    public function store(Request $request,$id_categorie)
    {
        
        $formFields = $request;
        $formFields = $request->validate([
            'Name' => ['required', Rule::unique('formation_sub_categories', 'Name')]
        ]);

        FormationSubCategorie::create(array_merge($formFields, ['formation_categories_id' => $id_categorie]));

        return redirect()->action([SubCategorieController::class, 'show'], ['id_categorie' => $id_categorie]);
    }

    function show( $id_categorie)
    {
        $categorie = FormationCategorie::findOrFail($id_categorie);
        $categorie->subCategories = FormationSubCategorie::where('formation_categories_id', '=', $id_categorie)->get();
        return view("admin.categorie.subCategorie.show", compact('categorie'));
    }


    public function edit( $id_categorie, $id_subCategorie)
    {
        $categorie = FormationCategorie::where('id', '=', $id_categorie)->get();
        $categorie = $categorie[0];

        $subCategorie = FormationSubCategorie::where('id', '=', $id_subCategorie)
            ->where('formation_categories_id', '=', $id_categorie)
            ->get();

        if ($subCategorie->isEmpty()) {
            return redirect()->action([SubCategorieController::class, 'show'], ['id_categorie' => $id_categorie]);
        }

        $subCategorie = $subCategorie[0];

        $categorie->subCategorie = $subCategorie;

        return view('admin.categorie.subCategorie.edit', compact('categorie'));
    }

    public function update(Request $request,$id_categorie,$id_subCategorie) 
    {
        
        $subCategorie = FormationSubCategorie::where('formation_categories_id', '=', $id_categorie)
            ->where('id', '=', $id_subCategorie)
            ->get();


        if ($subCategorie->isEmpty()) {
            return redirect()->action([SubCategorieController::class, 'show'], ['id_categorie' => $id_categorie]);
        }
        $subCategorie = $subCategorie[0];

        $formFields = $request;

        if ($subCategorie) {
            $formFields = $request->validate([
                'Name' => ['required', Rule::unique('formation_sub_categories', 'Name')]
            ]);

            $subCategorie->update($formFields);
        }


        return redirect()->action([SubCategorieController::class, 'show'], ['id_categorie' => $id_categorie]);
    }


    public function destroy( $id_categorie, $id_subCategorie)
    {
        $subCategory = FormationSubCategorie::find($id_subCategorie);
        $subCategory->delete();
        return redirect()->action([SubCategorieController::class, 'show'], ['id_categorie' => $id_categorie]);
    }

    public function trashed($id_categorie)
    {
        $categorie = FormationCategorie::findOrFail($id_categorie);

        $categorie->subCategories = FormationSubCategorie::onlyTrashed()->where('formation_categories_id', '=', $id_categorie)->get();

        return view("admin.categorie.subCategorie.trashed", compact('categorie'));
    }

    public function restore($id_categorie, $id)
    {

        $subCategory = FormationSubCategorie::withTrashed()->find($id);
        $subCategory->restore();


        return redirect()->action([SubCategorieController::class, 'trashed'], ['id_categorie' => $id_categorie]);
    }
}
