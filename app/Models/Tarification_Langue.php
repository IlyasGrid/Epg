<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Tarification_Langue extends Model
{
    use HasFactory, SoftDeletes;
    public $timestamps = false;
    public function Langue()
    {
        $this->belongsTo(Langue::class);
    }
    protected $fillable = ['Type', 'Volume_Horraire', 'Temps', 'Price', 'langue_id'];
}
