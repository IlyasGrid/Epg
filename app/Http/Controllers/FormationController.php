<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormationController extends Controller
{

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view("Formations.index");
    }

    /**
     * Display a single resource.
     */
    public function show()
    {
        return view("Formations.show");
    }
}
