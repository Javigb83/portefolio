<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title><?=$title?></title>
    
    <link type="text/css" rel="stylesheet" href="./public/css/styles.css">
    
</head>
<body>
    <h1><?=$title?></h1>
    <header>
        <nav>
            <a href="index.php">Accueil</a>
            <a href="index.php?page=about">A propos</a>
            <a href="index.php?page=contact">Contact</a>
            <a href="index.php?page=gallery">Liste de galerie</a>
            
        </nav>
    </header>


    <main>
        <?=$content?>
    </main>
    
    <footer>
        Contenu Copyright Moi!
        <a href="index.php?page=admin">Admin</a>
    </footer>

</body>

</html>