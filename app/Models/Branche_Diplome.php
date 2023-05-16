<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Branche_Diplome extends Model
{
    use HasFactory,SoftDeletes;

    public $timestamps = false;
    public function Diplome()
    {
        $this->belongsTo(Diplome::class);
    }
    public function Programe_Branche()
    {
        $this->hasOne(Programe_Branche::class);
    }
    protected $fillable = ['Abreviation', 'Fullname', 'Motivation', 'Price_month', 'Price_year', 'Objectifs', 'Prerequis', 'Prespective_professionel', 'Piece_a_fournis', 'Diplome_id'];
}
