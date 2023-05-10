<?php

namespace Database\Seeders;

use App\Models\Diplome;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DiplomeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Diplome::create([
            'Name'=>'qualification',
            'Prerequis'=>'NIVEAU COLLÉGE',
            'Duree'=>' 2 ANS'
        ]);
        Diplome::create([
            'Name'=>'techncien',
            'Prerequis'=>'NIVEAU BAC',
            'Duree'=>' 2 ANS'
        ]);
        Diplome::create([
            'Name'=>'techncien specialise',
            'Prerequis'=>'BAC',
            'Duree'=>' 2 ANS'
        ]);
        Diplome::create([
            'Name'=>'techncien superieur',
            'Prerequis'=>'BAC',
            'Duree'=>' 2 ANS'
        ]);
        Diplome::create([
            'Name'=>'license professionnelle',
            'Prerequis'=>'BAC+2',
            'Duree'=>' 1 ANS'
        ]);
        Diplome::create([
            'Name'=>'master professionnelle',
            'Prerequis'=>'BAC+3',
            'Duree'=>' 2 ANS'
        ]);
    }
}
