<?php

namespace App\Http\Controllers;

use App\Models\Soutien;
use Illuminate\Http\Request;

class SoutienController extends Controller
{

    public function show()
    {

        $soutiens = Soutien::all();

        return view('admin.soutien.show2', compact('soutiens'));
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $soutiens = Soutien::all();
        return view('cours-soutien-informatique', compact('soutiens'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.soutien.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $formFields = $request;
        $formFields = $request->validate([
            'type' => 'required',
            'volume_horraire' => 'required',
            'nbr_personne' => 'required',
            'price' => 'required'
        ]);

        Soutien::create($formFields);


        return redirect()->action([SoutienController::class, 'show']);
    }

    /**
     * Display the specified resource.
     */

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $soutien =Soutien::find($id);
        return view('admin.soutien.edit',compact('soutien'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $soutien =Soutien::find($id);

        $formFields = $request->validate([
            'type' => 'required',
            'volume_horraire' => 'required',
            'nbr_personne' => 'required',
            'price' => 'required',
        ]);


        $soutien->update($formFields);

        return redirect()->action([SoutienController::class, 'show']);

    }

    public function destroy($id_tarif)
    {
        $tarif = Soutien::find($id_tarif);

        $tarif->delete();

        return redirect()->action([SoutienController::class, 'show']);
    }

    public function trashed()
    {

        $soutiens = Soutien::onlyTrashed()->get();

        return view("admin.soutien.trashed", compact('soutiens'));
    }

    public function restore($id_tarif)
    {

        $tarif = Soutien::withTrashed()->find($id_tarif);
        $tarif->restore();

        return redirect()->action([SoutienController::class, 'trashed']);
    }
}
