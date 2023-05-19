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
            'img'=>'diplomes/qualification.jpg',
            'Duree'=>' 2 ANS'
        ]);
        Diplome::create([
            'Name'=>'technicien',
            'Prerequis'=>'NIVEAU BAC',
            'img'=>'diplomes/technicien.jpg',
            'Duree'=>' 2 ANS'
        ]);
        Diplome::create([
            'Name'=>'technicien spécialisé',
            'Prerequis'=>'BAC',
            'img'=>'diplomes/technicien spécialisé.jpg',
            'Duree'=>' 2 ANS'
        ]);
        Diplome::create([
            'Name'=>'technicien supérieur',
            'Prerequis'=>'BAC',
            'img'=>'diplomes/technicien supérieur.jpg',
            'Duree'=>' 2 ANS'
        ]);
        Diplome::create([
            'Name'=>'licence professionnelle',
            'Prerequis'=>'BAC+2',
            'img'=>'diplomes/licence professionnelle.jpg',
            'Duree'=>' 1 ANS'
        ]);
        Diplome::create([
            'Name'=>'master professionnel',
            'Prerequis'=>'BAC+3',
            'img'=>'diplomes/master professionnel.jpg',
            'Duree'=>' 2 ANS'
        ]);
    }
}
