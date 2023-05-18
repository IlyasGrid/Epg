<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Formation extends Model
{
    use HasFactory, SoftDeletes;

    public function FormationSubCategorie()
    {
        $this->belongsTo(FormationSubCategorie::class);
    }

    public function Formation_Programme()
    {
        $this->hasMany(Formation_Programme::class);
    }

    public function Formation_Tarification()
    {
        $this->hasMany(Formation_Tarification::class);
    }

    protected $fillable = ['Name', 'logo', 'img',  'MotivaionName', 'MotivaionBody', 'objectifs', 'tp', 'formation_sub_categories_id'];
}
