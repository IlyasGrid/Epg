<?php

namespace Database\Seeders;

use App\Models\Branche_Diplome;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BrancheSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // qulification
        Branche_Diplome::create([
            'Abreviation' => 'IT',
            'Fullname' => 'informatique',
            'Motivation' => null,
            'Price_month' => 700,
            'Price_year' => 6000,
            'Objectifs' => 'cette formation vise à former, des opérateurs en informatique avec des connaissances transversales en système d\'exploitation, logiciels de bureautique, maintenance informatique, initiation en programmation et gestion.',
            'Prerequis' => 'Cette formation est ouverte aux titulaires de niveau collège.',
            'Prespective_professionel' => null,
            'Piece_a_fournis' => null,
            'Diplome_id' => 1,
        ]);
        Branche_Diplome::create([
            'Abreviation' => 'Gest-Etre',
            'Fullname' => 'gestion-entreprise',
            'Motivation' => null,
            'Price_month' => 700,
            'Price_year' => 6000,
            'Objectifs' => 'Ce diplôme vous offrira une formation polyvalente et pratique sur les divers volets de la gestion d’entreprise.',
            'Prerequis' => 'Cette formation est ouverte aux titulaires de niveau collège.',
            'Prespective_professionel' => null,
            'Piece_a_fournis' => null,
            'Diplome_id' => 1,
        ]);
        Branche_Diplome::create([
            'Abreviation' => 'Para',
            'Fullname' => 'paramedical',
            'Motivation' => null,
            'Price_month' => 700,
            'Price_year' => 6000,
            'Objectifs' => 'cette formation vise à former des qualifiants dans le domain paramedicale.',
            'Prerequis' => 'Cette formation est ouverte aux titulaires de niveau collège.',
            'Prespective_professionel' => null,
            'Piece_a_fournis' => null,
            'Diplome_id' => 1,
        ]);
        // technicien

        Branche_Diplome::create([
            'Abreviation' => 'TI',
            'Fullname' => 'Technicien Informatique',
            'Motivation' => null,
            'Price_month' => 800,
            'Price_year' => 7000,
            'Objectifs' => 'Le programme Informatique de gestion vise à former des personnes aptes à exercer la profession de programmeur-analyste dans le domaine de la gestion. Dans l’exercice de sa profession, le programmeur-analyste est confronté régulièrement à des situations nouvelles découlant de la nature des tâches, du type d’environnement informatique, de la culture et des pratiques des entreprises, etc. De ce fait, il doit démontrer des capacités d’adaptation, d’apprentissage et de résolution de problèmes. De plus, le travail d’analyse et de programmation requiert plus particulièrement l’esprit de logique, d’analyse et de synthèse. Il doit également faire preuve d’autonomie, de débrouillardise, de persévérance et d’une grande curiosité envers les développements technologiques. Il va sans dire que le modèle organisation du travail sous forme de projets, privilégié particulièrement en informatique, oblige le programmeur-analyste à maîtriser les habiletés liées à la communication, au travail d’équipe et aux relations interpersonnelles.',
            'Prerequis' => ' Avoir interrompu ses études pendant au moins deux sessions consécutives ou une année scolaire.
                &Avoir complété au moins une année d’études postsecondaires échelonnée sur une période d’un an ou plus',
            'Prespective_professionel' => ' Développeur Informatique',
            'Piece_a_fournis' => 'Copies CIN Légalisées &Copies d\'attestation du baccalaureat Légalisées &Extrait d\'Acte de Naissance &Photos &Enveloppe a4. &Enveloppes Timbrées. &Réglement Intérieur légalisée',
            'Diplome_id' => 2,
        ]);
        Branche_Diplome::create([
            'Abreviation' => 'TAC',
            'Fullname' => 'Technicien Aide Comptable',
            'Motivation' => null,
            'Price_month' => 800,
            'Price_year' => 7000,
            'Objectifs' => 'Le Programme d’aide comptable va à l\'essentiel des compétences à maîtriser. Il se concentre sur la comptabilité générale, les opérations courantes et opérations d’inventaires, les paies et le dossier social, les obligations fiscales réglementaires, l’analyse des résultats de l’entreprise.',
            'Prerequis' => ' Avoir interrompu ses études pendant au moins deux sessions consécutives ou une année scolaire.
                &Avoir complété au moins une année d’études postsecondaires échelonnée sur une période d’un an ou plus',
            'Prespective_professionel' => null,
            'Piece_a_fournis' => 'Copies CIN Légalisées &Copies d\'attestation du baccalaureat Légalisées &Extrait d\'Acte de Naissance &Photos &Enveloppe a4. &Enveloppes Timbrées. &Réglement Intérieur légalisée',
            'Diplome_id' => 2,
        ]);
        Branche_Diplome::create([
            'Abreviation' => 'TCCTP',
            'Fullname' => 'Technicien Chef de Chantier Travaux Publics',
            'Motivation' => null,
            'Price_month' => 800,
            'Price_year' => 7000,
            'Objectifs' => 'Le "Technicien Chef de Chantier TP" a pour mission d’encadrer une ou plusieurs équipes de 15 à 20 personnes, qui sont orchestrées par des chefs d’équipe, et disposant de quelques engins mécaniques (Bétonnières, monte-charge, etc.). Il est le responsable de la bonne marche de son chantier. Ce Technicien doit réaliser les ouvrages.',
            'Prerequis' => ' Avoir interrompu ses études pendant au moins deux sessions consécutives ou une année scolaire.
                &Avoir complété au moins une année d’études postsecondaires échelonnée sur une période d’un an ou plus',
            'Prespective_professionel' => null,
            'Piece_a_fournis' => 'Copies CIN Légalisées &Copies d\'attestation du baccalaureat Légalisées &Extrait d\'Acte de Naissance &Photos &Enveloppe a4. &Enveloppes Timbrées. &Réglement Intérieur légalisée',
            'Diplome_id' => 2,
        ]);
        Branche_Diplome::create([
            'Abreviation' => 'TC',
            'Fullname' => 'Technicien Commercial',
            'Motivation' => null,
            'Price_month' => 800,
            'Price_year' => 7000,
            'Objectifs' => 'Le programme de formation commerciale intègrent les nouveaux enjeux concernant le métier commercial afin de faciliter le déploiement des nouvelles approches du client permettant d’optimiser la performance commerciale en synchronisant l’action avec le contexte dans lequel évolue l’entreprise. Maîtriser les techniques de communication commerciale, atteindre une qualité relationnelle optimale et acquérir les méthodologies à chaque étape de l’acte de vente fait partie d’entraînement pratique lors de cette séquence de formation. Ainsi, chaque commercial s’approprie les techniques de communication verbale et non verbale pour gérer efficacement les situations sensibles, constituant la réalité de la négociation.',
            'Prerequis' => ' Avoir interrompu ses études pendant au moins deux sessions consécutives ou une année scolaire.
                &Avoir complété au moins une année d’études postsecondaires échelonnée sur une période d’un an ou plus',
            'Prespective_professionel' => null,
            'Piece_a_fournis' => 'Copies CIN Légalisées &Copies d\'attestation du baccalaureat Légalisées &Extrait d\'Acte de Naissance &Photos &Enveloppe a4. &Enveloppes Timbrées. &Réglement Intérieur légalisée',
            'Diplome_id' => 2,
        ]);
        Branche_Diplome::create([
            'Abreviation' => 'TDB',
            'Fullname' => 'Technicien Dessinateur de batiment',
            'Motivation' => null,
            'Price_month' => 800,
            'Price_year' => 7000,
            'Objectifs' => 'A l’issue de la formation, le lauréat de formation est capable de réaliser les opérations et les activités suivantes :
                <ul>
                    <li>Consulter des croquis et esquisses préliminaires</li>
                    <li>Identifier les principaux éléments à inclure dans un plan d\'implantation</li>
                    <li>Distinguer les matériaux employés en construction</li>
                    <li>Réaliser les dessins de présentation du projet</li>
                </ul>',
            'Prerequis' => ' Avoir interrompu ses études pendant au moins deux sessions consécutives ou une année scolaire.
                &Avoir complété au moins une année d’études postsecondaires échelonnée sur une période d’un an ou plus',
            'Prespective_professionel' => null,
            'Piece_a_fournis' => 'Copies CIN Légalisées &Copies d\'attestation du baccalaureat Légalisées &Extrait d\'Acte de Naissance &Photos &Enveloppe a4. &Enveloppes Timbrées. &Réglement Intérieur légalisée',
            'Diplome_id' => 2,
        ]);
        Branche_Diplome::create([
            'Abreviation' => 'TL',
            'Fullname' => 'Technicien Logistique',
            'Motivation' => null,
            'Price_month' => 800,
            'Price_year' => 7000,
            'Objectifs' => 'Le Technicien en Logistique est chargé des opérations de réception, de mise en stock, de préparation des commandes et d’expédition des marchandises. Il assure également le suivi du parc des engins de manutention et peut être amené à en conduire lui-même. Il coordonne, anime et régule le travail d’une ou de plusieurs équipes d’opérateurs en fonction de la charge de travail. Le Technicien en Logistique exerce son activité notamment dans les entrepôts dédiés ou chez des prestataires de services, les dépôts de stockage des entreprises de production ou sur des plateformes logistiques.',
            'Prerequis' => ' Avoir interrompu ses études pendant au moins deux sessions consécutives ou une année scolaire.
                &Avoir complété au moins une année d’études postsecondaires échelonnée sur une période d’un an ou plus',
            'Prespective_professionel' => null,
            'Piece_a_fournis' => 'Copies CIN Légalisées &Copies d\'attestation du baccalaureat Légalisées &Extrait d\'Acte de Naissance &Photos &Enveloppe a4. &Enveloppes Timbrées. &Réglement Intérieur légalisée',
            'Diplome_id' => 2,
        ]);
        Branche_Diplome::create([
            'Abreviation' => 'TRD',
            'Fullname' => 'Technicien Reception d \'hotel',
            'Motivation' => null,
            'Price_month' => 800,
            'Price_year' => 7000,
            'Objectifs' => 'Conçue sous forme modulaire, cette formation prépare aux diverses carrières dans plusieurs secteurs d’activités, principalement le tourisme, l’hôtellerie, les services (banques, assurances, commerce…).les lauréats de cette filière seront chargés des divertissement,(agence de voyage, unités hôtelières, palais de congrès ,aéroports, structures d’information et d’orientation des touristes). Ils seront aussi capables d’organiser l’accueil et la réception, l’enregistrement (check in) et (check out) et le transport des voyageurs...',
            'Prerequis' => ' Avoir interrompu ses études pendant au moins deux sessions consécutives ou une année scolaire.
                &Avoir complété au moins une année d’études postsecondaires échelonnée sur une période d’un an ou plus',
            'Prespective_professionel' => null,
            'Piece_a_fournis' => 'Copies CIN Légalisées &Copies d\'attestation du baccalaureat Légalisées &Extrait d\'Acte de Naissance &Photos &Enveloppe a4. &Enveloppes Timbrées. &Réglement Intérieur légalisée',
            'Diplome_id' => 2,
        ]);

        // technicien specialise

        Branche_Diplome::create([
            'Abreviation' => 'TSDI',
            'Fullname' => 'TECHNICIEN SPÉCIALISÉ EN DÉVELOPPEMENT INFORMATIQUE',
            'Motivation' => 'Les Techniciens Spécialisés en Développement Informatique ont pour fonction principale de contribuer au développement de systèmes de gestion afin de répondre aux besoins des entreprises. Ces personnes complètent les données de l\'analyse, développent, modifient et adaptent des applications en conformité avec la législation marocaine, les mettent à l\'essai, les documentent, les implantent et les intègrent, s\'il y a lieu.',
            'Price_month' => 800,
            'Price_year' => 7000,
            'Objectifs' => 'Conçue sous forme modulaire, cette formation prépare aux diverses carrières dans plusieurs secteurs d’activités, principalement le tourisme, l’hôtellerie, les services (banques, assurances, commerce…).les lauréats de cette filière seront chargés des divertissement,(agence de voyage, unités hôtelières, palais de congrès ,aéroports, structures d’information et d’orientation des touristes). Ils seront aussi capables d’organiser l’accueil et la réception, l’enregistrement (check in) et (check out) et le transport des voyageurs...',
            'Prerequis' => ' Avoir interrompu ses études pendant au moins deux sessions consécutives ou une année scolaire.
                &Avoir complété au moins une année d’études postsecondaires échelonnée sur une période d’un an ou plus',
            'Prespective_professionel' => "Développeur Informatique &Administrateur de bases de données",
            'Piece_a_fournis' => 'Copies CIN Légalisées &Copies d\'attestation du baccalaureat Légalisées &Extrait d\'Acte de Naissance &Photos &Enveloppe a4. &Enveloppes Timbrées. &Réglement Intérieur légalisée',
            'Diplome_id' => 3,
        ]);
        // TECHNICIEN SUPÉRIEUR

        Branche_Diplome::create([
            'Abreviation' => 'TSDI',
            'Fullname' => 'TECHNICIEN SUPÉRIEUR EN DÉVELOPPEMENT INFORMATIQUE',
            'Motivation' => 'Les buts de la formation en TSDI , sont définis à partir des buts généraux de la formation professionnelle en tenant compte, en particulier, de la situation de travail.',
            'Price_month' => 1200,
            'Price_year' => 11000,
            'Objectifs' => 'Avoir un diplôme Reconnu de BAC+2
            &Une insertion rapide dans marché de travail',
            'Prerequis' => ' Formation « tous publics » Candidat motivé par le domaine ; désirant se former ou consolider ses connaissances sur l’ensemble des compétences du métier; savoirs être professionnels : ponctualité, assiduité, autonomie, intérêt et motivation.',
            'Prespective_professionel' => "Développeur Informatique &Administrateur de bases de données",
            'Piece_a_fournis' => 'Copies CIN Légalisées &Copies d\'attestation du baccalaureat Légalisées &Extrait d\'Acte de Naissance &Photos &Enveloppe a4. &Enveloppes Timbrées. &Réglement Intérieur légalisée',
            'Diplome_id' => 4,
        ]);
        Branche_Diplome::create([
            'Abreviation' => 'TSDI',
            'Fullname' => 'TECHNICIEN SUPÉRIEUR INFOGRAPHIE',
            'Motivation' => null,
            'Price_month' => 1200,
            'Price_year' => 11000,
            'Objectifs' => 'Réaliser la maquette du produit
            &Traiter le contenu du produit &Réaliser la mise en page &Produire les films et les plaques d’impression.',
            'Prerequis' => 'Formation « tous publics » Candidat motivé par le domaine ; désirant se former ou consolider ses connaissances sur l’ensemble des compétences du métier; savoirs être professionnels : ponctualité, assiduité, autonomie, intérêt et motivation.',
            'Prespective_professionel' => "Développeur Informatique &Administrateur de bases de données",
            'Piece_a_fournis' => 'Copies CIN Légalisées &Copies d\'attestation du baccalaureat Légalisées &Extrait d\'Acte de Naissance &Photos &Enveloppe a4. &Enveloppes Timbrées. &Réglement Intérieur légalisée',
            'Diplome_id' => 4,
        ]);
        Branche_Diplome::create([
            'Abreviation' => 'TSRI',
            'Fullname' => 'TECHNICIEN SUPÉRIEUR EN RESEAU INFORMATIQUE',
            'Motivation' => 'A l’issue de la formation, le stagiaire sera autonome et en maîtrise de l’ensemble des méthodes, compétences techniques et technologie exigées par le référentiel de l’examen final',
            'Price_month' => 1200,
            'Price_year' => 11000,
            'Objectifs' => ' Avoir un diplôme Reconnu de BAC+2
            &Une insertion rapide dans des emplois administratifs polyvalents',
            'Prerequis' => 'Formation « tous publics » Candidat motivé par le domaine ; désirant se former ou consolider ses connaissances sur l’ensemble des compétences du métier; savoirs être professionnels : ponctualité, assiduité, autonomie, intérêt et motivation.',
            'Prespective_professionel' => null,
            'Piece_a_fournis' => 'Copies CIN Légalisées &Copies d\'attestation du baccalaureat Légalisées &Extrait d\'Acte de Naissance &Photos &Enveloppe a4. &Enveloppes Timbrées. &Réglement Intérieur légalisée',
            'Diplome_id' => 4,
        ]);
        Branche_Diplome::create([
            'Abreviation' => 'TSCT',
            'Fullname' => 'TECHNICIEN SUPÉRIEUR CONDUCTEUR DE TRAVAUX : TRAVAUX PUBLICS',
            'Motivation' => 'Les buts de la formation en TSDI , sont définis à partir des buts généraux de la formation professionnelle en tenant compte, en particulier, de la situation de travail.',
            'Price_month' => 0000,
            'Price_year' => 0000,
            'Objectifs' => 'Analyser les aspects techniques et administratifs d\'un dossier de marché
            &les aménagements techniques et financiers nécessaires',
            'Prerequis' => 'Formation « tous publics » Candidat motivé par le domaine ; désirant se former ou consolider ses connaissances sur l’ensemble des compétences du métier; savoirs être professionnels : ponctualité, assiduité, autonomie, intérêt et motivation.',
            'Prespective_professionel' => 'Développeur Informatique
            &Administrateur de bases de données',
            'Piece_a_fournis' => '',
            'Diplome_id' => 4,
        ]);
        Branche_Diplome::create([
            'Abreviation' => 'TSFC',
            'Fullname' => 'TECHNICIEN SUPÉRIEUR FINANCIER COMPTABLE',
            'Motivation' => 'Les buts de la formation en TSDI , sont définis à partir des buts généraux de la formation professionnelle en tenant compte, en particulier, de la situation de travail.',
            'Price_month' => 1200,
            'Price_year' => 11000,
            'Objectifs' => 'Destiné à former des techniciens Supérieurs capables d’appliquer les procédures de base en finance et comptabilité, à utiliser les systèmes d’information d’entreprises variées pour la proposition de solutions comptable et financière, S’intégrer harmonieusement au milieu de travail.',
            'Prerequis' => 'Formation « tous publics » Candidat motivé par le domaine ; désirant se former ou consolider ses connaissances sur l’ensemble des compétences du métier; savoirs être professionnels : ponctualité, assiduité, autonomie, intérêt et motivation.',
            'Prespective_professionel' => null,
            'Piece_a_fournis' => '',
            'Diplome_id' => 4,
        ]);

        Branche_Diplome::create([
            'Abreviation' => 'TSGE',
            'Fullname' => 'TECHNICIEN SUPÉRIEUR EN GESTION DES ENTREPRISES',
            'Motivation' => 'Les buts de la formation en TSGE , sont définis à partir des buts généraux de la formation professionnelle en tenant compte, en particulier, de la situation de travail.',
            'Price_month' => 1200,
            'Price_year' => 11000,
            'Objectifs' => 'A Destiné à former des techniciens Supérieur capables d’appliquer les procédures de base en gestion des entreprises, à utiliser les systèmes d’information d’entreprises variées pour la proposition de solutions managériale.',
            'Prerequis' => 'Formation « tous publics » Candidat motivé par le domaine ; désirant se former ou consolider ses connaissances sur l’ensemble des compétences du métier; savoirs être professionnels : ponctualité, assiduité, autonomie, intérêt et motivation.',
            'Prespective_professionel' => null,
            'Piece_a_fournis' => '',
            'Diplome_id' => 4,
        ]);
        Branche_Diplome::create([
            'Abreviation' => 'TSTH',
            'Fullname' => 'TECHNICIEN SUPÉRIEUR TOURISME ET HÔTELLERIE',
            'Motivation' => 'Le titulaire du DTS tourisme et hôtellerie remplit de multiples fonctions selon la structure dans laquelle il...',
            'Price_month' => 1200,
            'Price_year' => 11000,
            'Objectifs' => 'Le titulaire du DTS tourisme et hôtellerie remplit de multiples fonctions selon la structure dans laquelle il exerce. Il informe et conseille les clients français et étrangers, vend et assure le suivi commercial des prestations, accueille et accompagne des touristes, crée et assure la promotion de produits touristiques, collecte traite et diffuse des informations en relation avec le tourisme.',
            'Prerequis' => 'Formation « tous publics » Candidat motivé par le domaine ; désirant se former ou consolider ses connaissances sur l’ensemble des compétences du métier; savoirs être professionnels : ponctualité, assiduité, autonomie, intérêt et motivation.',
            'Prespective_professionel' => null,
            'Piece_a_fournis' => '',
            'Diplome_id' => 4,
        ]);
        Branche_Diplome::create([
            'Abreviation' => 'TSMAC',
            'Fullname' => 'TECHNICIEN SUPÉRIEUR MARKETING ET ACTION COMMERCIALE',
            'Motivation' => '',
            'Price_month' => 1200,
            'Price_year' => 11000,
            'Objectifs' => 'L’objectif est de former des techniciens supérieurs dans le domaine du Marketing et de la vente, capables d’être immédiatement opérationnels et évoluer rapidement vers des postes de responsabilités. Le Diplôme de Technicien Supérieur en Marketing et Action Commerciale a pour objet d’offrir des compétences demandées dans les emplois des services commerciaux et de communication des entreprises.
          ',
            'Prerequis' => 'Formation « tous publics » Candidat motivé par le domaine ; désirant se former ou consolider ses connaissances sur l’ensemble des compétences du métier; savoirs être professionnels : ponctualité, assiduité, autonomie, intérêt et motivation.',
            'Prespective_professionel' => null,
            'Piece_a_fournis' => '',
            'Diplome_id' => 4,
        ]);
        Branche_Diplome::create([
            'Abreviation' => 'TSI',
            'Fullname' => 'TECHNICIEN SUPÉRIEUR INFORMATION:OPTION - JOURNALISME',
            'Motivation' => 'La formation prépare les futurs professionnels de l’information aptes à exercer dans tous les types de médias...',
            'Price_month' => 1200,
            'Price_year' => 11000,
            'Objectifs' => 'La formation prépare les futurs professionnels de l’information aptes à exercer dans tous les types de médias ( presse, radio, télévision) à des postes liés à la captation , la rédaction ou la réalisation des productions',
            'Prerequis' => 'Formation « tous publics » Candidat motivé par le domaine ; désirant se former ou consolider ses connaissances sur l’ensemble des compétences du métier; savoirs être professionnels : ponctualité, assiduité, autonomie, intérêt et motivation.',
            'Prespective_professionel' => null,
            'Piece_a_fournis' => '',
            'Diplome_id' => 4,
        ]);
        Branche_Diplome::create([
            'Abreviation' => 'TSTL',
            'Fullname' => 'TECHNICIEN SUPÉRIEUR TRANSPORT LOGISTIQUE',
            'Motivation' => 'Destiné à former des techniciens Supérieurs capables d’appliquer les procédures de base en finance et comptabilité, à utiliser les systèmes d’information d’entreprises.',
            'Price_month' => 1200,
            'Price_year' => 11000,
            'Objectifs' => 'S’intégrer harmonieusement au milieu de travail.
            &Destiné à former des techniciens Supérieurs capables d’appliquer les procédures de base en finance et comptabilité, à utiliser les systèmes d’information d’entreprises variées pour la proposition de solutions comptable et financière.',
            'Prerequis' => 'Formation « tous publics » Candidat motivé par le domaine ; désirant se former ou consolider ses connaissances sur l’ensemble des compétences du métier; savoirs être professionnels : ponctualité, assiduité, autonomie, intérêt et motivation.',
            'Prespective_professionel' => null,
            'Piece_a_fournis' => '',
            'Diplome_id' => 4,
        ]);
        Branche_Diplome::create([
            'Abreviation' => 'TSRH',
            'Fullname' => 'TECHNICIEN SUPÉRIEUR RESSOURCES HUMAINES',
            'Motivation' => 'S’intégrer harmonieusement au milieu de travail.
            ✦ Destiné à former des techniciens Supérieurs capables d’appliquer les procédures de base en finance et comptabilité, à utiliser les systèmes d’information d’entreprises variées pour la proposition de solutions comptable et financière.',
            'Price_month' => 1200,
            'Price_year' => 11000,
            'Objectifs' => 'Les métiers des ressources humaines recouvrent des fonctions transversales qui concernent l’ensemble des domaines d’une entreprise ou d’une administration. Depuis la formation interne du personnel jusqu’à la gestion de carrière, en passant par l’évaluation des performances, nombreuses sont les missions rattachées à cette activité',
            'Prerequis' => 'Formation « tous publics » Candidat motivé par le domaine ; désirant se former ou consolider ses connaissances sur l’ensemble des compétences du métier; savoirs être professionnels : ponctualité, assiduité, autonomie, intérêt et motivation.',
            'Prespective_professionel' => null,
            'Piece_a_fournis' => '',
            'Diplome_id' => 4,
        ]);

        // licence professionnelle
        Branche_Diplome::create([
            'Abreviation' => 'LPMIAGE',
            'Fullname' => 'LICENCE PROFESSIONNELLE | MÉTHODES INFORMATIQUES APPLIQUÉES A LA GESTION DES ENTREPRISES',
            'Motivation' => 'La LPMIAGE est née d\'un besoin fort exprimé par les entreprises, en effet, ce parcours de formation vise à préparer des informaticiens de gestion, capables de concevoir et de mettre en œuvre des systèmes informatiques, notamment dans le domaine de la gestion en utilisant les outils les plus adaptés de traitement automatisé de l’information, ainsi d’apporte donc à ces futurs spécialistes une double compétence : en informatique appliquée et en gestion.',
            'Price_month' => 1300,
            'Price_year' => 12000,
            'Objectifs' => 'S’adapter aux nouvelles problématiques des systèmes d’information dans les entreprises, ainsi qu’aux exigences d’une bonne gestion de son parcours personnel et professionnel.
            &Modéliser le système organisationnel d\'une entreprise autour d\'un système d\'information autorisant la coopération, l\'échange, le transfert, etc...
            &Disposer de compétences, en informatique et en gestion, proches de la réalité du monde professionnel.
            ',
            'Prerequis' => 'Ce cursus est ouvert aux diplômés de niveau BAC +2 dans une spécialité informatique ou équivalente.',
            'Prespective_professionel' => null,
            'Piece_a_fournis' => '',
            'Diplome_id' => 5,
        ]);
        Branche_Diplome::create([
            'Abreviation' => 'LPISRS',
            'Fullname' => 'LICENCE PROFESSIONNELLE | MÉTIERS DES RÉSEAUX INFORMATIQUES ET TÉLÉCOMMUNICATIONS PARCOURS RÉSEAUX ET SÉCURITÉ',
            'Motivation' => 'La Licence Professionnelle en Ingénierie Systèmes, Réseaux et Sécurité (LPISRS) vise la formation de techniciens hautement qualifiés dans le secteur des systèmes et réseaux et dont la mission principale est l’administration des systèmes et des réseaux informatiques et la sécurité de l\'environnement du système d\'information.',
            'Price_month' => 1300,
            'Price_year' => 12000,
            'Objectifs' => 'Les métiers visés sont ceux de cadres techniques ayant des capacités : De maîtrise de grandes structures multi réseaux, notamment grâce à une bonne connaissance des problèmes d’interconnexion et de gestion de réseaux, D’analyse des aspects sécurité d’un réseau et de mise en place de solutions de sécurisation de l’utilisation du réseau, De maîtrise des aspects système et virtualisation liés aux applications réseau, De participer à la réalisation des fonctions de communication des applications informatiques en réseau',
            'Prerequis' => 'Bac+2 et satisfaisant aux critères d’admission précisés dans le descriptif de la formation (DUT, BTS, DTS …) Bac+1, justifiant d\'au moins de deux années d\'expérience professionnelle et satisfaisant aux critères d’admission précisés dans le descriptif de la formation.',
            'Prespective_professionel' => null,
            'Piece_a_fournis' => '',
            'Diplome_id' => 5,
        ]);
        Branche_Diplome::create([
            'Abreviation' => 'LPABDTW',
            'Fullname' => 'LICENCE PROFESSIONNELLE ADMINISTRATION DE BASE DE DONNÉE & TECHNOLOGIES WEB',
            'Motivation' => 'L’objectif de cette licence professionnelle est la formation de développeurs spécialistes des nouvelles technologies de construction d’applications mobiles...',
            'Price_month' => 1300,
            'Price_year' => 12000,
            'Objectifs' => 'L’objectif de cette licence professionnelle est la formation de développeurs spécialistes des nouvelles technologies de construction d’applications mobiles. Les compétences développées s’articuleront autour de : Génie logiciel : programmation objet, qualité logicielle, gestion de version, gestion de configuration, interfaces hommes / machines et ergonomie. Développement d’applications pour mobile : développement d’applications Web pour terminaux mobiles. Développement d’applications pour terminaux nomades à l’aide de Java sur la plate-forme Google Android. Administration des bases de données : architecture du Système de Gestion des Bases de Données (SGBD) et les techniques d’administration. Sauvegardes / restaurations et tuning. Stratégies de sauvegarde en réponse aux situations de crise. Amélioration des performances des bases.',
            'Prerequis' => 'Bac+2 et satisfaisant aux critères d’admission précisés dans le descriptif de la formation (DUT, BTS, DTS …) Bac+1, justifiant d\'au moins de deux années d\'expérience professionnelle et satisfaisant aux critères d’admission précisés dans le descriptif de la formation.',
            'Prespective_professionel' => null,
            'Piece_a_fournis' => '',
            'Diplome_id' => 5,
        ]);
        Branche_Diplome::create([
            'Abreviation' => 'LPDGCV',
            'Fullname' => 'LICENCE PROFESSIONNELLE | DESIGN GRAPHIQUE & COMMUNICATION VISUELLE',
            'Motivation' => 'Ce programme a pour objectif particulier de proposer une formation à la fois fondamentale et pratique dans le domaine de la communication visuelle...',
            'Price_month' => 1300,
            'Price_year' => 12000,
            'Objectifs' => 'Ce programme a pour objectif particulier de proposer une formation à la fois fondamentale et pratique dans le domaine de la communication visuelle et du design graphique, axée sur la recherche théorique, l’analyse, la conceptualisation et la réalisation de projets. Il vise à développer chez les étudiants les aptitudes nécessaires à produire de l’information destinée à devenir un message publicitaire, et capable de la mettre en œuvre à travers un processus conceptuel, de méthodologie et de fabrication de produits. L’étudiant sera amené grâce aux outils graphiques hybrides et numériques à matérialiser différents documents de projets.',
            'Prerequis' => 'Bac+2 et satisfaisant aux critères d’admission précisés dans le descriptif de la formation (DUT, BTS, DTS …) Bac+1, justifiant d\'au moins de deux années d\'expérience professionnelle et satisfaisant aux critères d’admission précisés dans le descriptif de la formation.',
            'Prespective_professionel' => null,
            'Piece_a_fournis' => '',
            'Diplome_id' => 5,
        ]);
