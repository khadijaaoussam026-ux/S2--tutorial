
<?php

$articles = [
    [
        'id' => 1,
        'titre' => 'Apprendre PHP',
        'contenu' => 'PHP permet de créer des pages web dynamiques.',
        'image' => 'article-example.png',
        'date_creation' => '2026-02-14',
        'categorie_libelle' => 'Développement'
    ],

    [
        'id' => 2,
        'titre' => 'Découvrir le CSS',
        'contenu' => 'CSS permet de styliser les pages web.',
        'image' => 'article-example.png',
        'date_creation' => '2026-02-10',
        'categorie_libelle' => 'Design'
    ]
];

require 'index-template.php';
