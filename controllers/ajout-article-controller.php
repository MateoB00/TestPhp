<?php

if (!empty($_POST)) {
    if (
        !empty($_POST['titre'])
        && !empty($_POST['contenu'])
        && !empty($_POST['image'])
        && !empty($_POST['auteur'])
        && !empty($_POST['date_de_publication'])
        && strlen($_POST['contenu'] >  150)
    ) {

        require_once __DIR__ . '/../models/Article.php';
        $article = new Article;
        $article->titre = $_POST['titre'];
        $article->contenu = $_POST['contenu'];
        $article->image = $_POST['image'];
        $article->auteur = $_POST['auteur'];
        $article->date_de_publication = $_POST['date_de_publication'];

        $article->save();
        redirection("liste-articles");
    } else $error = "Vous avez mal rempli le formulaire";
}

require_once __DIR__ . '/../views/ajout-article.html.php';