//  jbedbj
        Branche_Diplome::create([
            'Abreviation' => '',
            'Fullname' => '',
            'Motivation' => '',
            'Price_month' => 1300,
            'Price_year' => 12000,
            'Objectifs' => '',
            'Prerequis' => '',
            'Prespective_professionel' => null,
            'Piece_a_fournis' => '',
            'Diplome_id' => 5,
        ]);
        //......

        Branche_Diplome::create([
            'Abreviation' => 'TSDI',
            'Fullname' => 'TECHNICIEN SUPÉRIEUR INFOGRAPHIE',
            'Motivation' => null,
            'Price_month' => 1200,
            'Price_year' => 11000,
            'Objectifs' => 'Réaliser la maquette du produit
            &Traiter le contenu du produit &Réaliser la mise en page &Produire les films et les plaques d’impression.',
            'Prerequis' => 'Formation « tous publics » Candidat motivé par le domaine ; désirant se former ou consolider ses connaissances sur l’ensemble des compétences du métier; savoirs être professionnels : ponctualité, assiduité, autonomie, intérêt et motivation.',
            'Prespective_professionel' => "Développeur Informatique &Administrateur de bases de données",
            'Piece_a_fournis' => 'Copies CIN Légalisées &Copies d\'attestation du baccalaureat Légalisées &Extrait d\'Acte de Naissance &Photos &Enveloppe a4. &Enveloppes Timbrées. &Réglement Intérieur légalisée',
            'Diplome_id' => 5,
        ]);

        Branche_Diplome::create([
            'Abreviation' => 'TSDI',
            'Fullname' => 'TECHNICIEN SUPÉRIEUR INFOGRAPHIE',
            'Motivation' => null,
            'Price_month' => 1200,
            'Price_year' => 11000,
            'Objectifs' => 'Réaliser la maquette du produit
            &Traiter le contenu du produit &Réaliser la mise en page &Produire les films et les plaques d’impression.',
            'Prerequis' => 'Formation « tous publics » Candidat motivé par le domaine ; désirant se former ou consolider ses connaissances sur l’ensemble des compétences du métier; savoirs être professionnels : ponctualité, assiduité, autonomie, intérêt et motivation.',
            'Prespective_professionel' => "Développeur Informatique &Administrateur de bases de données",
            'Piece_a_fournis' => 'Copies CIN Légalisées &Copies d\'attestation du baccalaureat Légalisées &Extrait d\'Acte de Naissance &Photos &Enveloppe a4. &Enveloppes Timbrées. &Réglement Intérieur légalisée',
            'Diplome_id' => 6,
        ]);
    }
}
