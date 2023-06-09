<?php

namespace App\Http\Controllers;

use App\Models\Langue;
use App\Models\Niveau_Langue;
use App\Models\Tarification_Langue;
use Illuminate\Database\Eloquent\Casts\Json;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Lang;
use Illuminate\Validation\Rule;

function filterAndImplode(&$formFields, $fieldName)
{
    if (isset($formFields[$fieldName])) {
        $nonEmptyValues = array_filter($formFields[$fieldName]);
        $implodedValues = implode(';', $nonEmptyValues);
        $formFields[$fieldName] = $implodedValues;
    }
}
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

        $langue = Langue::where('Name', $langueName)->first();

        if ($langue) {
            // Tarif
            $tarif = Tarification_Langue::where('langue_id', $langue->id)->get();
        
            if ($tarif->isEmpty()) {
                $courses = null;
                $niveaux = null;
                return view('Languages.show', compact('langue', 'courses', 'niveaux'));
            }
        
            $courses = $tarif;
        
            // Niveau
            $niveaux = Niveau_Langue::where('langue_id', $langue->id)->get();
            if ($niveaux->isEmpty()) {
                $niveaux = null;
            }
        
            return view('Languages.show', compact('langue', 'courses', 'niveaux'));
        } else {
            return '<h1>not found</h1>';
        }
        
    }





    // -------------------------------------admin-------------------------------------





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
            'Raisons' => 'nullable',
            'Piece_frais' => 'nullable',
            'Conditions_Etudes' => 'nullable',
            'Conditions_Formations' => 'nullable',
            'Conditions_Cherche_Emploi' => 'nullable',
        ]);



        filterAndImplode($formFields, 'Raisons');
        filterAndImplode($formFields, 'Piece_frais');
        filterAndImplode($formFields, 'Conditions_Etudes');
        filterAndImplode($formFields, 'Conditions_Formations');
        filterAndImplode($formFields, 'Conditions_Cherche_Emploi');

        if ($request->hasFile('img')) {
            $file = $request->file('img');
            $filename = $file->getClientOriginalName();

            $file->storeAs('langues', $filename, 'public');
            $formFields['img'] = 'langues/' . $filename;
        }


        Langue::create($formFields);

        return redirect()->action([LangueController::class, 'adminShow']);
    }


    public function edit($id)
    {
        $langue = Langue::where('id', '=', $id)->first();

        return view('admin.langue.edit', ['langue' => $langue]);
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



        filterAndImplode($formFields, 'Raisons');
        filterAndImplode($formFields, 'Piece_frais');
        filterAndImplode($formFields, 'Conditions_Etudes');
        filterAndImplode($formFields, 'Conditions_Formations');
        filterAndImplode($formFields, 'Conditions_Cherche_Emploi');

        if ($request->hasFile('img')) {
            $file = $request->file('img');
            $filename = $file->getClientOriginalName();

            $file->storeAs('langues', $filename, 'public');
            $formFields['img'] = 'langues/' . $filename;
        }

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
}
