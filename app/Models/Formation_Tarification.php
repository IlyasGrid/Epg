<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Formation_Tarification extends Model
{
    use HasFactory, SoftDeletes;

    public function Formation()
    {
        $this->belongsTo(Formation::class);
    }

    protected $fillable = ['Name', 'Price', 'Type', 'Volume_Horraire', 'Duree_formation', 'Debut_formation', 'Deroulement', 'Horraire', 'Dernier_Delais_Inscription', 'repartition_heures', 'formations_id'];
}
