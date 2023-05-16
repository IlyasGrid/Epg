<?php

namespace App\Http\Controllers;

use App\Models\Branche_Diplome;
use App\Models\Diplome;
use App\Models\Langue;
use Illuminate\Contracts\Validation\Rule;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule as ValidationRule;

class DiplomeController extends Controller
{
    public function index()
    {
        $diplomes = Diplome::all();
        return view('Diplomes.index', compact('diplomes'));
    }

    public function show($diplome_name)
    {

        $diplome_id = Diplome::where('Name', '=', $diplome_name)->get('id');
        $diplome_id = $diplome_id[0]->id;

        $branches = Branche_Diplome::where('Diplome_id', '=', $diplome_id)->get();

        return view('Diplomes.show', compact('branches', 'diplome_name'));
    }





    // -------------------------------------admin-------------------------------------

    public function adminHome()
    {
        return view('admin.test');
    }

    public function adminShow()
    {
        $diplomes = Diplome::all();
        return view("admin.diplome.show", compact('diplomes'));
    }

    public function trashed()
    {
        $diplomes = Diplome::onlyTrashed()->get();

        // $trashedResources = Diplome::withTrashed()->whereNotNull('deleted_at')->get();

        if ($diplomes->count() <= 0) {
            return view("admin.diplome.trashed", compact('diplomes'));
        }

        return view("admin.diplome.trashed", compact('diplomes'));
    }


    public function restore($id)
    {
        $diplome = Diplome::withTrashed()->find($id);
        $diplome->restore();



        return redirect()->action([DiplomeController::class, 'trashed'],);
    }


    public function create()
    {
        return view('admin.diplome.create');
    }

    public function edit($id)
    {

        $diplome = Diplome::where('id', '=', $id)->get();
        $diplome = $diplome[0];
        $message = null;
        // dd($diplome->Prerequis);

        return view('admin.diplome.edit', ['diplome' => $diplome, 'message' => $message]);
    }


    public function store(Request $request)
    {
        $formFields = $request;
        $formFields = $request->validate([
            'Name' => ['required', ValidationRule::unique('diplomes', 'Name')],
            'Prerequis' => 'required',
            'Duree' => 'required',
        ]);

        Diplome::create($formFields);

        return redirect()->action([DiplomeController::class, 'adminShow']);
    }





    public function update(Request $request, Diplome $diplome)
    {
        $diplome = Diplome::find($request->id);
        $formFields = $request;
        $formFields = $request->validate([
            'Name' => 'required',
            'Prerequis' => 'required',
            'Duree' => 'nullable',
        ]);
        $diplome->update($formFields);

        return redirect()->action([DiplomeController::class, 'adminShow']);
    }

    public function destroy($id)
    {
        $diplome = Diplome::find($id);
        $diplome->delete();
        return redirect()->action([DiplomeController::class, 'adminShow']);
    }


    //------------------------------- branche---------------------------------------------


    public function showBranche($id_diplome)
    {
        $diplome = Diplome::findOrFail($id_diplome);
        $branches = Branche_Diplome::where('diplome_id', '=', $id_diplome)->get();
        return view("admin.diplome.branche.show", compact('diplome', 'branches'));
    }

    public function editBranche($id_diplome, $id_tarif)
    {
        $diplome = Diplome::where('id', '=', $id_diplome)->get();
        $diplome = $diplome[0];

        $branche = Branche_Diplome::where('id', '=', $id_tarif)
            ->where('diplome_id', '=', $id_diplome)
            ->get();

        if ($branche->isEmpty()) {
            return redirect()->action([diplomeController::class, 'showBranche'], ['id_diplome' => $id_diplome]);
        }

        $branche = $branche[0];
        return view('admin.diplome.branche.edit', compact('diplome', 'branche'));
    }


    public function updateBranche(Request $request, $id_diplome, $id_branche)
    {
        // dd($request);
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




    public function createBranche($id_diplome)
    {
        $diplome = Diplome::where('id', '=', $id_diplome)
            ->get();
        $diplome = $diplome[0];
        // dd($diplome);
        return view('admin.diplome.branche.create', ['diplome' => $diplome]);
    }

    public function storeBranche(Request $request, $id_diplome)
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


    public function destroyBranche($id_diplome, $id_branche)
    {
        $branche = Branche_Diplome::find($id_branche);
        $branche->delete();


        $diplome = Diplome::where('id', '=', $id_diplome)
            ->get();
        $diplome = $diplome[0];

        return redirect()->action([DiplomeController::class, 'showBranche'],  ['id_diplome' => $diplome->id]);
    }


    public function trashedBranche($id_diplome)
    {
        $diplome = Diplome::findOrFail($id_diplome);

        $branches = Branche_Diplome::onlyTrashed()->where('Diplome_id', '=', $id_diplome)->get();


        return view("admin.diplome.branche.trashed", compact('diplome', 'branches'));
    }

    public function restoreBranche($id_diplome, $id)
    {

        $branche = Branche_Diplome::withTrashed()->find($id);
        $branche->restore();

        return redirect()->action([DiplomeController::class, 'trashedBranche'], ['id_diplome' => $id_diplome]);
    }
}
