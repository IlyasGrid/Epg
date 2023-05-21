<?php

namespace App\View\Components;

use App\Models\Diplome;
use App\Models\FormationCategorie;
use App\Models\Langue;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Layout extends Component
{


    public $diplomes;
    public $langues;
    public $categories;


    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        $this->diplomes= Diplome::all();
        $this->langues=Langue::all();
        $this->categories =FormationCategorie::all();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.Layout');
    }
}
