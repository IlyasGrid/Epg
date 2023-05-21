<?php

namespace App\Http\Controllers;

use App\Models\Branche_Diplome;
use App\Models\Diplome;
use App\Models\Programe_Branche;
use Illuminate\Http\Request;
function filterAndImplode(&$formFields, $fieldName)
{
    if (isset($formFields[$fieldName])) {
        $nonEmptyValues = array_filter($formFields[$fieldName]);
        $implodedValues = implode(';', $nonEmptyValues);
        $formFields[$fieldName] = $implodedValues;
    }
}
class BrancheController extends Controller
{

    public function show($id_diplome)
    {
        $diplome = Diplome::findOrFail($id_diplome);
        $branches = Branche_Diplome::where('diplome_id', '=', $id_diplome)->get();
        return view("admin.diplome.branche.show", compact('diplome', 'branches'));
    }

    public function edit($id_diplome, $id_tarif)
    {
        $diplome = Diplome::where('id', '=', $id_diplome)->first();

        $branche = Branche_Diplome::where('id', '=', $id_tarif)
            ->where('diplome_id', '=', $id_diplome)
            ->first();

        if (!$branche) {
            return redirect()->action([BrancheController::class, 'show'], ['id_diplome' => $id_diplome]);
        }

        return view('admin.diplome.branche.edit', compact('diplome', 'branche'));
    }


    public function update(Request $request, $id_diplome, $id_branche)
    {
        $branche = Branche_Diplome::where('Diplome_id', $id_diplome)
            ->where('id', $id_branche)
            ->first();

        if (!$branche) {
            return redirect()->action([BrancheController::class, 'show'], ['id_diplome' => $id_diplome]);
        }

        $formFields = $request;

        if ($branche) {
            $formFields = $request->validate([
                "Abreviation" => "required",
                "Fullname" => "required",
                "Motivation" => "nullable",
                "Price_month" => 'required',
                "Price_year" => 'required',
                "Objectifs" => "required",
                "Prerequis" => "required",
                "Prespective_professionel" => "nullable",
                "Piece_a_fournis" => "nullable"
            ]);

            filterAndImplode($formFields, 'Objectifs');
            filterAndImplode($formFields, 'Prerequis');
            filterAndImplode($formFields, 'Prespective_professionel');
            filterAndImplode($formFields, 'Piece_a_fournis');

            if ($request->hasFile('img')) {
                $file = $request->file('img');
                $filename = $file->getClientOriginalName();
    
                $file->storeAs('diplomes/branches', $filename, 'public');
                $formFields['img'] = 'diplomes/branches/' . $filename;
            }

            $branche->update($formFields);
        }


        return redirect()->action([BrancheController::class, 'show'], ['id_diplome' => $id_diplome]);
    }




    public function create($id_diplome)
    {
        $diplome = Diplome::where('id', '=', $id_diplome)
            ->first();
        return view('admin.diplome.branche.create', ['diplome' => $diplome]);
    }

    public function store(Request $request, $id_diplome)
    {


        $diplome = Diplome::where('id', '=', $id_diplome)
            ->first();
        $formFields = $request;
        $formFields = $request->validate([
            "Abreviation" => "required",
            "Fullname" => "required",
            "Motivation" => "nullable",
            "Price_month" => 'required',
            "Price_year" => 'required',
            "Objectifs" => "required",
            "Prerequis" => "required",
            "Prespective_professionel" => "nullable",
            "Piece_a_fournis" => "nullable"
        ]);

        filterAndImplode($formFields, 'Objectifs');
        filterAndImplode($formFields, 'Prerequis');
        filterAndImplode($formFields, 'Prespective_professionel');
        filterAndImplode($formFields, 'Piece_a_fournis');

        if ($request->hasFile('img')) {
            $file = $request->file('img');
            $filename = $file->getClientOriginalName();

            $file->storeAs('diplomes', $filename, 'public');
            $formFields['img'] = 'diplomes' . $filename;
        }

        Branche_Diplome::create(array_merge($formFields, ['Diplome_id' => $diplome->id]));

        return redirect()->action([BrancheController::class, 'show'], ['id_diplome' => $diplome->id]);
    }


    public function destroy($id_diplome, $id_branche)
    {
        $branche = Branche_Diplome::find($id_branche);
        $branche->delete();


        $diplome = Diplome::where('id', '=', $id_diplome)
            ->first();

        return redirect()->action([BrancheController::class, 'show'],  ['id_diplome' => $diplome->id]);
    }


    public function trashed($id_diplome)
    {
        $diplome = Diplome::findOrFail($id_diplome);

        $branches = Branche_Diplome::onlyTrashed()->where('Diplome_id', '=', $id_diplome)->get();


        return view("admin.diplome.branche.trashed", compact('diplome', 'branches'));
    }

    public function restore($id_diplome, $id)
    {

        $branche = Branche_Diplome::withTrashed()->find($id);
        $branche->restore();

        return redirect()->action([BrancheController::class, 'trashed'], ['id_diplome' => $id_diplome]);
    }
}
