<?php

namespace App\Http\Controllers;

use App\Models\Formation;
use App\Models\Formation_Tarification;
use App\Models\FormationCategorie;
use App\Models\FormationSubCategorie;
use Illuminate\Http\Request;

class TarifFormationController extends Controller
{
    function show($id_categorie, $id_subCategorie, $id_formation)
    {
        $categorie = FormationCategorie::findOrFail($id_categorie);
        $subCategorie = FormationSubCategorie::findOrFail($id_subCategorie);
        $formation = Formation::findOrFail($id_formation);

        $formation->tarifs = Formation_Tarification::where('formations_id', '=', $id_formation)->get();
        return view("admin.categorie.formation.tarification.show", compact('categorie', 'subCategorie', 'formation'));
    }


    public function create($id_categorie, $id_subCategorie, $id_formation)
    {
        $categorie = FormationCategorie::findOrFail($id_categorie);

        $subCategorie = FormationSubCategorie::findOrFail($id_subCategorie);

        $formation = Formation::findOrFail($id_formation);


        return view('admin.categorie.formation.tarification.create', ['categorie' => $categorie, 'subCategorie' => $subCategorie, 'formation' => $formation]);
    }


    public function store(Request $request, $id_categorie, $id_subCategorie, $id_formation)
    {

        $formFields = $request;
        $formFields = $request->validate([
            'Name' => 'required',
            'Type' => 'required',
            'Price' => 'required',
            'Volume_Horraire' => 'required',
            'Duree_formation' => 'nullable',
            'Debut_formation' => 'required',
            'Deroulement' => 'nullable',
            'Horraire' => 'required',
            'Dernier_Delais_Inscription' => 'nullable',
            'repartition_heures' => 'nullable'
        ]);


        Formation_Tarification::create(array_merge($formFields, ['formations_id' => $id_formation]));

        return redirect()->action([TarifFormationController::class, 'show'],  ['id_categorie' => $id_categorie, 'id_subCategorie' => $id_subCategorie, 'id_formation' => $id_formation]);
    }

    public function edit($id_categorie, $id_subCategorie, $id_formation, $id_tarif)
    {
        $categorie = FormationCategorie::where('id', '=', $id_categorie)->get();
        $categorie = $categorie[0];

        $subCategorie = FormationSubCategorie::where('id', '=', $id_subCategorie)->get();
        $subCategorie = $subCategorie[0];

        $formation  = Formation::where('id', '=', $id_formation)->get();
        $formation = $formation[0];


        $formation->tarif  = Formation_Tarification::where('id', '=', $id_tarif)
            ->where('formations_id', '=', $id_formation)
            ->get();

            // dd($formation->tarif);
        if ($formation->tarif->isEmpty()) {
            return redirect()->action([TarifFormationController::class, 'show'],  ['id_categorie' => $id_categorie, 'id_subCategorie' => $id_subCategorie,'id_formation'=>$id_formation]);
        }
        $formation->tarif = $formation->tarif[0];
        return view('admin.categorie.formation.tarification.edit', compact('categorie', 'subCategorie','formation'));
    }


    public function update(Request $request, $id_categorie, $id_subCategorie, $id_formation, $id_tarif)
    {

        $tarif = Formation_Tarification::where('formations_id', '=', $id_formation)
            ->where('id', '=', $id_tarif)
            ->get();


        if ($tarif->isEmpty()) {
            return redirect()->action([TarifFormationController::class, 'show'],  ['id_categorie' => $id_categorie, 'id_subCategorie' => $id_subCategorie,'id_formation'=>$id_formation]);
        }
        $tarif = $tarif[0];

        $formFields = $request;

        if ($tarif) {
            $formFields = $request->validate([
                'Name' => 'required',
                'Type' => 'required',
                'Volume_Horraire' => 'required',
                'Duree_formation' => 'nullable',
                'Debut_formation' => 'required',
                'Deroulement' => 'nullable',
                'Horraire' => 'required',
                'Dernier_Delais_Inscription' => 'nullable',
                'repartition_heures' => 'nullable'
            ]);


            $tarif->update($formFields);
        }


        return redirect()->action([TarifFormationController::class, 'show'],  ['id_categorie' => $id_categorie, 'id_subCategorie' => $id_subCategorie,'id_formation'=>$id_formation]);
    }


    public function destroy($id_categorie, $id_subCategorie, $id_formation,$id_tarif)
    {

        $tarif = Formation_Tarification::find($id_tarif);
        $tarif->delete();
        return redirect()->action([TarifFormationController::class, 'show'], ['id_categorie' => $id_categorie, 'id_subCategorie' => $id_subCategorie,'id_formation'=>$id_formation]);
    }


    public function trashed($id_categorie, $id_subCategorie, $id_formation)
    {

        $categorie = FormationCategorie::where('id', '=', $id_categorie)->get();
        $categorie = $categorie[0];

        $subCategorie = FormationSubCategorie::findOrFail($id_subCategorie);

        $formation = Formation::findOrFail($id_formation);


        $formation->tarifs = Formation_Tarification::onlyTrashed()->where('formations_id', '=', $id_formation)->get();

        return view("admin.categorie.formation.tarification.trashed", compact('subCategorie', 'categorie','formation'));
    }

    public function restore($id_categorie, $id_subCategorie, $id_formation, $id)
    {

        $tarif = Formation_Tarification::withTrashed()->find($id);
        $tarif->restore();

        return redirect()->action([TarifFormationController::class, 'trashed'],  ['id_categorie' => $id_categorie, 'id_subCategorie' => $id_subCategorie,'id_formation'=>$id_formation]);
    }
}
