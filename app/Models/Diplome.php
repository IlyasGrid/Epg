<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Diplome extends Model
{
    use HasFactory;
    
    public $timestamps = false;

    public function Branche_Diplome()
    {
        $this->hasMany(Branche_Diplome::class);
    }

}
