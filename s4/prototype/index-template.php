<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mon Portfolio</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<header>
    <h1>Mon Portfolio</h1>

    <nav>
        <a href="#accueil">Accueil</a>
        <a href="#projets">Projets</a>
    </nav>
</header>

<section id="accueil">
    <h2>Bonjour, je suis Khadija</h2>
    <p>Apprenante en développement web.</p>
</section>

<section id="projets">
    <h2>Mes projets</h2>

    <div class="liste-projets">

        <?php foreach ($projets as $projet): ?>

            <article class="carte">

                <h3><?= htmlspecialchars($projet['titre']) ?></h3>

                <p><?= htmlspecialchars($projet['description']) ?></p>

                <span><?= htmlspecialchars($projet['categorie']) ?></span>

                <?php if ($projet['statut'] === 'Terminé'): ?>
                    <p>Projet terminé</p>
                <?php else: ?>
                    <p>Projet en cours</p>
                <?php endif; ?>

                <a href="#">
                    Voir le projet
                </a>

            </article>

        <?php endforeach; ?>

    </div>
</section>

</body>
</html>
