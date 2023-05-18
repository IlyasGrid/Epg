<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Formation_Programme extends Model
{
    use HasFactory, SoftDeletes;

    public function Formation()
    {
        $this->belongsTo(Formation::class);
    }
    protected $fillable =['ModuleName','ModuleChapitre','formations_id'];
}
