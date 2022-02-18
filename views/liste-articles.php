<?php
require_once __DIR__ . '/parties/header.php'; ?>

<h1>Nos Articles !</h1>

<?php
foreach ($articles as $article) { ?>

    <div class="card d-inline-flex" style="width: 18rem;">
        <img class="card-img-top" src="<?= $article->image ?>" alt="Image de l'article">
        <div class="card-body">
            <h5 class="card-title"><?= $article->titre ?></h5>
            <p class="card-text"><?= $article->contenu ?></p>
            <span><strong><?= $article->auteur ?> </strong></span><br>
            <span>Ecrit le : <?= $article->date_de_publication ?></span>
        </div>
    </div>

<?php } ?>
<?php
require_once __DIR__ . '/parties/footer.php';
