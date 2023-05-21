<?php
namespace App\Http\Controllers;

use App\Models\Formation;
use App\Models\Formation_Programme;
use App\Models\FormationCategorie;
use App\Models\FormationSubCategorie;
use Illuminate\Http\Request;

class ProgFormationController extends Controller
{
    public function show($id_categorie, $id_subCategorie, $id_formation)
    {
        $categorie = FormationCategorie::findOrFail($id_categorie);
        $subCategorie = FormationSubCategorie::findOrFail($id_subCategorie);
        $formation = Formation::findOrFail($id_formation);

        $formation->programs = Formation_Programme::where('formations_id', $id_formation)->get();
        
        return view("admin.categorie.formation.programme.show", compact('categorie', 'subCategorie', 'formation'));
    }

    public function create($id_categorie, $id_subCategorie, $id_formation)
    {
        $categorie = FormationCategorie::findOrFail($id_categorie);
        $subCategorie = FormationSubCategorie::findOrFail($id_subCategorie);
        $formation = Formation::findOrFail($id_formation);

        return view('admin.categorie.formation.programme.create', compact('categorie', 'subCategorie', 'formation'));
    }

    public function store(Request $request, $id_categorie, $id_subCategorie, $id_formation)
    {
        $validatedData = $request->validate([
            'ModuleName' => 'required',
            'ModuleChapitre' => 'required',
        ]);

        $nonEmptyChapitres = array_filter($validatedData['ModuleChapitre']);
        $implodedChapitres = implode(';', $nonEmptyChapitres);

        $validatedData['ModuleChapitre'] = $implodedChapitres;

        Formation_Programme::create(array_merge($validatedData, ['formations_id' => $id_formation]));

        return redirect()->action([ProgFormationController::class, 'show'], [
            'id_categorie' => $id_categorie,
            'id_subCategorie' => $id_subCategorie,
            'id_formation' => $id_formation
        ]);
    }

    public function edit($id_categorie, $id_subCategorie, $id_formation, $id_program)
    {
        $categorie = FormationCategorie::findOrFail($id_categorie);
        $subCategorie = FormationSubCategorie::findOrFail($id_subCategorie);
        $formation = Formation::findOrFail($id_formation);

        $formation->program = Formation_Programme::where('id', $id_program)
            ->where('formations_id', $id_formation)
            ->first();

        if (!$formation->program) {
            return redirect()->action([ProgFormationController::class, 'show'], [
                'id_categorie' => $id_categorie,
                'id_subCategorie' => $id_subCategorie
            ]);
        }

        return view('admin.categorie.formation.programme.edit', compact('categorie', 'subCategorie', 'formation'));
    }

    public function update(Request $request, $id_categorie, $id_subCategorie, $id_formation, $id_program)
    {
        $program = Formation_Programme::where('formations_id', $id_formation)
            ->where('id', $id_program)
            ->first();

        if (!$program) {
            return redirect()->action([ProgFormationController::class, 'show'], [
                'id_categorie' => $id_categorie,
                'id_subCategorie' => $id_subCategorie,
                'id_formation' => $id_formation
            ]);
        }

        $validatedData = $request->validate([
            'ModuleName' => 'required',
            'ModuleChapitre' => 'required'
        ]);

        $nonEmptyChapitres = array_filter($validatedData['ModuleChapitre']);
        $implodedChapitres = implode(';', $nonEmptyChapitres);

        $validatedData['ModuleChapitre'] = $implodedChapitres;

        $program->update($validatedData);

        return redirect()->action([ProgFormationController::class, 'show'], [
            'id_categorie' => $id_categorie,
            'id_subCategorie' => $id_subCategorie,
            'id_formation' => $id_formation
        ]);
    }

    public function destroy($id_categorie, $id_subCategorie, $id_formation, $id_program)
    {
        $program = Formation_Programme::find($id_program);
        $program->delete();

        return redirect()->action([ProgFormationController::class, 'show'], [
            'id_categorie' => $id_categorie,
            'id_subCategorie' => $id_subCategorie,
            'id_formation' => $id_formation
        ]);
    }

    public function trashed($id_categorie, $id_subCategorie, $id_formation)
    {
        $categorie = FormationCategorie::findOrFail($id_categorie);
        $subCategorie = FormationSubCategorie::findOrFail($id_subCategorie);
        $formation = Formation::findOrFail($id_formation);

        $formation->programs = Formation_Programme::onlyTrashed()
            ->where('formations_id', $id_formation)
            ->get();

        return view("admin.categorie.formation.programme.trashed", compact('subCategorie', 'categorie', 'formation'));
    }

    public function restore($id_categorie, $id_subCategorie, $id_formation, $id)
    {
        $program = Formation_Programme::withTrashed()->find($id);
        $program->restore();

        return redirect()->action([ProgFormationController::class, 'trashed'], [
            'id_categorie' => $id_categorie,
            'id_subCategorie' => $id_subCategorie,
            'id_formation' => $id_formation
        ]);
    }
}
