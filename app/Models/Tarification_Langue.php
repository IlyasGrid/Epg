<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tarification_Langue extends Model
{
    use HasFactory;

    public function Langue()
    {
        $this->belongsTo(Langue::class);
    }
}
