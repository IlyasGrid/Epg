<?php

namespace App\Http\Controllers;

use App\Models\Branche_Diplome;
use App\Models\Diplome;
use Illuminate\Http\Request;

class DiplomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $diplomes = Diplome::all();
        return view('Diplomes.index', compact('diplomes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show($diplome_name)
    {
        
        $diplome_id=Diplome::where('Name', '=', $diplome_name)->get('id');
        $diplome_id=$diplome_id[0]->id;

        $branches=Branche_Diplome::where('Diplome_id', '=', $diplome_id)->get();

        return view('Diplomes.show', compact('branches','diplome_name'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Diplome $diplome)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Diplome $diplome)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Diplome $diplome)
    {
        //
    }
}
