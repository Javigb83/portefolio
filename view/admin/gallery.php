<?php
$title = "Gestion des galeries";
if(isset($gal_info)) {
    $gal_info = $gal_info->fetch();
} else {
    $gal_info['title']='';
    $gal_info['description']='';
    
}
ob_start();

// afficher un bouton pour créer une nouvelle galerie
echo '<a href="index.php?page=admin&action=gallery&do=create"> Ajouter une galerie</a>';
// afficher un formulaire éventuellement
if(isset($do)) {
    if($do=='modify' || $do=='create') {
        echo '
        <form method="post" action="index.php?page=admin&action=gallery">
             Nom : <input type="text" name="gal_name" value="'.$gal_info['title'].'"><br>
             Description : <textarea name="gal_description">'.$gal_info['description'].'</textarea><br>
             <input type="submit" name="submit" value="'.$bouton.'">
        </form>
        ';
    }
}
// afficher la liste des galeries existantes
echo '<div class="gallery_list">';
while($r = $liste->fetch(PDO::FETCH_ASSOC)) {
        echo '
        <div class="gallery_list_item">
            <h3>'.$r['title'].'</h3>
            <p>'.$r['description'].'</p>
            <a href="index.php?page=admin&action=gallery&do=modify&id='.$r['id'].'"> Modifier la galerie</a>;
            <a href="index.php?page=admin&action=gallery&do=delete&id='.$r['id'].'"> Effacer la galerie</a>;
            </div>';
    } 
echo '</div>';

?>

   
<?php
$content = ob_get_clean();

require './view/template.php';