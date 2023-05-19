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

        $diplome = Diplome::where('Name', '=', $diplome_name)->get('id');
        $diplome_id = $diplome[0]->id;

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

        $diplome = Diplome::where('id', '=', $id)->first();

        return view('admin.diplome.edit', ['diplome' => $diplome]);
    }


    public function store(Request $request)
    {
        $formFields = $request;
        $formFields = $request->validate([
            'Name' => ['required', ValidationRule::unique('diplomes', 'Name')],
            'Prerequis' => 'required',
            'Duree' => 'required',
        ]);

        if ($request->hasFile('img')) {
            $file = $request->file('img');
            $filename = $file->getClientOriginalName();

            $file->storeAs('diplomes', $filename, 'public');
            $formFields['img'] = 'diplomes/' . $filename;
        }

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

        if ($request->hasFile('img')) {
            $file = $request->file('img');
            $filename = $file->getClientOriginalName();

            $file->storeAs('diplomes', $filename, 'public');
            $formFields['img'] = 'diplomes/' . $filename;
        }

        $diplome->update($formFields);

        return redirect()->action([DiplomeController::class, 'adminShow']);
    }

    public function destroy($id)
    {
        $diplome = Diplome::find($id);
        $diplome->delete();
        return redirect()->action([DiplomeController::class, 'adminShow']);
    }
}
