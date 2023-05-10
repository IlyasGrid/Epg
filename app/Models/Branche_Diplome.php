<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Branche_Diplome extends Model
{
    use HasFactory;
    
    public $timestamps = false;
    public function Diplome()
    {
        $this->belongsTo(Diplome::class);
    }
    public function Programe_Branche(){
        $this->hasOne(Programe_Branche::class);
    }
}
