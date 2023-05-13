<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Langue extends Model
{
    use HasFactory;
    public function Niveau_Langue()
    {
        $this->hasOne(Niveau_Langue::class);
    }
    public function Tarification_Langue()
    {
        $this->hasOne(Tarification_Langue::class);
    }
    // public $timestamps = false;

    protected $fillable = ['Name', 'Subtitle', 'Motivation', 'Raisons', 'Piece_frais', 'Conditions_Etudes', 'Conditions_Formations', 'Conditions_Cherche_Emploi'];
}
