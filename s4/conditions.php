
<?php foreach ($articles as $article): ?>

<div class="carte-article">

    <span class="etiquette-categorie <?php if ($article['categorie_couleur'] == 'bleu'): ?>bleu<?php else: ?>rose<?php endif; ?>">
        <?= htmlspecialchars($article['categorie_libelle']) ?>
    </span>

    <div class="carte-contenu">

        <?php if ($article['id'] == 1): ?>
            <small class="badge-special">⭐ À la une</small>
        <?php endif; ?>

        <h2>
            <?= htmlspecialchars($article['titre']) ?>
        </h2>

        <p>
            <?= htmlspecialchars(substr($article['contenu'], 0, 100)) ?>...
        </p>

        <div class="carte-meta">
            <span>
                <?= date('d M Y', strtotime($article['date_creation'])) ?>
            </span>
            <span>5 min</span>
        </div>

    </div>

</div>

<?php endforeach; ?>
