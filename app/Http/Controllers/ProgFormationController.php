<?php

namespace App\Http\Controllers;

use App\Models\Formation;
use App\Models\Formation_Programme;
use App\Models\FormationCategorie;
use App\Models\FormationSubCategorie;
use Illuminate\Http\Request;

class ProgFormationController extends Controller
{
    function show($id_categorie, $id_subCategorie, $id_formation)
    {
        $categorie = FormationCategorie::findOrFail($id_categorie);
        $subCategorie = FormationSubCategorie::findOrFail($id_subCategorie);
        $formation = Formation::findOrFail($id_formation);

        $formation->programs = Formation_Programme::where('formations_id', '=', $id_formation)->get();
        return view("admin.categorie.formation.programme.show", compact('categorie', 'subCategorie', 'formation'));
    }


    public function create($id_categorie, $id_subCategorie, $id_formation)
    {
        $categorie = FormationCategorie::findOrFail($id_categorie);

        $subCategorie = FormationSubCategorie::findOrFail($id_subCategorie);

        $formation = Formation::findOrFail($id_formation);


        return view('admin.categorie.formation.programme.create', ['categorie' => $categorie, 'subCategorie' => $subCategorie, 'formation' => $formation]);
    }


    public function store(Request $request, $id_categorie, $id_subCategorie, $id_formation)
    {

        $formFields = $request;
        $formFields = $request->validate([
            'ModuleName' => 'required',
            'ModuleChapitre' => 'required',
        ]);

        $nonEmptyChapitres = array_filter($formFields['ModuleChapitre']);
        $implodedChapitres = implode(';', $nonEmptyChapitres);

        $formFields['ModuleChapitre'] = $implodedChapitres;

        Formation_Programme::create(array_merge($formFields, ['formations_id' => $id_formation]));

        return redirect()->action([ProgFormationController::class, 'show'],  ['id_categorie' => $id_categorie, 'id_subCategorie' => $id_subCategorie, 'id_formation' => $id_formation]);
    }

    public function edit($id_categorie, $id_subCategorie, $id_formation, $id_program)
    {

        $categorie = FormationCategorie::findOrFail($id_categorie)->get();
        $categorie = $categorie[0];

        $subCategorie = FormationSubCategorie::findOrFail($id_subCategorie)->get();
        $subCategorie = $subCategorie[0];

        $formation  = Formation::findOrFail($id_formation)->get();
        $formation = $formation[0];


        $formation->program  = Formation_Programme::where('id', '=', $id_formation)
            ->where('formations_id', '=', $id_formation)
            ->get();

        if ($formation->program->isEmpty()) {
            return redirect()->action([ProgFormationController::class, 'show'],  ['id_categorie' => $id_categorie, 'id_subCategorie' => $id_subCategorie]);
        }
        $formation->program = $formation->program[0];
        return view('admin.categorie.formation.programme.edit', compact('categorie', 'subCategorie', 'formation'));
    }


    public function update(Request $request, $id_categorie, $id_subCategorie, $id_formation, $id_program)
    {

        $program = Formation_Programme::where('formations_id', '=', $id_formation)
            ->where('id', '=', $id_program)
            ->get();


        if ($program->isEmpty()) {
            return redirect()->action([ProgFormationController::class, 'show'],  ['id_categorie' => $id_categorie, 'id_subCategorie' => $id_subCategorie, 'id_formation' => $id_formation]);
        }
        $program = $program[0];

        $formFields = $request;

        if ($program) {
            $formFields = $request->validate([
                'ModuleName' => 'required',
                'ModuleChapitre' => 'required'
            ]);
            $nonEmptyChapitres = array_filter($formFields['ModuleChapitre']);
            $implodedChapitres = implode(';', $nonEmptyChapitres);

            $formFields['ModuleChapitre'] = $implodedChapitres;

            $program->update($formFields);
        }


        return redirect()->action([ProgFormationController::class, 'show'],  ['id_categorie' => $id_categorie, 'id_subCategorie' => $id_subCategorie, 'id_formation' => $id_formation]);
    }


    public function destroy($id_subCategorie, $id_categorie, $id_formation, $id_program)
    {

        $program = Formation_Programme::find($id_program);
        $program->delete();
        return redirect()->action([ProgFormationController::class, 'show'], ['id_categorie' => $id_categorie, 'id_subCategorie' => $id_subCategorie, 'id_formation' => $id_formation]);
    }


    public function trashed($id_categorie, $id_subCategorie, $id_formation)
    {

        $categorie = FormationCategorie::where('id', '=', $id_categorie)->get();
        $categorie = $categorie[0];

        $subCategorie = FormationSubCategorie::findOrFail($id_subCategorie);

        $formation = Formation::findOrFail($id_formation);


        $formation->programs = Formation_Programme::onlyTrashed()->where('formations_id', '=', $id_formation)->get();

        return view("admin.categorie.formation.programme.trashed", compact('subCategorie', 'categorie', 'formation'));
    }

    public function restore($id_categorie, $id_subCategorie, $id_formation, $id)
    {

        $program = Formation_Programme::withTrashed()->find($id);
        $program->restore();

        return redirect()->action([ProgFormationController::class, 'trashed'],  ['id_categorie' => $id_categorie, 'id_subCategorie' => $id_subCategorie, 'id_formation' => $id_formation]);
    }
}
