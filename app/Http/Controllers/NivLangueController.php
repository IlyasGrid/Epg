<?php

namespace App\Http\Controllers;

use App\Models\Langue;
use App\Models\Niveau_Langue;
use Illuminate\Http\Request;

class NivLangueController extends Controller
{

    public function show($id_langue)
    {
  
        $langue = Langue::findOrFail($id_langue);
        $niveaux = Niveau_Langue::where('langue_id', '=', $id_langue)->get();
        return view("admin.langue.niveau.show", compact('langue', 'niveaux'));
    }

    public function edit($id_langue, $id_niveau)
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


    public function update(Request $request, $id_langue, $id_niveau)
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



    public function create($id_langue)
    {
        return view('admin.langue.niveau.create', ['id_langue' => $id_langue]);
    }

    public function store(Request $request, $id_langue)
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
    public function destroy($id_langue, $id_niveau)
    {
        $niveau = Niveau_Langue::find($id_niveau);
        $niveau->delete();
        return redirect()->action([LangueController::class, 'showNiveau'], ['id_langue' => $id_langue]);
    }

    public function trashed($id_langue)
    {
        $langue = Langue::findOrFail($id_langue);

        $niveaux = Niveau_Langue::onlyTrashed()->where('langue_id', '=', $id_langue)->get();


        return view("admin.langue.niveau.trashed", compact('langue', 'niveaux'));
    }

    public function restore($id_langue, $id)
    {

        $niveau = Niveau_Langue::withTrashed()->find($id);
        $niveau->restore();



        return redirect()->action([LangueController::class, 'trashedNiveau'], ['id_langue' => $id_langue]);
    }
}
