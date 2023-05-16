<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Programe_Branche extends Model
{
    use HasFactory, SoftDeletes;
    public $timestamps = false;

    public function Branche_Diplome()
    {
        $this->belongsTo(Branche_Diplome::class);
    }
    protected $fillable = ['Num_module', 'Name_module', 'Annee',  'branche__diplomes_id'];
}
