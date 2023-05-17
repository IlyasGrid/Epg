<?php

namespace Database\Seeders;

use App\Models\FormationCategorie;
use App\Models\FormationSubCategorie;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
        FormationCategorie::create([
            'Name' => "technologies web",
        ]);
        FormationCategorie::create([
            'Name' => "développement logiciel",
        ]);
        FormationCategorie::create([
            'Name' => "système de gestion de base de données",
        ]);
        FormationCategorie::create([
            'Name' => "gestion de projet",
        ]);
        FormationCategorie::create([
            'Name' => "cybersécurité",
        ]);
        FormationCategorie::create([
            'Name' => "bureautique",
        ]);
        FormationCategorie::create([
            'Name' => "PAO, CAO, graphisme, multimédia",
        ]);
        FormationCategorie::create([
            'Name' => "reseaux informatiques",
        ]);
        FormationCategorie::create([
            'Name' => "virtualisation, cloud, devops",
        ]);
        FormationCategorie::create([
            'Name' => "systèmes d'exploitation",
        ]);


        //*******************************************************sub categories*****************************************************************// 


        //----------------------------------------     category 1 ---------------------------------------------------
        FormationSubCategorie::create([
            'Name' => 'développement front-end',
            'formation_categories_id' => 1
        ]);
        FormationSubCategorie::create([
            'Name' => 'développement back-end et php',
            'formation_categories_id' => 1
        ]);

        //----------------------------------------     category 2 ---------------------------------------------------

        FormationSubCategorie::create([
            'Name' => 'PYTHON, C, C++',
            'formation_categories_id' => 2
        ]);
        FormationSubCategorie::create([
            'Name' => 'APPLICATIONS MOBILES',
            'formation_categories_id' => 2
        ]);
        //----------------------------------------     category 3 ---------------------------------------------------

        FormationSubCategorie::create([
            'Name' => 'ORACLE, MYSQL, POSTGRESQL ET AUTRES SGBD',
            'formation_categories_id' => 3
        ]);
        //----------------------------------------     category 4 ---------------------------------------------------
        FormationSubCategorie::create([
            'Name' => 'GESTION DE PROJET INFORMATIQUE',
            'formation_categories_id' => 4
        ]);
        //----------------------------------------     category 5 ---------------------------------------------------
        FormationSubCategorie::create([
            'Name' => 'SYNTHÈSES ET RÉFÉRENTIELS ISO',
            'formation_categories_id' => 5
        ]);
        FormationSubCategorie::create([
            'Name' => 'CYBERSÉCURITÉ, MISE EN OEUVRE',
            'formation_categories_id' => 5
        ]);
        //----------------------------------------     category 6 --------------------------------------------------- 
        FormationSubCategorie::create([
            'Name' => 'POSTE DE TRAVAIL ET OFFICE',
            'formation_categories_id' => 6
        ]);
        FormationSubCategorie::create([
            'Name' => 'EXCEL, ACCESS',
            'formation_categories_id' => 6
        ]);
        //----------------------------------------     category 7 ---------------------------------------------------
        FormationSubCategorie::create([
            'Name' => 'CAO, ARCHITECTURE, BIM',
            'formation_categories_id' => 7
        ]);
        FormationSubCategorie::create([
            'Name' => 'IMAGE, VIDÉO, ANIMATION, RÉALITÉ VIRTUELLE',
            'formation_categories_id' => 7
        ]);
        FormationSubCategorie::create([
            'Name' => 'EDITION, PAO',
            'formation_categories_id' => 7
        ]);
        //----------------------------------------     category 8 ---------------------------------------------------
        FormationSubCategorie::create([
            'Name' => 'MISE EN OEUVRE DES RÉSEAUX',
            'formation_categories_id' => 8
        ]);
        //----------------------------------------     category 9 ---------------------------------------------------
        FormationSubCategorie::create([
            'Name' => 'VIRTUALISATION   ',
            'formation_categories_id' => 9
        ]);
        //----------------------------------------     category 1 ---------------------------------------------------0
        FormationSubCategorie::create([
            'Name' => 'LINUX',
            'formation_categories_id' => 10
        ]);
        FormationSubCategorie::create([
            'Name' => 'WINDOWS-SERVEURS',
            'formation_categories_id' => 10
        ]);

    }
}
