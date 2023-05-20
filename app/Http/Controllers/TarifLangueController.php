<?php

namespace App\Http\Controllers;

use App\Models\Langue;
use App\Models\Tarification_Langue;
use Illuminate\Http\Request;

class TarifLangueController extends Controller
{
    
    public function edit($id_langue, $id_tarif)
    {
        $langue = Langue::where('id', '=', $id_langue)->get();
        $langue = $langue[0];

        $tarif = Tarification_Langue::where('id', '=', $id_tarif)
            ->where('langue_id', '=', $id_langue)
            ->get();

        if ($tarif->isEmpty()) {
            return redirect()->action([TarifLangueController::class, 'show'], ['id_langue' => $id_langue]);
        }

        $tarif = $tarif[0];
        return view('admin.langue.tarification.edit', compact('langue', 'tarif'));
    }


    public function update(Request $request, $id_langue, $id_tarif)
    {
        $tarif = Tarification_Langue::where('langue_id', '=', $id_langue)
            ->where('id', '=', $id_tarif)
            ->get();


        if ($tarif->isEmpty()) {
            return redirect()->action([TarifLangueController::class, 'show'], ['id_langue' => $id_langue]);
        }
        $tarif = $tarif[0];

        $formFields = $request;

        if ($tarif) {
            $formFields = $request->validate([
                'Type' => 'required',
                'Volume_Horraire' => 'required',
                'Temps' => 'required',
                'Price' => 'required',
            ]);

            // dd($tarif);

            $tarif->update($formFields);
        }


        return redirect()->action([TarifLangueController::class, 'show'], ['id_langue' => $id_langue]);
    }


    public function show($id_langue)
    {
        $langue = Langue::findOrFail($id_langue);
        $tarifs = Tarification_Langue::where('langue_id', '=', $id_langue)->get();
        return view("admin.langue.tarification.show", compact('langue', 'tarifs'));
    }

    public function create($id_langue)
    {
        $langue = Langue::findOrFail($id_langue);

        return view('admin.langue.tarification.create', ['langue' => $langue]);
    }

    public function store(Request $request, $id_langue)
    {

        $formFields = $request;
        $formFields = $request->validate([
            'Type' => 'required',
            'Volume_Horraire' => 'required',
            'Temps' => 'required',
            'Price' => 'required'
        ]);

        Tarification_Langue::create(array_merge($formFields, ['langue_id' => $id_langue]));

        return redirect()->action([TarifLangueController::class, 'show'], ['id_langue' => $id_langue]);
    }
    public function destroy($id_langue, $id_tarif)
    {
        $tarif = Tarification_Langue::find($id_tarif);
        $tarif->delete();
        return redirect()->action([TarifLangueController::class, 'show'], ['id_langue' => $id_langue]);
    }

    public function trashed($id_langue)
    {
        $langue = Langue::findOrFail($id_langue);

        $tarifs = Tarification_Langue::onlyTrashed()->where('langue_id', '=', $id_langue)->get();

        return view("admin.langue.tarification.trashed", compact('langue', 'tarifs'));
    }

    public function restore($id_langue, $id)
    {

        $tarif = Tarification_Langue::withTrashed()->find($id);
        $tarif->restore();

        return redirect()->action([TarifLangueController::class, 'trashed'], ['id_langue' => $id_langue]);
    }
}
