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

        //----------------------------------------sub-category 1 (27)  c1

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
            'formations_id' => 4
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
            'formations_id' => 4
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
            'formations_id' => 4
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
            'formations_id' => 4
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
            'Name' => 'XML',
            'MotivaionName' => 'MODÉLISER VOS DOCUMENTS ET DONNÉES',
            'MotivaionBody' => 'Ces dernières années ont vu une forte progression de la popularité de XML, le standard du W3C pour l\'écriture de documents structurés. A l\'issue de cette formation, le participant aura une maîtrise complète de la syntaxe du langage XML Schema et des règles de modélisation permises par ce langage.',
            'objectifs' => 'Maîtriser la structure d’un document XML;
            Maîtriser la syntaxe du langage XML Schema;
            Maîtriser la rédaction d’un DTD (Définition de Type de Document);',
            'tp' => null,
            'formation_sub_categories_id' => 1
        ]);

        Formation::create([
            'Name' => 'JAVASCRIPT',
            'MotivaionName' => 'PERFECTIONNEMENT',
            'MotivaionBody' => 'Le langage JavaScript est devenu incontournable pour le développement d\'applications client riches. Ce cours vous donnera tout le savoir-faire technologique pour mettre en oeuvre de véritables applications Web à partir de concepts avancés JavaScript ES5, tout en vous préparant à l\'utilisation de ES2015.',
            'objectifs' => 'Découvrir les concepts avancés JavaScript ES5;
            Mettre en pratique la Programmation Orientée Objet;
            Mettre en œuvre le framework JavaScript jQuery;
            Manipuler les API JavaScript HTML5;
            Appréhender la notion de JavaScript côté serveur avec Node.js;',
            'tp' => null,
            'formation_sub_categories_id' => 1
        ]);

        Formation::create([
            'Name' => 'ECMASCRIPT 6, MISE EN ŒUVRE',
            'MotivaionName' => 'ANTICIPER LA MIGRATION DES APPLICATIONS',
            'MotivaionBody' => 'Le langage JavaScript est devenu un langage incontournable dans les développements Web et mobiles tant côté client que côté serveur avec notamment Node.js. Cette formation vous permettra d\'utiliser en production dès aujourd\'hui les nouvelles fonctionnalités des dernières versions EcmaScript (2015, 2016, 2017).',
            'objectifs' => 'Découvrir les nouveautés syntaxiques du JavaScript;
            Maîtriser les nouvelles API;
            Utiliser ES6 en production;
            Anticiper l\'évolution des frameworks du Front-End;
            Se préparer aux nouvelles méthodes de développement JavaScript;',
            'tp' => 'Réalisation d\'une application et portage en modules ES6.',
            'formation_sub_categories_id' => 1
        ]);

        Formation::create([
            'Name' => 'AJAX',
            'MotivaionName' => 'PROGRAMMATION CÔTÉ CLIENT',
            'MotivaionBody' => 'Ajax est devenu une technologie incontournable du développement d\'applications riches Web 2.0. Durant ce cours, vous apprendrez la manipulation de ses composants, le CSS, le DOM, ainsi qu\'à établir des échanges client-serveur.',
            'objectifs' => 'Manipuler les classes et d\'objets;
            Créer des structures XML bien formée et valide;
            Connaitre les Traitements XSLT pour gérer les flux RSS;
            Mettre en œuvre des requêtes asynchrones et multithreads;
            Programmer en Ajax avec HTML5',
            'tp' => null,
            'formation_sub_categories_id' => 1
        ]);

        // Formation::create([
        //     'Name' => '',
        //     'MotivaionName' => '',
        //     'MotivaionBody' => '',
        //     'objectifs' => '',
        //     'tp' => null,
        //     'formation_sub_categories_id' => 1
        // ]);


        //----------------------------------------sub-category 2 (11)   c1

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
            'Name' => 'FORMATION EN PHP 7 ET 5',
            'MotivaionName' => 'SÉCURISER VOS APPLICATIONS',
            'MotivaionBody' => 'De par sa nature même, le service dynamique de pages Web ouvre de nombreuses portes sur le monde extérieur. Pour le développeur, il est primordial de prendre conscience des types d\'attaques auxquelles son code sera potentiellement exposé et de savoir y faire face, double objectif de ce stage.',
            'objectifs' => 'Prendre conscience des types d\'attaques auxquelles son code peut être exposé;
            Intégrer la sécurité dans les développements dès la conception;
            Identifier les failles possibles au niveau des développements;
            Développer des applications plus sécurisées',
            'tp' => 'Des postes sous Windows équipés des serveurs Apache2 avec PHP, MySql, Oracle, LDAP, FTP et mail seront mises à la disposition des participants.',
            'formation_sub_categories_id' => 2
        ]);
        Formation::create([
            'Name' => 'ZEND FRAMEWORK 2 ET 3',
            'MotivaionName' => 'MAÎTRISE DU DÉVELOPPEMENT WEB',
            'MotivaionBody' => 'Ce cours vous apportera les meilleures pratiques de développement Web avec le Zend Framework version 2. Après l\'avoir installé, vous en découvrirez l\'architecture et les concepts. Vous concevrez des modules, des formulaires, aborderez l\'injection de dépendances et utiliserez les principaux composants du framework.',
            'objectifs' => 'Installer et configurer une application Zend Framework 2 et 3;
            Maîtriser les Design Patterns Objets en particulier le MVC;
            Utiliser les principaux composants de Zend Framework;
            Automatiser les tests dans Zend Framework;
            Développer des composants métiers avec Zend\Db et Doctrine',
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


        // Formation::create([
        //     'Name' => '',
        //     'MotivaionName' => '',
        //     'MotivaionBody' => '',
        //     'objectifs' => '',
        //     'tp' => null,
        //     'formation_sub_categories_id' => 2
        // ]);
        //----------------------------------------sub-category 3 (8)         c2

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
        Formation::create([
            'Name' => 'PYTHON',
            'MotivaionName' => 'PERFECTIONNEMENT',
            'MotivaionBody' => 'Le langage Python s\'impose aujourd\'hui comme un socle technologique pour le développement de grands projets logiciels. Vous mettrez en œuvre, dans cette formation, les techniques avancées du langage Python ainsi que ses principales librairies afin de pouvoir répondre aux exigences qualité de ces projets.',
            'objectifs' => 'Implémenter de manière rigoureuse des Design Patterns reconnus;
            Utiliser les techniques avancées du langage Python : Context Manager, métaclasses, closures, fonctions avancées;
           Optimiser les performances de vos programmes à l\'aide du monitoring et du parallélisme;
           Packager et déployer ses artefacts Python;
           Exploiter des librairies contribuant au succès du langage : calcul scientifique, Intelligence Artificielle, XML, réseau)',
            'tp' => null,
            'formation_sub_categories_id' => 3
        ]);
        Formation::create([
            'Name' => 'DJANGO',
            'MotivaionName' => 'DÉVELOPPEMENT WEB AVEC PYTHON',
            'MotivaionBody' => 'Django est un framework Web MVC (Modèle-Vue-Contrôleur) basé sur le langage Python. Cette formation vous apprendra à mettre en œuvre ce framework et à utiliser avec efficacité ses différents modules dans le cadre du développement d\'applications Web.',
            'objectifs' => 'Savoir interfacer Django avec une base de données;
            Développer des vues dynamiques;
            Développer des templates;
            Gérer les formulaires Django;
            Mettre en oeuvre les principales fonctions avancées',
            'tp' => null,
            'formation_sub_categories_id' => 3
        ]);
        Formation::create([
            'Name' => 'PROGRAMMATION EN C',
            'MotivaionName' => 'PROGRAMMATION EN C',
            'MotivaionBody' => 'Cette formation intensif vous permettra d\'acquérir une connaissance réellement opérationnelle du langage. Il vous expliquera le fonctionnement des différents mécanismes et vous montrera leur mise en œuvre grâce à de nombreux exercices pratiques. A l\'issue de cette formation, vous serez en mesure d\'écrire des programmes C robustes et portables.',
            'objectifs' => 'Maîtriser la chaîne de production d\'un programme écrit en langage C;
            Mettre en œuvre les opérateurs, les expressions et les structures de contrôle du langage C;
             Manipuler des structures de données, des tableaux, des pointeurs et des chaînes de caractères;
            Organiser le code d\'un programme à l\'aide de fonctions;
            Exploiter les principales bibliothèques standard du langage C',
            'tp' => 'Des machines sous système Unix ou Windows (PC) seront mises à la disposition des participants de manière à mettre en pratique les notions présentées.',
            'formation_sub_categories_id' => 3
        ]);
        Formation::create([
            'Name' => 'PROGRAMMATION EN C',
            'MotivaionName' => 'PERFECTIONNEMENT',
            'MotivaionBody' => 'Cette formation vous permettra d\'approfondir vos connaissances en langage C. Vous manipulerez les aspects avancés des pointeurs et intégrerez des algorithmes récursifs dans vos développements. Vous découvrirez les évolutions apportées par la programmation orientée objet ainsi que les ajouts majeurs de la norme C11.',
            'objectifs' => 'Manipuler les pointeurs, les pointeurs de fonctions et les bibliothèques intégrées au langage;
            Maîtriser les structures de données récursives et leurs algorithmes intrinsèques;
            Utiliser les outils de développement associés au langage C;
            Maîtriser les évolutions orientées objets et les ajouts majeurs de la norme C11',
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

        //----------------------------------------sub-category 4 (13)         c2

        Formation::create([
            'Name' => 'SWIFT',
            'MotivaionName' => 'LES BASES DU LANGAGE',
            'MotivaionBody' => 'Nouveau langage de programmation créé par Apple, Swift se présente comme une alternative à Objective-C, moderne et plus performante. Vous apprendrez dans cette formation à développer des applications Swift en environnement MacOS. Vous découvrirez les concepts de base de Swift et ses aspects novateurs.',
            'objectifs' => 'Appréhender les concepts de base du langage Swift;
            Créer un projet Swift;
            Utiliser la Swift Standard Library',
            'tp' => 'Exercices pratiques sous MacOS X et XCode 8.',
            'formation_sub_categories_id' => 4
        ]);
        Formation::create([
            'Name' => 'IPHONE/IPAD',
            'MotivaionName' => 'DÉVELOPPER DES APPLICATIONS EN SWIFT/PERFECTIONNEMENT',
            'MotivaionBody' => 'Vous découvrirez dans ce cours des concepts avancés de Swift, telle que la programmation fonctionnelle que vous appliquerez au développement mobile. Vous développerez dans ce cadre des tâches de background, utiliserez le Core Motion et mettrez en œuvre les accessoires, les extensions, les threads et les notifications.',
            'objectifs' => 'Découvrir les aspects avancés de la programmation Swift;
            Mettre en œuvre la programmation fonctionnelle;
            Développer et contrôler des tâches de background;
            Pratiquer le framework Core Motion et des capteurs;
            Programmer des accessoires externes',
            'tp' => 'Chaque chapitre donnera lieu à des exercices adaptés',
            'formation_sub_categories_id' => 4
        ]);
        Formation::create([
            'Name' => 'KOTLIN',
            'MotivaionName' => 'DÉVELOPPER DES APPLICATIONS POUR ANDROID',
            'MotivaionBody' => 'Vous découvrirez dans ce cours les fonctionnalités et les capacités de la plateforme Android dédiée au développement d\'applications mobiles. Avec le langage Kotlin, vous apprendrez à développer des applications tirant pleinement partie de cette plateforme.',
            'objectifs' => 'Connaître l\'architecture Android.;
            Maîtriser le cycle de développement sur cette plateforme.;
            Développer des interfaces utilisateurs.;
            Gérer la persistance des données.;
            Exploiter les fonctionnalités d\'un smartphone Android.',
            'tp' => null,
            'formation_sub_categories_id' => 4
        ]);
        // Formation::create([
        //     'Name' => '',
        //     'MotivaionName' => '',
        //     'MotivaionBody' => '',
        //     'objectifs' => '',
        //     'tp' => null,
        //     'formation_sub_categories_id' => 4
        // ]);

        //----------------------------------------sub-category 5 (3)         c3

        Formation::create([
            'Name' => 'ORACLE SQL',
            'MotivaionName' => '',
            'MotivaionBody' => 'Une formation pratique aux aspects essentiels, logique et syntaxe, du langage SQL. Ce cours vous apportera une méthode sûre d\'écriture de requêtes SQL complexes.',
            'objectifs' => ' Comprendre le modèle relationnel.
            savoir identifier les objets d\'une base de données oracle ./li>
            interroger et classer les données d\'une table.
            manipuler les données dans les tables de la base.
            savoir restituer les données.',
            'tp' => null,
            'formation_sub_categories_id' => 5
        ]);
        Formation::create([
            'Name' => 'MYSQL',
            'MotivaionName' => 'ADMINISTRATION AVANCÉE',
            'MotivaionBody' => 'Ce cours propose de vous rendre opérationnel sur un ensemble d\'aspects avancés de l\'administration MySQL tels que la configuration de plusieurs instances sur une même machine, la réplication et l\'architecture MySQL Cluster.',
            'objectifs' => 'Installer plusieurs instances de MySQL sur un même serveur;
            Connaître les meilleures pratiques pour améliorer le stockage, comme la compression de tables, la défragmentation;
            Améliorer la sécurité en utilisant SSL pour chiffrer les connexions d\'utilisateurs;
            Comprendre le principe de la réplication et la mettre en œuvre dans MySQL;
            Mettre en place une architecture MySQL en cluster',
            'tp' => null,
            'formation_sub_categories_id' => 5
        ]);
        Formation::create([
            'Name' => 'MARIADB',
            'MotivaionName' => 'PRISE EN MAIN',
            'MotivaionBody' => 'Un cours intensif qui vous permettra d\'acquérir toutes les compétences nécessaires à l\'utilisation efficace et fiable de la base de données MariaDB : la pratique du langage SQL, les objets de la base de données, la sécurité... Cette formation propose également une introduction à l\'administration.',
            'objectifs' => null,
            'tp' => null,
            'formation_sub_categories_id' => 5
        ]);
        

    }
}
