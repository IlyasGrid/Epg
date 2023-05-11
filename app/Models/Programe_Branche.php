<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Programe_Branche extends Model
{
    use HasFactory;
    public $timestamps = false;

    public function Branche_Diplome()
    {
        $this->belongsTo(Branche_Diplome::class);
    }
}
