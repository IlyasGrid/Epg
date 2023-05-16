<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Diplome extends Model
{
    use HasFactory,SoftDeletes;

    public $timestamps = false;

    public function Branche_Diplome()
    {
        $this->hasMany(Branche_Diplome::class);
    }

    protected $fillable = [ 'Name', 'Prerequis', 'Duree'];
}
