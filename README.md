
Schoolprepar

SchoolPrepar est une plateforme web développée avec Symfony permettant
aux étudiants de découvrir les filières et établissements disponibles.


Les technologies utilisées    
    PHP
    Composer
    Git
    Symfony
    HTML / Twig

Les étapes de mise en place du projet

1-Installation des outils

    Les outils suivants ont été installés :
    Installation de Composer
    Installation de Git
    Installation de Symfony


2-Création du projet Symfony

Le projet a été créé avec la commande suivante :
    symfony new Schoolprepar --webapp

Prérequis
    PHP 8.1+
    Composer
    Symfony CLI

Étapes de clonage

1. git clone <url-du-repo>
cd schoolprepar

2. Installer les dépendances
composer install

3. Lancer le serveur
symfony serve

4. Ouvrir dans le navigateur
http://127.0.0.1:8000


src/
└── Controller/
    ├── Front/
    │   ├── HomeController.php
    │   ├── FiliereController.php
    │   └── EtablissementController.php
    └── Admin/
        ├── AdminDashboardController.php
        ├── AdminFiliereController.php
        └── AdminEtablissementController.php

templates/
├── front/
│   ├── base.html.twig
│   ├── home.html.twig
│   ├── partials/
│   │   ├── nav.html.twig
│   │   └── footer.html.twig
│   ├── filiere/
│   │   ├── index.html.twig
│   └── etablissement/
│       └── index.html.twig
└── admin/
    ├── base.html.twig
    ├── dashboard.html.twig
    ├── partials/
    │   ├── nav.html.twig
    │   ├── aside.html.twig
    │   └── footer.html.twig
    ├── filiere/
    │   └── index.html.twig
    └── etablissement/
        └── index.html.twig

public/
├── Charitize/   ← Template front-office
└── Mentor/      ← Template back-office

Front-office
 Route  URL  Description 

| home | / | Page d'accueil |
| filieres_list | /filieres | Liste des filières |
| filiere_show | /filieres/{id} | Détail d'une filière |
| etablissements_list | /etablissements | Liste des établissements |

 Back-office
| Route  URL  Description |

| admin_dashboard | /admin | Dashboard admin |
| admin_filieres_list | /admin/filieres | Gestion des filières |
| admin_etablissements_list | /admin/etablissements | Gestion des établissements 

Templates utilisés

Front-office: Charitize (ThemeWagon) – template orienté présentation
Back-office : Mentor (BootstrapMade/ThemeWagon) – template éducatif


Fonctionnalités implémentées

- Routing Symfony avec attributs PHP 8
- Contrôleurs organisés par espace (Front / Admin)
- Vues Twig dynamiques avec héritage (extends/block)
- Navigation dynamique avec détection de la route active
- Deux interfaces distinctes (front-office et back-office)
- Intégration de deux templates HTML existants
- Données fictives en attendant la base de données (TP3)


7-Lancement du projet 
    http://127.0.0.1:8000


Auteur
Projet réalisé par KPETCHE Abla Solange
Année académique 2025–2026
