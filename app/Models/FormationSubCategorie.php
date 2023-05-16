<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class FormationSubCategorie extends Model
{
    use HasFactory, SoftDeletes;

    public function FormationCategorie()
    {
        $this->belongsTo(FormationCategorie::class);
    }
    public function Formation()
    {
        $this->hasMany(Formation::class);
    }
}
