<?php

$gal=$info_gallery->fetch();

ob_start();

echo '<div class="gallery_infos">';
echo '<p>description : '.$gal['description'].'</p>';
echo '</div>';

echo '<div class="photo_list">';



while($r = $liste->fetch(PDO::FETCH_ASSOC)) {
        echo '
        <div class="photo_list_item">
            <a href="index.php?page=photo&id='.$r['id'].'"><img src="public/gallery/'.$gal['id'].'/'.$r['nom'].'" alt="'.$r['legend'].'" title="'.$r['legend'].'"></a>
            </div>';
    } 
echo '</div>';

$content = ob_get_clean();
$title = $gal['title'];


require 'template.php';