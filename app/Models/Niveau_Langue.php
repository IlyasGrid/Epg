<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Niveau_Langue extends Model
{
    use HasFactory;

    public function Langue()
    {
        $this->belongsTo(Langue::class);
    }
    protected $fillable = ['Niveau', 'Duree_Cours_Normal', 'Duree_Cours_Soir', 'Duree_Cours_Accelerer', 'Duree_Cours_Rapide', 'langue_id'];
    public $timestamps = false;
}
