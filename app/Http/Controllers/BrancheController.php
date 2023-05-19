<?php

namespace App\Http\Controllers;

use App\Models\Branche_Diplome;
use App\Models\Diplome;
use Illuminate\Http\Request;

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
        $diplome = Diplome::where('id', '=', $id_diplome)->get();
        $diplome = $diplome[0];

        $branche = Branche_Diplome::where('id', '=', $id_tarif)
            ->where('diplome_id', '=', $id_diplome)
            ->first();

        if (!$branche) {
            return redirect()->action([diplomeController::class, 'showBranche'], ['id_diplome' => $id_diplome]);
        }

        return view('admin.diplome.branche.edit', compact('diplome', 'branche'));
    }


    public function update(Request $request, $id_diplome, $id_branche)
    {
        $branche = Branche_Diplome::where('Diplome_id', '=', $id_diplome)
            ->where('id', '=', $id_branche)
            ->get();


        if ($branche->isEmpty()) {
            return redirect()->action([DiplomeController::class, 'showBranche'], ['id_diplome' => $id_diplome]);
        }
        $branche = $branche[0];

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

            // dd($branche);

            $branche->update($formFields);
        }


        return redirect()->action([DiplomeController::class, 'showBranche'], ['id_diplome' => $id_diplome]);
    }




    public function create($id_diplome)
    {
        $diplome = Diplome::where('id', '=', $id_diplome)
            ->get();
        $diplome = $diplome[0];
        // dd($diplome);
        return view('admin.diplome.branche.create', ['diplome' => $diplome]);
    }

    public function store(Request $request, $id_diplome)
    {


        $diplome = Diplome::where('id', '=', $id_diplome)
            ->get();
        $diplome = $diplome[0];
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
        // dd($diplome->id);

        Branche_Diplome::create(array_merge($formFields, ['Diplome_id' => $diplome->id]));

        return redirect()->action([DiplomeController::class, 'showBranche'], ['id_diplome' => $diplome->id]);
    }


    public function destroy($id_diplome, $id_branche)
    {
        $branche = Branche_Diplome::find($id_branche);
        $branche->delete();


        $diplome = Diplome::where('id', '=', $id_diplome)
            ->get();
        $diplome = $diplome[0];

        return redirect()->action([DiplomeController::class, 'showBranche'],  ['id_diplome' => $diplome->id]);
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

        return redirect()->action([DiplomeController::class, 'trashedBranche'], ['id_diplome' => $id_diplome]);
    }
}
