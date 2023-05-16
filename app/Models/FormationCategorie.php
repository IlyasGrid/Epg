<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class FormationCategorie extends Model
{
    use HasFactory, SoftDeletes;

    public function FormationSubCategorie()
    {
        $this->hasMany(FormationSubCategorie::class);
    }

    protected $fillable = ['Name'];
}
