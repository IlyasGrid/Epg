<?php

namespace Database\Seeders;

use App\Models\Formation;
use App\Models\Formation_Programme;
use App\Models\Formation_Tarification;
use App\Models\FormationCategorie;
use App\Models\FormationSubCategorie;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FormationSeeder extends Seeder
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


        //----------------------------------------sub-category f1
        FormationSubCategorie::create([
            'Name' => 'développement front-end',
            'formation_categories_id' => 1
        ]);
        FormationSubCategorie::create([
            'Name' => 'développement back-end et php',
            'formation_categories_id' => 1
        ]);

        //----------------------------------------sub-category f2

        FormationSubCategorie::create([
            'Name' => 'PYTHON, C, C++',
            'formation_categories_id' => 2
        ]);
        FormationSubCategorie::create([
            'Name' => 'APPLICATIONS MOBILES',
            'formation_categories_id' => 2
        ]);
        //----------------------------------------sub-category f3

        FormationSubCategorie::create([
            'Name' => 'ORACLE, MYSQL, POSTGRESQL ET AUTRES SGBD',
            'formation_categories_id' => 3
        ]);
        //----------------------------------------sub-category f4
        FormationSubCategorie::create([
            'Name' => 'GESTION DE PROJET INFORMATIQUE',
            'formation_categories_id' => 4
        ]);
        //----------------------------------------sub-category f5
        FormationSubCategorie::create([
            'Name' => 'SYNTHÈSES ET RÉFÉRENTIELS ISO',
            'formation_categories_id' => 5
        ]);
        FormationSubCategorie::create([
            'Name' => 'CYBERSÉCURITÉ, MISE EN OEUVRE',
            'formation_categories_id' => 5
        ]);
        //----------------------------------------sub-category f6 
        FormationSubCategorie::create([
            'Name' => 'POSTE DE TRAVAIL ET OFFICE',
            'formation_categories_id' => 6
        ]);
        FormationSubCategorie::create([
            'Name' => 'EXCEL, ACCESS',
            'formation_categories_id' => 6
        ]);
        //----------------------------------------sub-category f7
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
        //----------------------------------------sub-category f8
        FormationSubCategorie::create([
            'Name' => 'MISE EN OEUVRE DES RÉSEAUX',
            'formation_categories_id' => 8
        ]);
        //----------------------------------------sub-category f9
        FormationSubCategorie::create([
            'Name' => 'VIRTUALISATION   ',
            'formation_categories_id' => 9
        ]);
        //----------------------------------------sub-category f10
        FormationSubCategorie::create([
            'Name' => 'LINUX',
            'formation_categories_id' => 10
        ]);
        FormationSubCategorie::create([
            'Name' => 'WINDOWS-SERVEURS',
            'formation_categories_id' => 10
        ]);








        //*******************************************************  formations  *****************************************************************// 






        //----------------------------------------sub  1 f1
        Formation::create([
            'Name' => 'LES TECHNOLOGIES DU WEB',
            'MotivaionName' => 'SYNTHÈSE',
            'MotivaionBody' => 'Vous découvrirez d\'une manière simple et concrète les infrastructures et les technologies Web, les standards et les outils disponibles pour développer des applications efficaces et sécurisées. Vous comprendrez l\'impact de l\'introduction des nouvelles technologies telles que la mobilité ou le commerce électronique.',
            'objectifs' => 'Comprendre les concepts des technologies du Web ;Connaître les infrastructures et les services de base d\'Internet ;Découvrir les nouvelles technologies côté client et côté serveur ;Connaître les nouvelles architectures et leur sécurité',
            'tp' => null,
            'formation_sub_categories_id' => 1
        ]);
        Formation_Tarification::create([
            'Name' => 'FORMATION ACCÉLÉRÉE',
            'Price' => 3000,
            'Type' => 'INDIVIDUEL',
            'Volume_Horraire' => 24,
            'Duree_formation' => null,
            'Debut_formation' => 'DANS UN DÉLAIS DE 24 H APRÉS LA VALIDATION DE VOTRE INSCRIPTION',
            'Deroulement' => null,
            'Horraire' => 'FLEXIBLE SELON VOTRE DISPONIBILITÉ ET LA DISPONIBILITÉ DE L\'ENSEIGNANT',
            'Dernier_Delais_Inscription' => null,
            'repartition_heures' => 'VOUS POUVEZ TERMINER DANS UN DÉLAIS DE 3 JOURS OU BIEN RÉPARTIR VOTRE HEURES SELON VOTRE RYTHME, VOTRE ENGAGEMENT',
            'formations_id' => 1
        ]);
        Formation_Tarification::create([
            'Name' => 'FORMATION CONTINUE',
            'Price' => 1000,
            'Type' => 'INDIVIDUEL',
            'Volume_Horraire' => 24,
            'Duree_formation' => '3 Mois',
            'Debut_formation' => 'DANS UN DÉLAIS DE 24 H APRÉS LA VALIDATION DE VOTRE INSCRIPTION',
            'Deroulement' => 'UNE SÉANCE DE 2H PAR SEMAINE',
            'Horraire' => 'À DÉTERMINER APRÈS LA FIN DE VOTRE INSCRIPTION',
            'Dernier_Delais_Inscription' => null,
            'repartition_heures' => null,
            'formations_id' => 1
        ]);
        Formation_Tarification::create([
            'Name' => 'FORMATION CONTINUE',
            'Price' => 400,
            'Type' => 'EN GROUPE',
            'Volume_Horraire' => 24,
            'Duree_formation' => null,
            'Debut_formation' => 'LE 01/06/2023',
            'Deroulement' => 'UNE SÉANCE DE 2H PAR SEMAINE',
            'Horraire' => 'À DÉTERMINER APRÈS LA FIN DE VOTRE INSCRIPTION POUR S\'ADAPTER AUX EMPLOIS DE TEMPS DES INSCRITS',
            'Dernier_Delais_Inscription' => 'LE 25/05/2023',
            'repartition_heures' => null,
            'formations_id' => 1
        ]);
        Formation_Tarification::create([
            'Name' => 'FORMATION fghjk',
            'Price' => 3000,
            'Type' => 'INDIVIDUEL',
            'Volume_Horraire' => 24,
            'Duree_formation' => null,
            'Debut_formation' => 'DANS UN DÉLAIS DE 24 H APRÉS LA VALIDATION DE VOTRE INSCRIPTION',
            'Deroulement' => null,
            'Horraire' => 'FLEXIBLE SELON VOTRE DISPONIBILITÉ ET LA DISPONIBILITÉ DE L\'ENSEIGNANT',
            'Dernier_Delais_Inscription' => null,
            'repartition_heures' => 'VOUS POUVEZ TERMINER DANS UN DÉLAIS DE 3 JOURS OU BIEN RÉPARTIR VOTRE HEURES SELON VOTRE RYTHME, VOTRE ENGAGEMENT',
            'formations_id' => 1
        ]);



        Formation::create([
            'Name' => 'XML & JSON',
            'MotivaionName' => 'SYNTHÈSE',
            'MotivaionBody' => 'Standards incontournables dans les échanges de données textuelles sur le Web, XML et JSON ont pris une place majeure dans les applications Web, les Systèmes d\'Information, l\'intégration de données et d\'applications. De son côté XML, à la base de nombreux autres langages, s\'est entouré d\'une multitude d\'outils pour la définition et la manipulation de données.',
            'objectifs' => 'Lire et comprendre des documents XML et JSON ;
            Modéliser et définir des données en XML et JSON;
            Choisir les outils adaptés aux besoins de votre application;
            Comprendre la place de XML et de JSON dans les architectures Web;',
            'tp' => null,
            'formation_sub_categories_id' => 1
        ]);
        Formation_Tarification::create([
            'Name' => 'FORMATION ACCÉLÉRÉE',
            'Price' => 3000,
            'Type' => 'INDIVIDUEL',
            'Volume_Horraire' => 24,
            'Duree_formation' => null,
            'Debut_formation' => 'DANS UN DÉLAIS DE 24 H APRÉS LA VALIDATION DE VOTRE INSCRIPTION',
            'Deroulement' => null,
            'Horraire' => 'FLEXIBLE SELON VOTRE DISPONIBILITÉ ET LA DISPONIBILITÉ DE L\'ENSEIGNANT',
            'Dernier_Delais_Inscription' => null,
            'repartition_heures' => 'VOUS POUVEZ TERMINER DANS UN DÉLAIS DE 3 JOURS OU BIEN RÉPARTIR VOTRE HEURES SELON VOTRE RYTHME, VOTRE ENGAGEMENT',
            'formations_id' => 2
        ]);
        Formation_Tarification::create([
            'Name' => 'FORMATION CONTINUE',
            'Price' => 1000,
            'Type' => 'INDIVIDUEL',
            'Volume_Horraire' => 24,
            'Duree_formation' => '3 Mois',
            'Debut_formation' => 'DANS UN DÉLAIS DE 24 H APRÉS LA VALIDATION DE VOTRE INSCRIPTION',
            'Deroulement' => 'UNE SÉANCE DE 2H PAR SEMAINE',
            'Horraire' => 'À DÉTERMINER APRÈS LA FIN DE VOTRE INSCRIPTION',
            'Dernier_Delais_Inscription' => null,
            'repartition_heures' => null,
            'formations_id' => 2
        ]);
        Formation_Tarification::create([
            'Name' => 'FORMATION CONTINUE',
            'Price' => 400,
            'Type' => 'EN GROUPE',
            'Volume_Horraire' => 24,
            'Duree_formation' => null,
            'Debut_formation' => 'LE 01/06/2023',
            'Deroulement' => 'UNE SÉANCE DE 2H PAR SEMAINE',
            'Horraire' => 'À DÉTERMINER APRÈS LA FIN DE VOTRE INSCRIPTION POUR S\'ADAPTER AUX EMPLOIS DE TEMPS DES INSCRITS',
            'Dernier_Delais_Inscription' => 'LE 25/05/2023',
            'repartition_heures' => null,
            'formations_id' => 2
        ]);
        Formation_Tarification::create([
            'Name' => 'FORMATION fghjk',
            'Price' => 3000,
            'Type' => 'INDIVIDUEL',
            'Volume_Horraire' => 24,
            'Duree_formation' => null,
            'Debut_formation' => 'DANS UN DÉLAIS DE 24 H APRÉS LA VALIDATION DE VOTRE INSCRIPTION',
            'Deroulement' => null,
            'Horraire' => 'FLEXIBLE SELON VOTRE DISPONIBILITÉ ET LA DISPONIBILITÉ DE L\'ENSEIGNANT',
            'Dernier_Delais_Inscription' => null,
            'repartition_heures' => 'VOUS POUVEZ TERMINER DANS UN DÉLAIS DE 3 JOURS OU BIEN RÉPARTIR VOTRE HEURES SELON VOTRE RYTHME, VOTRE ENGAGEMENT',
            'formations_id' => 2
        ]);



        Formation::create([
            'Name' => 'DÉVELOPPER UN SITE WEB',
            'MotivaionName' => 'SYNTHÈSE PRATIQUE',
            'MotivaionBody' => 'Ce cours, très pratique, vous présentera l\'ensemble des technologies Internet. Il vous expliquera le fonctionnement des services Web et des différents langages associés (HTML, CSS, JavaScript...) ainsi que les techniques graphiques, l\'interrogation des bases de données et l\'administration. Les exercices vous permettront d\'appréhender d\'une manière très concrète toutes les phases de la réalisation d\'un site Web.',
            'objectifs' => 'Comprendre les fondamentaux du Web;
            Maîtriser l\'environnement technique d\'un site Web;
            Réaliser un site Web ergonomique, accessible et bien référencé;
            Accéder aux données d\'une base relationnelle;
            Administrer un site Web',
            'tp' => null,
            'formation_sub_categories_id' => 1
        ]);
        Formation_Tarification::create([
            'Name' => 'FORMATION ACCÉLÉRÉE',
            'Price' => 3000,
            'Type' => 'INDIVIDUEL',
            'Volume_Horraire' => 24,
            'Duree_formation' => null,
            'Debut_formation' => 'DANS UN DÉLAIS DE 24 H APRÉS LA VALIDATION DE VOTRE INSCRIPTION',
            'Deroulement' => null,
            'Horraire' => 'FLEXIBLE SELON VOTRE DISPONIBILITÉ ET LA DISPONIBILITÉ DE L\'ENSEIGNANT',
            'Dernier_Delais_Inscription' => null,
            'repartition_heures' => 'VOUS POUVEZ TERMINER DANS UN DÉLAIS DE 3 JOURS OU BIEN RÉPARTIR VOTRE HEURES SELON VOTRE RYTHME, VOTRE ENGAGEMENT',
            'formations_id' => 3
        ]);
        Formation_Tarification::create([
            'Name' => 'FORMATION CONTINUE',
            'Price' => 1000,
            'Type' => 'INDIVIDUEL',
            'Volume_Horraire' => 24,
            'Duree_formation' => '3 Mois',
            'Debut_formation' => 'DANS UN DÉLAIS DE 24 H APRÉS LA VALIDATION DE VOTRE INSCRIPTION',
            'Deroulement' => 'UNE SÉANCE DE 2H PAR SEMAINE',
            'Horraire' => 'À DÉTERMINER APRÈS LA FIN DE VOTRE INSCRIPTION',
            'Dernier_Delais_Inscription' => null,
            'repartition_heures' => null,
            'formations_id' => 3
        ]);
        Formation_Tarification::create([
            'Name' => 'FORMATION CONTINUE',
            'Price' => 400,
            'Type' => 'EN GROUPE',
            'Volume_Horraire' => 24,
            'Duree_formation' => null,
            'Debut_formation' => 'LE 01/06/2023',
            'Deroulement' => 'UNE SÉANCE DE 2H PAR SEMAINE',
            'Horraire' => 'À DÉTERMINER APRÈS LA FIN DE VOTRE INSCRIPTION POUR S\'ADAPTER AUX EMPLOIS DE TEMPS DES INSCRITS',
            'Dernier_Delais_Inscription' => 'LE 25/05/2023',
            'repartition_heures' => null,
            'formations_id' => 3
        ]);
        Formation_Tarification::create([
            'Name' => 'FORMATION fghjk',
            'Price' => 3000,
            'Type' => 'INDIVIDUEL',
            'Volume_Horraire' => 24,
            'Duree_formation' => null,
            'Debut_formation' => 'DANS UN DÉLAIS DE 24 H APRÉS LA VALIDATION DE VOTRE INSCRIPTION',
            'Deroulement' => null,
            'Horraire' => 'FLEXIBLE SELON VOTRE DISPONIBILITÉ ET LA DISPONIBILITÉ DE L\'ENSEIGNANT',
            'Dernier_Delais_Inscription' => null,
            'repartition_heures' => 'VOUS POUVEZ TERMINER DANS UN DÉLAIS DE 3 JOURS OU BIEN RÉPARTIR VOTRE HEURES SELON VOTRE RYTHME, VOTRE ENGAGEMENT',
            'formations_id' => 3
        ]);

        // Formation_Programme::create([
        //     'ModuleName' => 'INTRODUCTION',
        //     'ModuleChapitre' => 'Le modèle relationnel. ; Les notions de base : relation (table), attributs (colonnes), contraintes d\'intégrité. ; les contraintes d\'intégrité.',
        //     'formations_id' => 1
        // ]);

        Formation::create([
            'Name' => 'HTML5',
            'MotivaionName' => 'LES BASES DE LA CRÉATION D\'UNE PAGE WEB',
            'MotivaionBody' => 'Cette formation vous permettra d\'acquérir les notions essentielles du langage HTML et de ses différentes versions : HTML, XHTML, HTML5. Vous apprendrez à structurer des documents au moyen des principales balises, à les valider et à les rendre accessibles.',
            'objectifs' => 'Construire une structure de document HTML accessible et valide;
            Maîtriser les balises sémantiques;
            Créer un tableau;
            Créer la structure d\'un formulaire simple;
            Comprendre l\'importance de l\'accessibilité au travers des référentiels AccessiWeb et WCAG;',
            'tp' => null,
            'formation_sub_categories_id' => 1
        ]);


        Formation::create([
            'Name' => 'CSS3',
            'MotivaionName' => 'DONNER DU STYLE À VOS PAGES WEB',
            'MotivaionBody' => 'Le langage CSS3 est devenu le langage de référence pour la mise en page des sites Web. Durant ce cours, vous apprendrez à élaborer des feuilles de style permettant de gérer l\'apparence et la disposition des éléments de vos pages Web. Vous découvrirez également comment utiliser CSS conjointement avec JavaScript.',
            'objectifs' => 'Créer le squelette d\'une page avec du CSS;
            Formater les styles au niveau habillage de texte;
            Gérer l\'interactivité avec le JavaScript;
            Améliorer l\'interactivité des formulaires;
            Styliser des effets visuels (Ombre portée, dégradés, etc ...)',
            'tp' => null,
            'formation_sub_categories_id' => 1
        ]);

        Formation::create([
            'Name' => 'PHP 7 ET 5',
            'MotivaionName' => 'DÉVELOPPER UN SITE WEB DYNAMIQUE',
            'MotivaionBody' => 'Ce cours vous permettra de maîtriser d\'une manière opérationnelle le langage PHP dans le contexte de développement de sites Internet dynamiques. Il vous permettra aussi d\'aborder les aspects connexes à ce type de développement : bases de données, langage SQL, manipulation de fichiers graphiques...',
            'objectifs' => 'Maîtriser la syntaxe PHP en vue de développer de sites Web dynamiques;
            Traiter des formulaires Web;
            Gérer des sessions utilisateurs;
            Accéder aux données d\'une base de données MySQL;
            Créer dynamiquement des images et des graphismes',
            'tp' => null,
            'formation_sub_categories_id' => 2
        ]);


        Formation::create([
            'Name' => 'PHP 7 ET 5',
            'MotivaionName' => 'PERFECTIONNEMENT',
            'MotivaionBody' => 'Vous étudierez, dans ce cours, les aspects avancés du langage PHP liés à l\'authentification et aux manipulations des bases de données. L\'ouverture vers les nouvelles perspectives (Web 2.0) est abordée au travers d\'une introduction à Ajax et par l\'utilisation de clients riches communiquant en flux XML avec le serveur. Vous utiliserez enfin quelques briques logicielles comme PEAR ou PHPLib pour optimiser vos développements.',
            'objectifs' => 'Découvrir le paradigme objet du langage PHP;
            Gérer les dépendances et les packages d\'un projet PHP;
            Implémenter une authentification LDAP;
            Implémenter la persistance des données avec la librairie PDO;
            Mettre en œuvre des services Web SOAP et REST;
            Gérer l\'envoi de mails et la génération de PDF',
            'tp' => ' Vous verrez comment mettre en pratique les concepts objets et les API utiles au développement d\'applications d\'entreprise (accès aux bases de données, aux annuaires LDAP, échange de données XML, appels de Web Services, etc.) en utilisant PHP.',
            'formation_sub_categories_id' => 2
        ]);

        Formation::create([
            'Name' => 'JOOMLA!',
            'MotivaionName' => 'PERFECTIONNEMENT',
            'MotivaionBody' => 'Vous découvrirez comment personnaliser la présentation de votre site par la création de template et l\'enrichirez à l\'aide d\'extensions. Vous apprendrez à créer un site multilingue, à optimiser la recherche et l\'indexation de vos contenus. Vous mettrez en œuvre des fonctionnalités avancées de Joomla!.',
            'objectifs' => 'Personnaliser la présentation graphique d\'un site;
            Enrichir un site à l\'aide d\'extensions;
            Créer un site multilingue;
            Optimiser la recherche et l\'indexation de contenus;
            Publier un site sur un serveur distant;
            Sauvegarder et restaurer les données d\'un site',
            'tp' => null,
            'formation_sub_categories_id' => 2
        ]);


        Formation::create([
            'Name' => 'LARAVEL',
            'MotivaionName' => 'MAÎTRISER LE DÉVELOPPEMENT WEB PHP',
            'MotivaionBody' => 'Vous apprendrez à développer des applications Web PHP avec le framework Laravel 5.x. Sa structure se veut élégante et légère dans le cadre d\'un développement MVC et dans le respect des Design Patterns. Laravel vous permettra d\'écrire une application Web plus rapidement et plus facilement maintenable.',
            'objectifs' => 'Installer et configurer Laravel 5.x;
            Maîtriser les composants de Laravel;
            Manipuler des données via l\'ORM Eloquent;
            Concevoir des formulaires et contrôler la validation des données;
            Créer des applications Web sécurisées',
            'tp' => 'Ce cours s\'appuiera sur la création complète d\'un site Internet de publication de petites annonces.',
            'formation_sub_categories_id' => 2
        ]);




        // 3


        Formation::create([
            'Name' => 'PYTHON',
            'MotivaionName' => 'PROGRAMMATION OBJET',
            'MotivaionBody' => 'Python est un langage de programmation multiplateforme permettant le développement d\'une grande variété d\'applications. Vous en maîtriserez sa syntaxe, ses principaux mécanismes et son paradigme Objet. Vous découvrirez les fonctionnalités de la bibliothèque de modules standards, implémenterez des interfaces graphiques, accéderez aux données d\'une base tout en utilisant des outils permettant de tester et d\'évaluer la qualité du code produit.',
            'objectifs' => 'Maîtriser la syntaxe du langage Python;
            Acquérir les notions essentielles de la programmation objet;
             Connaître et mettre en œuvre les différents modules Python;
            Concevoir des interfaces graphiques;
            Mettre en œuvre les outils de test et d\'évaluation de la qualité d\'un programme Python',
            'tp' => null,
            'formation_sub_categories_id' => 3
        ]);

        // Formation::create([
        //     'Name' => '',
        //     'MotivaionName' => '',
        //     'MotivaionBody' => '',
        //     'objectifs' => '',
        //     'tp' => null,
        //     'formation_sub_categories_id' => 3
        // ]);

        // Formation_Programme::create([
        //     'ModuleName' => '',
        //     'ModuleChapitre' => '',
        //     'formations_id' => 1
        // ]);

    }
}
