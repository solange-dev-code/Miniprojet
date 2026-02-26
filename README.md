<<<<<<< HEAD
Schoolprepar

Schoolprepar est une application web développée avec le framework Symfony.
Ce projet a été réalisé dans le cadre d’un apprentissage sur l’architecture MVC (Modèle – Vue – Contrôleur) et la structuration d’un projet professionnel.

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


3-Architecture du projet
Le projet respecte l’architecture MVC :
    Model : Gestion des données
    View : Fichiers Twig pour l’affichage
    Controller : Gestion des routes et logique


4-Contrôleurs créés

    Les contrôleurs ont été générés via le terminal :

        php bin/console make:controller HomeController
        php bin/console make:controller StudentController
        php bin/console make:controller NanaController
        php bin/console make:controller DedeController


5-Gestion des routes

Les routes ont été définies dans les contrôleurs à l’aide des annotations #[Route].
Exemple 
      #[Route('/student', name: 'app_student')]
    public function index(): Response
    {
        return $this->render('student/index.html.twig', [
            'controller_name' => 'StudentController',
        ]);
    }


6-navigation entre les pages 

Dans le HomeController, des liens ont été ajoutés pour accéder aux pages :
    Student
    Nana
    Dede
Exemple dans base.html.twig :
    <nav>
            <p>
                <a href="dede/index.html.twig">Dede's</a>
            </p>
            <p>
                <a href="nana/index.html.twig">Nana's</a>
            </p>
            <p>
                <a href="student/index.html.twig">student's</a>
            </p>

        </nav>


7-Lancement du projet 
    php -S localhost:8000 -t public puis http://localhost:8000


Auteur
Projet réalisé par KPETCHE Abla Solange
Année académique 2025–2026
