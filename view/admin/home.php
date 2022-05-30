<?php
$title = "Accueil Admin";
ob_start();
?>

<ul>
    <li><a href="index.php?page=admin&action=gallery">Gérer les galeries</a></li>
    <li><a href="index.php?page=admin&action=photo">Gérer les photos</a></li>
    <li><a href="index.php?page=admin&action=comment">Gérer les commentaires</a></li>
    <li><a href=""></a></li>
    <li><a href="index.php?page=admin&deconex=1">Gérer la déconnexion</a></li>
</ul>     
<?php
$content = ob_get_clean();

require './view/template.php';