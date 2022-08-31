<!DOCTYPE html>
<html lang="fr">
<head>
    <title>Mon book</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
<header>
    <h1>Mon book</h1>
</header>
<section>
    <nav>
        <ul>
            <li><a href="/">Accueil</a></li>
        </ul>
    </nav>
    <article>
        <?php foreach ($photos as $photo): ?>
            <img src="photos/<?= $photo->fichier ?>" width="250" />
            <h2><?= $photo->title ?></h2>
        <?php endforeach; ?>
    </article>
</section>
<footer>
    <p>Mon book - Tous droits réservés</p>
</footer>
</body>
</html>