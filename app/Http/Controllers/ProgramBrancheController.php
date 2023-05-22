<?php

namespace App\Http\Controllers;

use App\Models\Branche_Diplome;
use App\Models\Diplome;
use App\Models\Programe_Branche;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class ProgramBrancheController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    public function create($id_diplome, $id_branche)
    {

        $diplome = Diplome::findOrFail($id_diplome);

        $branche = Branche_Diplome::findOrFail($id_branche);


        return view('admin.diplome.branche.program.create', compact('diplome', 'branche'));
    }


    public function store(Request $request, $id_diplome, $id_branche)
    {

        $formFields = $request;
        $formFields = $request->validate([
            'Annee' => 'required',
            'Name_module' => 'required',
        ]);

        $nonEmptyModules = array_filter($formFields['Name_module']);

        foreach ($nonEmptyModules as $key => $module) {

            $formFields['Name_module'] = $module;

            Programe_Branche::create(array_merge($formFields, ['branche__diplomes_id' => $id_branche]));
        }


        $diplome = Diplome::findOrFail($id_diplome);

        $branche = Branche_Diplome::findOrFail($id_branche);

        return redirect()->action([ProgramBrancheController::class, 'show'], ['id_diplome' => $diplome->id, 'id_branche' => $branche->id]);
    }


    public function show($id_diplome, $id_branche)
    {

        $diplome = Diplome::findOrFail($id_diplome);
        $branche = Branche_Diplome::findOrFail($id_branche);

        $branche->programs = Programe_Branche::where('branche__diplomes_id', '=', $branche->id)->get();

        return view('admin.diplome.branche.program.show2', compact('diplome', 'branche'));
    }




    public function edit($id_diplome, $id_branche, $annee)
    {

        $diplome = Diplome::findOrFail($id_diplome)->first();

        $branche = Branche_Diplome::findOrFail($id_branche);


        $branche->annee = $annee;

        $branche->program  = Programe_Branche::where('Annee', '=', $annee)
            ->where('branche__diplomes_id', '=', $branche->id)
            ->get();

        // dd($branche->program);
        return view('admin.diplome.branche.program.edit', compact('diplome', 'branche'));
    }



    public function update(Request $request, $id_diplome, $id_branche, $annee)
    {
        $formFields = $request->validate([
            'Program_id.*' => 'required',
            'Name_module.*' => 'nullable',
        ]);

        $programIds = $formFields['Program_id'];
        $moduleNames = $formFields['Name_module'];

        foreach ($programIds as $key => $programId) {
            $module = $moduleNames[$key] ?? null;

            if (empty($module)) {
                Programe_Branche::find($programId)->delete();
            } else {
                Programe_Branche::where('id', $programId)->update(['Name_module' => $module]);
            }
        }
        // Create new programs
        $additionalModules = array_slice($moduleNames, count($programIds));
        foreach ($additionalModules as $module) {
            if (!empty($module)) {
                Programe_Branche::create([
                    'branche__diplomes_id' => $id_branche,
                    'Annee' => $annee,
                    'Name_module' => $module
                ]);
            }
        }

        return redirect()->action([ProgramBrancheController::class, 'show'], [
            'id_diplome' => $id_diplome,
            'id_branche' => $id_branche
        ]);
    }



    public function destroy($id_diplome, $id_branche, $annee)
    {

        $programs = Programe_Branche::where('Annee', '=', $annee)->get();
        // dd($programs);
        foreach ($programs as $key => $program) {
            # code...
            $program->delete();
        }
        return redirect()->action([ProgramBrancheController::class, 'show'], [
            'id_diplome' => $id_diplome,
            'id_branche' => $id_branche
        ]);
    }


    public function trashed($id_diplome, $id_branche)
    {
        $diplome = Diplome::findOrFail($id_diplome);
        $branche = Branche_Diplome::findOrFail($id_branche);

        $branche->programs = Programe_Branche::onlyTrashed()->where('branche__diplomes_id', '=', $branche->id)->get();

        return view('admin.diplome.branche.program.trashed', compact('diplome', 'branche'));
    }

    public function restore($id_diplome, $id_branche, $annee)
    {

        $programs = Programe_Branche::onlyTrashed()->where('Annee', '=', $annee)->get();

        foreach ($programs as $key => $program) {
            $program->restore();
        }


        return redirect()->action([ProgramBrancheController::class, 'trashed'], [
            'id_diplome' => $id_diplome,
            'id_branche' => $id_branche
        ]);
    }
}
