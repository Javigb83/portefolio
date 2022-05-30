<?php

$photo = $info_photo->fetch();

ob_start();

echo '<div class="photo_infos">';
echo '<a href="index.php?page=gallery_view&id='.$photo['gallery_id'].'"> Revenir à la liste</a>';
echo '<p>légende : '.$photo['legend'].'</p>';
echo '<img src="public/gallery/'.$photo['gallery_id'].'/'.$photo['nom'].'" alt="'.$photo['legend'].'">';
echo '</div>';
?>
<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    
    <link type="text/css" rel="stylesheet" href="photo.css">
    <link type="text/css" rel="stylesheet" href="styles.css">
    <link type="text/css" rel="stylesheet" href="photo_view.css">
    
</head>
<body>
    <div class="container">
    <form action="index.php?page=photo&id=<?=$id?>" method="post" class="form">
            Nom <input type="text" name="name" /> <br><br>
            Mail <input type="text" name="mail" /> <br><br>
            <textarea name="message" type="textarea" id=''></textarea>   <br><br>
            <input type="submit" name="submit" value="Enregistrer"/>
    </form>
    </div>
</body>
</html>
<?php
echo '<div class="comment_list">';
    // VUE
    
    if(isset($list_comment)) {
        while($liste = $list_comment->fetch(PDO::FETCH_ASSOC)) {
            echo '
            <div class="comment_list_item">
            <h3> Nom: '.$liste['author'].'</h3>
            <p> Message '.$liste['comment'].'</p>
            <p> Mail '.$liste['mail']. '</p>
            
            </div>';
        } 
        
    }
    
    echo    '</div>
        </div>';
?>

<?php
$content = ob_get_clean();
$title = 'Photo : '.$photo['legend'];


require 'template.php';