
<?php

$projets = [
    [
        'id' => 1,
        'titre' => 'Mon Portfolio',
        'description' => 'Création de mon portfolio en HTML et CSS.',
        'categorie' => 'Web',
        'statut' => 'Terminé'
    ],
    [
        'id' => 2,
        'titre' => 'Mon Blog',
        'description' => 'Création d’un blog dynamique avec PHP.',
        'categorie' => 'PHP',
        'statut' => 'En cours'
    ],
    [
        'id' => 3,
        'titre' => 'Ma première page',
        'description' => 'Création de ma première page web.',
        'categorie' => 'HTML',
        'statut' => 'Terminé'
    ]
];

require 'index-template.php';
