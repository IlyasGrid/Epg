<?php

namespace App\Http\Controllers;

use App\Models\Bourse;
use Illuminate\Http\Request;

function filterAndImplode(&$formFields, $fieldName)
{
    if (isset($formFields[$fieldName])) {
        $nonEmptyValues = array_filter($formFields[$fieldName]);
        $implodedValues = implode(';', $nonEmptyValues);
        $formFields[$fieldName] = $implodedValues;
    }
}
class BourseController extends Controller
{
    public function show()
    {

        $bourse = Bourse::first();

        return view('admin.bourse.show', compact('bourse'));
    }


    public function index()
    {

        $bourse = Bourse::first();
        if (!$bourse) {
            $bourse = null;
        }
        // dd($bourse->conditions);

        return view('Bourse', compact('bourse'));
    }

    public function edit($id)
    {
        $bourse = Bourse::find($id);
        return view('admin.bourse.edit', compact('bourse'));
    }


    public function update(Request $request, $id)
    {
        $bourse = Bourse::find($id);


        $formFields = $request->validate([
            'text' => 'required',
            'conditions' => 'nullable',
        ]);

        filterAndImplode($formFields, 'conditions');

        $bourse->update($formFields);

        return redirect()->action([BourseController::class, 'show']);
    }

    // public function create()
    // {
    //     return view('admin.soutien.create');
    // }


    // public function store(Request $request)
    // {

    //     $formFields = $request;
    //     $formFields = $request->validate([
    //         'type' => 'required',
    //         'volume_horraire' => 'required',
    //         'nbr_personne' => 'required',
    //         'price' => 'required'
    //     ]);

    //     Soutien::create($formFields);


    //     return redirect()->action([SoutienController::class, 'show']);
    // }


    // public function destroy($id)
    // {
    //     $bourse = Bourse::find($id);

    //     $bourse->delete();

    //     return redirect()->action([BourseController::class, 'show']);
    // }

    // public function trashed()
    // {

    //     $bourses = Bourse::onlyTrashed()->get();

    //     return view("admin.bourse.trashed", compact('bourses'));
    // }

    // public function restore($id)
    // {

    //     $tarif = Bourse::withTrashed()->find($id);
    //     $tarif->restore();

    //     return redirect()->action([BourseController::class, 'trashed']);
    // }
}
