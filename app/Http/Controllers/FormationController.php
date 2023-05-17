<?php

namespace App\Http\Controllers;

use App\Models\Formation;
use App\Models\Formation_Programme;
use App\Models\Formation_Tarification;
use App\Models\FormationCategorie;
use App\Models\FormationSubCategorie;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class FormationController extends Controller
{

    function show($id_categorie, $id_subCategorie)
    {
        $categorie = FormationCategorie::findOrFail($id_categorie);
        $subCategorie = FormationSubCategorie::findOrFail($id_subCategorie);
        $subCategorie->formations = Formation::where('formation_sub_categories_id', '=', $id_subCategorie)->get();
        return view("admin.categorie.formation.show", compact('categorie', 'subCategorie'));
    }


    public function create($id_categorie, $id_subCategorie)
    {
        $categorie = FormationCategorie::findOrFail($id_categorie);

        $subCategorie = FormationSubCategorie::findOrFail($id_subCategorie);

        return view('admin.categorie.formation.create', ['categorie' => $categorie, 'subCategorie' => $subCategorie]);
    }


    public function store(Request $request, $id_categorie, $id_subCategorie)
    {

        $formFields = $request;
        $formFields = $request->validate([
            'Name' => 'required',
            'MotivaionName' => 'nullable',
            'MotivaionBody' => 'required',
            'objectifs' => 'nullable',
            'tp' => 'nullable'
        ]);

        if (empty($formFields['MotivaionName'])) {
            $formFields['MotivaionName'] = 'synthese';
        }
        Formation::create(array_merge($formFields, ['formation_sub_categories_id' => $id_subCategorie]));

        return redirect()->action([FormationController::class, 'show'],  ['id_categorie' => $id_categorie, 'id_subCategorie' => $id_subCategorie]);
    }

    public function edit($id_categorie, $id_subCategorie, $id_formation)
    {
        $categorie = FormationCategorie::where('id', '=', $id_categorie)->get();
        $categorie = $categorie[0];

        $subCategorie = FormationSubCategorie::where('id', '=', $id_subCategorie)->get();
        $subCategorie = $subCategorie[0];

        $subCategorie->formation  = Formation::where('id', '=', $id_formation)
            ->where('formation_sub_categories_id', '=', $id_subCategorie)
            ->get();

        if ($subCategorie->formation->isEmpty()) {
            return redirect()->action([FormationController::class, 'show'],  ['id_categorie' => $id_categorie, 'id_subCategorie' => $id_subCategorie]);
        }
        $subCategorie->formation = $subCategorie->formation[0];
        return view('admin.categorie.formation.edit', compact('categorie', 'subCategorie'));
    }


    public function update(Request $request, $id_categorie, $id_subCategorie, $id_formation)
    {

        $formation = Formation::where('formation_sub_categories_id', '=', $id_subCategorie)
            ->where('id', '=', $id_formation)
            ->get();


        if ($formation->isEmpty()) {
            return redirect()->action([FormationController::class, 'show'],  ['id_categorie' => $id_categorie, 'id_subCategorie' => $id_subCategorie]);
        }
        $formation = $formation[0];

        $formFields = $request;

        if ($formation) {
            $formFields = $request->validate([
                'Name' => 'required',
                'MotivaionName' => 'nullable',
                'MotivaionBody' => 'required',
                'objectifs' => 'nullable',
                'tp' => 'nullable'
            ]);
            if (empty($formFields['MotivaionName'])) {
                $formFields['MotivaionName'] = 'synthese';
            }
            $formation->update($formFields);
        }


        return redirect()->action([FormationController::class, 'show'],  ['id_categorie' => $id_categorie, 'id_subCategorie' => $id_subCategorie]);
    }


    public function destroy($id_subCategorie, $id_categorie, $id_formation)
    {

        $formation = Formation::find($id_formation);
        $formation->delete();
        return redirect()->action([FormationController::class, 'show'], ['id_categorie' => $id_categorie, 'id_subCategorie' => $id_subCategorie]);
    }


    public function trashed($id_categorie, $id_subCategorie)
    {

        $categorie = FormationCategorie::where('id', '=', $id_categorie)->get();
        $categorie = $categorie[0];

        $subCategorie = FormationSubCategorie::findOrFail($id_subCategorie);

        $subCategorie->formations = Formation::onlyTrashed()->where('formation_sub_categories_id', '=', $id_subCategorie)->get();

        return view("admin.categorie.formation.trashed", compact('subCategorie','categorie'));
    }

    public function restore($id_categorie, $id_subCategorie, $id)
    {

        $formation = Formation::withTrashed()->find($id);
        $formation->restore();

        return redirect()->action([FormationController::class, 'trashed'],  ['id_categorie' => $id_categorie, 'id_subCategorie' => $id_subCategorie]);
    }
}
