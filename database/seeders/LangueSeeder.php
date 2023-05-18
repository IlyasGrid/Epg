<?php

namespace Database\Seeders;

use App\Models\Langue;
use App\Models\Niveau_Langue;
use App\Models\Tarification_Langue;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LangueSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Langue::create([
            'Name' => "français",
            'Subtitle' => 'la langue Française - اللغـــة الفرنسيـــة',
            'Motivation' => ' le français est
            parmis les langue la plus parlée au monde , et pour les francophones tel que
            les marocain et les africains, la langue française est indisponsable..',
            'Raisons' => 'une langue parlée dans le monde entier;
            une langue pour trouver un emploi;
            la langue de la culture;
            une langue pour voyager;
            une langue pour étudier dans les universités françaises;
            l’autre langue des relations internationales;
            une langue pour s’ouvrir sur le monde;
            la langue de l’amour
            et de l’esprit',
            'Piece_frais' => null,
            'Conditions_Etudes' => null,
            'Conditions_Formations' => null,
            'Conditions_Cherche_Emploi' => null,
        ]);
        Langue::create([
            'Name' => "anglais",
            'Subtitle' => 'la langue Anglaise - اللغــــة الإنجليزيـــة',
            'Motivation' => ' la langue anglaise est parmis les 3 langue les plus parlée à travers le monde, l’anglais est très répandu. Apprendre l\'anglais peut être une envie personelle ou un besoin pour les étudient et les personnes qui cherchent du travail.mais Il est certain que personne ne regrette jamais d\'avoir appris cette langue très riche.',
            'Raisons' => ' est la langue de la communication internationale;
            donne accès à davantage de contenus sur Internet et de divertissements;
            rend le voyage plus accessible;
            peut vous rendre « plus intelligent',
            'Piece_frais' => null,
            'Conditions_Etudes' => null,
            'Conditions_Formations' => null,
            'Conditions_Cherche_Emploi' => null,
        ]);
        Langue::create([
            'Name' => "allemand",
            'Subtitle' => 'la langue Allemand - اللغـــة الألمانيــــة',
            'Motivation' => ' Il y a
            de nombreuses raisons pour apprendre l\'allemand , et nous voulons vous
            présenter les meilleures. Nous expliquons également comment apprendre
            l’allemand avec quelques astuces simples et pratiques. Apprendre l\'allemand
            peut être une envie personelle mais souvent les gens qui étudient
            l\'allemand c\'est pour le travail. Il est certain que personne ne regrette
            jamais d\'avoir appris cette langue très riche.',
            'Raisons' => null,
            'Piece_frais' => 'Copies CIN ;
            2 Photos ;
            50Dh
            pour chaque livre ;
            100Dh frais de copie',
            'Conditions_Etudes' => 'Baccalauréat ou plus ;
            Diplôme
            d\'allemand B1 ;
            Inscription dans une université ou une école supérieure en
            Allemagne ;
            Un document prouvant la capacité de l\'étudiant à financer ses
            études, avec:
            <ul>
                <li>Garantie financière d\'une personne résidant en Allemagne</li>
                <li>
                    Un compte bancaire fermé ouvert dans une banque allemande pour 10
                    236 euros
                </li>
            </ul>
            ',
            'Conditions_Formations' => 'Baccalauréat ou diplôme de formation professionnelle ;
            Diplômed \'allemand B1 ;
            Un contrat de professionnalisation, que l\'étudiant obtient après avoir contacté les entreprises allemandes',
            'Conditions_Cherche_Emploi' => 'Diplômes académiques (licence ou Master) ;
            Qualifications professionnelles (Diplôme de formation professionnelle) ;
            Expériences professionnelles ;
            Compte bancaire fermé ;
            Diplôme d\'allemand B1 ;
            Adresse initiale (réservation d\'hôtel)',
        ]);
        // ==============================Tarification============================================

        // 1
        Tarification_Langue::create([
            'Type' => 'COURS NORMALE',
            'Volume_Horraire' => '1 ',
            'Temps' => '2h',
            'Price' => 200,
            'langue_id' => 1
        ]);
        Tarification_Langue::create([
            'Type' => 'COURS DU SOIR',
            'Volume_Horraire' => '1 ',
            'Temps' => '2h',
            'Price' => 200,
            'langue_id' => 1
        ]);
        Tarification_Langue::create([
            'Type' => 'COURS ACCÉLÉRÉ',
            'Volume_Horraire' => 3,
            'Temps' => '2h',
            'Price' => 500,
            'langue_id' => 1
        ]);
        Tarification_Langue::create([
            'Type' => 'COURS DU SOIR ACCÉLÉRÉ',
            'Volume_Horraire' => 3,
            'Temps' => '2h',
            'Price' => 500,
            'langue_id' => 1
        ]);

        // 2
        Tarification_Langue::create([
            'Type' => 'COURS NORMALE',
            'Volume_Horraire' => '1 ',
            'Temps' => '2h',
            'Price' => 200,
            'langue_id' => 2
        ]);
        Tarification_Langue::create([
            'Type' => 'COURS DU SOIR',
            'Volume_Horraire' => '1 ',
            'Temps' => '2h',
            'Price' => 200,
            'langue_id' => 2
        ]);
        Tarification_Langue::create([
            'Type' => 'COURS ACCÉLÉRÉ',
            'Volume_Horraire' => 3,
            'Temps' => '2h',
            'Price' => 500,
            'langue_id' => 2
        ]);
        Tarification_Langue::create([
            'Type' => 'COURS DU SOIR ACCÉLÉRÉ',
            'Volume_Horraire' => 3,
            'Temps' => '2h',
            'Price' => 500,
            'langue_id' => 2
        ]);

        // 3
        Tarification_Langue::create([
            'Type' => 'COURS NORMALE',
            'Volume_Horraire' => '2 ',
            'Temps' => '2h',
            'Price' => 300,
            'langue_id' => 3
        ]);
        Tarification_Langue::create([
            'Type' => 'COURS DU SOIR',
            'Volume_Horraire' => '3 ',
            'Temps' => '2h',
            'Price' => 500,
            'langue_id' => 3
        ]);
        Tarification_Langue::create([
            'Type' => 'COURS ACCÉLÉRÉ',
            'Volume_Horraire' => 5,
            'Temps' => '1h30',
            'Price' => 600,
            'langue_id' => 3
        ]);
        Tarification_Langue::create([
            'Type' => 'COURS DU SOIR ACCÉLÉRÉ',
            'Volume_Horraire' => 10,
            'Temps' => '1h30',
            'Price' => 1200,
            'langue_id' => 3
        ]);


        // ==============================Niveau_Langue============================================
        //1
        Niveau_Langue::create([
            'Niveau' => 'A1',
            'Duree_Cours_Normal' => 6,
            'Duree_Cours_Soir' => 4,
            'Duree_Cours_Accelerer' => 3,
            'Duree_Cours_Rapide' => 2,
            'langue_id' => 3
        ]);
        //  2
        Niveau_Langue::create([
            'Niveau' => 'A2',
            'Duree_Cours_Normal' => 12,
            'Duree_Cours_Soir' => 8,
            'Duree_Cours_Accelerer' => 6,
            'Duree_Cours_Rapide' => 2,
            'langue_id' => 3
        ]);
        // 3
        Niveau_Langue::create([
            'Niveau' => 'B1',
            'Duree_Cours_Normal' => 19,
            'Duree_Cours_Soir' => 13,
            'Duree_Cours_Accelerer' => 10,
            'Duree_Cours_Rapide' => 5,
            'langue_id' => 3
        ]);
        // 4
        Niveau_Langue::create([
            'Niveau' => 'B2',
            'Duree_Cours_Normal' => 27,
            'Duree_Cours_Soir' => 18,
            'Duree_Cours_Accelerer' => 15,
            'Duree_Cours_Rapide' => 7,
            'langue_id' => 3
        ]);
    }
}
